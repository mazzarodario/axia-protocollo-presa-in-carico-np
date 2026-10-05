<?php
/**
 * Protocollo Presa in Carico NP — pagina standalone (bozza)
 *
 * Menu: Primo colloquio/Affidamento · Valutazione · Primo trattamento · Ulteriori trattamenti
 * Usa connessione, login e invio mail dell'app PHPRunner tramite include/dbcommon.php.
 *
 * Due ingressi al percorso (parametro sel):
 *   pc<ID>  → primo colloquio (primocolloqio); paziente abbinato per nome ad anagrafe
 *   af<ID>  → affidamento diretto al terapista (affidamenti_np); paziente abbinato
 *             a mano dopo che la segreteria ha creato l'anagrafica
 * L'affidamento equivale al primo colloquio: dopo l'abbinamento le fasi 2–4 sono identiche.
 *
 * Riconoscimento delle fasi: ordine cronologico delle impegnative della pratica, cioè
 * quelle con data_imp dal giorno d'inizio (data colloquio o data richiesta affidamento),
 * ordinate per giorno e numero:
 *   1ª → prima impegnativa (sorgente delle copie)
 *   2ª → valutazione
 *   3ª → primo trattamento
 *   4ª e seguenti → ulteriori trattamenti, esclusi i colloqui di restituzione
 * Colloquio di restituzione: dopo il primo trattamento, impegnativa con prodotto in
 * PRODOTTI_RESTITUZIONE; appartiene al primo trattamento se precede il primo ulteriore,
 * altrimenti agli ulteriori trattamenti.
 * I flag valutazione/trattamento1/attesa/... non servono a riconoscere la fase.
 *
 * Nota: DB::PrepareSQL non mette apici — i parametri testo vanno scritti ':1'.
 */
@ini_set("display_errors", "1");
@ini_set("display_startup_errors", "1");

// Connessione, credenziali, login e mail: SOLO dall'app PHPRunner compilata accanto a questa pagina.
// La pagina non contiene credenziali: ogni compilazione (locale o server esterni) porta le sue.
require_once(__DIR__ . "/include/dbcommon.php");

// Richieste di affidamento: a segreteria + terapista scelto (mail da utenti), in cc a NP
const EMAIL_SEGRETERIA = 'segreteria@axiacoop.it';
const EMAIL_CC_NP = 'np@axiacoop.it';

// Pazienti selezionabili: primi colloqui da questa data
const DATA_INIZIO_COLLOQUI = '2026-09-01';

// Valori ammessi nel modulo di affidamento
const SETTORI_AFFIDO = ['NP', 'PM'];
const ETA_AFFIDO = ['A' => 'A — Adulta', 'B' => 'B — Evolutiva'];
const SESSI_AFFIDO = ['M', 'F'];
const DISTRETTO_AFFIDO = 'P';

const SEZIONI = [
	'colloquio'  => 'Primo colloquio / Affidamento',
	'valutazione' => 'Valutazione',
	'trattamento' => 'Primo trattamento',
	'ulteriori'  => 'Ulteriori trattamenti',
];

// Prodotti ammessi per il colloquio di restituzione (idprodotto)
const PRODOTTI_RESTITUZIONE = [127, 256, 282, 114, 255, 254, 237];

// Professioni considerate "terapisti NP" in tabella dipendenti
const PROFESSIONI_NP = ['Logopedia', 'Psicologia', 'Neuro Psicomotricità'];

// Stessa logica di accesso delle pagine generate
if (Security::hasLogin()) {
	if (!isLogged() || Security::isGuest()) {
		Security::tryRelogin();
	}
	if (!isLogged()) {
		redirectToLogin();
		return;
	}
}

function h($v): string {
	return htmlspecialchars((string)($v ?? ''), ENT_QUOTES, 'UTF-8');
}

function dataIt($v): string {
	if (!$v || strpos((string)$v, '0000') === 0) return '—';
	$t = strtotime((string)$v);
	return $t ? date('d/m/Y', $t) : '—';
}

function righe(string $sql): array {
	$rs = DB::Query($sql);
	$out = [];
	while ($r = $rs->fetchAssoc()) $out[] = $r;
	return $out;
}

/** Valore SQL quotato ed escapato, NULL se vuoto */
function sqlVal($v): string {
	return ($v === null || $v === '') ? 'NULL' : DB::PrepareSQL("':1'", $v);
}

/**
 * Impegnative della pratica in ordine cronologico (giorno, poi numero), con sigla/descrizione prodotto.
 * $dal: giorno d'inizio della pratica (Y-m-d); le impegnative precedenti sono storia passata e sono escluse.
 * nome_terapista: se terapista contiene un id_nominativo (nuove impegnative), il nome da dipendenti.
 */
function impegnativePratica(int $id_utente, string $dal): array {
	return righe(DB::PrepareSQL(
		"SELECT i.*, p.siglaprodotto, p.descrizioneprodotto,
		        COALESCE(d.cognome_e_nome, i.terapista) AS nome_terapista
		   FROM impegnative i
		   LEFT JOIN prodotti p ON p.idprodotto = i.idprodotto
		   LEFT JOIN dipendenti d ON i.terapista REGEXP '^[0-9]+$' AND d.id_nominativo = i.terapista
		  WHERE i.id_utente = :1 AND DATE(i.data_imp) >= ':2'
		  ORDER BY DATE(i.data_imp), i.id_impegnativa", $id_utente, $dal));
}

/**
 * Fasi della pratica per ordine cronologico: prima, valutazione, primo trattamento, ulteriori.
 * Business-critical: è la regola che decide cosa si può generare in ogni fase.
 */
function fasiPratica(array $imp): array {
	$fasi = [
		'prima'                    => $imp[0] ?? null,
		'valutazione'              => $imp[1] ?? null,
		'trattamento'              => $imp[2] ?? null,
		'ulteriori'                => [],
		'restituzioni_trattamento' => [], // tra primo trattamento e primo ulteriore
		'restituzioni_ulteriori'   => [], // dopo il primo ulteriore
	];
	foreach (array_slice($imp, 3) as $i) {
		if (in_array((int)$i['idprodotto'], PRODOTTI_RESTITUZIONE, true)) {
			$fasi[$fasi['ulteriori'] ? 'restituzioni_ulteriori' : 'restituzioni_trattamento'][] = $i;
		} else {
			$fasi['ulteriori'][] = $i;
		}
	}
	return $fasi;
}

/**
 * Scelta del terapista (dipendenti attivi, si salva id_nominativo) con ricerca per nominativo.
 * Chi ha scelto riceve la mail con l'attività da svolgere.
 */
function pickerTerapista(string $suffisso, int $selezionato, bool $abilitato = true): string {
	$dis = $abilitato ? '' : ' disabled';
	$id = 'ter_' . $suffisso;
	$html = '<label for="cerca_' . $id . '">Terapista (riceve la mail) *</label>'
		. '<input type="search" id="cerca_' . $id . '" data-target="' . $id . '" placeholder="Cerca nominativo…" oninput="filtraTerapisti(this)" autocomplete="off"' . $dis . '>'
		. '<select id="' . $id . '" name="id_terapista" size="6" required class="elenco-terapisti"' . $dis . '>';
	foreach (dipendentiAttivi() as $d) {
		$html .= '<option value="' . (int)$d['id_nominativo'] . '"' . ($selezionato === (int)$d['id_nominativo'] ? ' selected' : '') . '>'
			. h($d['cognome_e_nome']) . ($d['professione'] ? ' — ' . h($d['professione']) : '')
			. ($d['mail'] ? '' : ' (senza mail)') . '</option>';
	}
	return $html . '</select>';
}

/** Campo note per il terapista, riportate nella mail */
function campoNote(string $suffisso, bool $abilitato = true): string {
	return '<label for="note_' . $suffisso . '">Note per il terapista</label>'
		. '<textarea id="note_' . $suffisso . '" name="note_terapista"' . ($abilitato ? '' : ' disabled') . '>'
		. h($_POST['note_terapista'] ?? '') . '</textarea>';
}

// Quantità ammessa per primo trattamento / ulteriori (inserita a ogni creazione)
const QUANTITA_MAX_TRATTAMENTO = 99;

/** Modulo per generare primo trattamento / ulteriore: prodotto, quantità, terapista, note */
function formTrattamento(string $azione, string $label, string $sel, bool $abilitato, int $ter_default): string {
	$id = 'prod_' . $azione;
	$select = selectProdotti($id, 0, '', prodottiTrattamento(), ['NP' => 'NP', 'PM' => 'PM']);
	if (!$abilitato) $select = str_replace('<select ', '<select disabled ', $select);
	return '<form method="post" onsubmit="return confirm(\'Confermi: ' . h($label) . '? Il terapista riceverà una mail.\')">'
		. campiNascosti($azione, $sel)
		. '<div class="modulo"><div><label for="' . $id . '">Prodotto *</label>' . $select . '</div>'
		. '<div><label for="qta_' . $azione . '">Quantità (sedute) *</label>'
		. '<input type="number" id="qta_' . $azione . '" name="quantita" min="1" max="' . QUANTITA_MAX_TRATTAMENTO . '" step="1" required'
		. ($abilitato ? '' : ' disabled') . '></div>'
		. '<div class="largo">' . pickerTerapista($azione, $ter_default, $abilitato) . '</div>'
		. '<div class="largo">' . campoNote($azione, $abilitato) . '</div></div><br>'
		. '<button type="submit"' . ($abilitato ? '' : ' disabled') . '>' . h($label) . '</button></form>';
}

/** Prodotti per il colloquio di restituzione */
function prodottiRestituzione(): array {
	return righe(DB::PrepareSQL(
		"SELECT idprodotto, siglaprodotto, descrizioneprodotto, prezzo_unitario
		   FROM prodotti WHERE idprodotto IN (:1) ORDER BY siglaprodotto", PRODOTTI_RESTITUZIONE));
}

/**
 * Riquadro "Colloquio di restituzione" per le fasi primo trattamento / ulteriori:
 * scelta del prodotto e generazione dell'impegnativa, più l'elenco di quelle già create.
 */
function riquadroRestituzione(string $fase, string $sel, bool $abilitato, string $nota, array $elenco, ?int $evidenzia, int $ter_default): string {
	$html = '<div class="card"><h3>Colloquio di restituzione</h3>';
	if ($nota !== '') $html .= '<p class="nota">' . h($nota) . '</p>';
	$html .= '<form method="post" onsubmit="return confirm(\'Generare l\\\'impegnativa per il colloquio di restituzione? Il terapista riceverà una mail.\')">'
		. campiNascosti('restituzione', $sel)
		. '<input type="hidden" name="fase" value="' . h($fase) . '">'
		. '<div class="modulo"><div><label for="rest_' . h($fase) . '">Prodotto *</label>'
		. '<select id="rest_' . h($fase) . '" name="idprodotto" required' . ($abilitato ? '' : ' disabled') . '><option value="">—</option>';
	foreach (prodottiRestituzione() as $p) {
		$html .= '<option value="' . (int)$p['idprodotto'] . '" title="' . h($p['descrizioneprodotto']) . '">'
			. h($p['siglaprodotto']) . ' — € ' . number_format((float)$p['prezzo_unitario'], 2, ',', '.') . '</option>';
	}
	$html .= '</select></div>'
		. '<div class="largo">' . pickerTerapista('rest_' . $fase, $ter_default, $abilitato) . '</div>'
		. '<div class="largo">' . campoNote('rest_' . $fase, $abilitato) . '</div></div><br>'
		. '<button type="submit"' . ($abilitato ? '' : ' disabled') . '>+ Inserisci colloquio di restituzione</button></form>';
	return $html . tabellaImp($elenco, $evidenzia) . '</div>';
}

/** Giorno d'inizio della pratica: data del primo colloquio o della richiesta di affidamento */
function inizioPratica(?array $colloquio, ?array $affido): ?string {
	$d = $colloquio['data_pc'] ?? $affido['data_richiesta'] ?? null;
	return $d ? substr((string)$d, 0, 10) : null;
}

/** Dipendenti attivi per la scelta del terapista (si salva id_nominativo) */
function dipendentiAttivi(): array {
	static $cache = null;
	if ($cache === null) {
		// mail dalla tabella utenti, abbinata per nome come per l'affidamento
		$cache = righe("SELECT d.id_nominativo, d.cognome_e_nome, d.professione, MAX(u.mail) AS mail
		                  FROM dipendenti d
		                  LEFT JOIN utenti u ON u.NOME = d.cognome_e_nome AND u.mail LIKE '%@%'
		                 WHERE d.attivo = 1
		                 GROUP BY d.id_nominativo, d.cognome_e_nome, d.professione
		                 ORDER BY d.cognome_e_nome");
	}
	return $cache;
}

/** Primo colloquio per ID, con id_utente abbinato da anagrafe (null se non abbinato) */
function caricaColloquio(int $id_pc): ?array {
	return righe(DB::PrepareSQL(
		"SELECT pc.ID, pc.Paziente, pc.Operatore, pc.`Data Primo Colloquio` AS data_pc,
		        pc.`Data Nascita` AS nascita, a.id_utente
		   FROM primocolloqio pc
		   LEFT JOIN anagrafe a ON a.cognome_e_nome = pc.Paziente
		  WHERE pc.ID = :1", $id_pc))[0] ?? null;
}

/** Affidamento per ID, con nome di anagrafe se abbinato */
function caricaAffidamento(int $id_af): ?array {
	return righe(DB::PrepareSQL(
		"SELECT af.*, a.cognome_e_nome AS nome_anagrafe
		   FROM affidamenti_np af
		   LEFT JOIN anagrafe a ON a.id_utente = af.id_utente
		  WHERE af.id_affidamento = :1", $id_af))[0] ?? null;
}

/**
 * Stato di un affidamento: [codice, etichetta]
 *   attesa_anag → la segreteria non ha ancora creato/abbinato l'anagrafica
 *   attesa_imp  → paziente abbinato, manca l'impegnativa
 *   carico      → prima impegnativa presente: il percorso prosegue con le fasi 2–4
 */
function statoAffidamento($id_utente, $ha_imp): array {
	if (!$id_utente) return ['attesa_anag', 'In attesa di anagrafica'];
	if (!$ha_imp) return ['attesa_imp', 'In attesa di impegnativa'];
	return ['carico', 'In carico'];
}

/**
 * Confronto nominativo primo colloquio ↔ prima impegnativa.
 * Restituisce [codice, etichetta]: ok | case | diff | noimp
 */
function statoAllineamento(string $paziente, ?string $nome_imp): array {
	if ($nome_imp === null) return ['noimp', 'Nessuna impegnativa da confrontare'];
	$a = trim($paziente);
	$b = trim($nome_imp);
	if ($a === $b) return ['ok', 'Allineato'];
	if (mb_strtoupper(preg_replace('/\s+/', ' ', $a)) === mb_strtoupper(preg_replace('/\s+/', ' ', $b))) {
		return ['case', 'Differenza solo di maiuscole/spazi'];
	}
	return ['diff', 'Nominativi diversi'];
}

/**
 * Possibili pazienti in anagrafe per un nominativo non abbinato.
 * L'ordine cognome/nome può essere invertito, quindi:
 *   1) stesse parole in qualunque ordine (es. "Mario Rossi" → "ROSSI MARIO")
 *   2) in subordine, una qualsiasi delle parole come cognome (inizio nome)
 * Se nota la data di nascita, chi coincide va in cima (campo stessa_nascita).
 */
function candidatiAbbinamento(string $paziente, $nascita = null): array {
	$parole = array_values(array_filter(
		preg_split('/\s+/', str_replace(['%', '_'], '', trim($paziente))),
		function ($p) { return mb_strlen($p) >= 2; }));
	if (!$parole) return [];

	$tutte = $alcune = [];
	foreach ($parole as $p) {
		$tutte[]  = DB::PrepareSQL("CONCAT(' ', a.cognome_e_nome, ' ') LIKE '% :1 %'", $p);
		$alcune[] = DB::PrepareSQL("a.cognome_e_nome LIKE ':1%'", $p);
	}
	$cond_tutte = '(' . implode(' AND ', $tutte) . ')';
	$data = $nascita ? substr((string)$nascita, 0, 10) : null;
	$cond_nascita = $data ? DB::PrepareSQL("DATE(a.data_di_nascita) = ':1'", $data) : '0';

	return righe(
		"SELECT a.id_utente, a.cognome_e_nome, a.data_di_nascita,
		        $cond_tutte AS stesse_parole, $cond_nascita AS stessa_nascita,
		        (SELECT i.cognome_e_nome FROM impegnative i WHERE i.id_utente = a.id_utente
		          ORDER BY i.data_imp, i.id_impegnativa LIMIT 1) AS nome_imp
		   FROM anagrafe a
		  WHERE $cond_tutte OR " . implode(' OR ', $alcune) . "
		  ORDER BY stessa_nascita DESC, stesse_parole DESC, a.cognome_e_nome LIMIT 15");
}

/**
 * Crea una nuova impegnativa copiando la prima impegnativa della pratica ($prima).
 * $dati_specifici: campi impostati dall'operatore prima della copia (es. per la valutazione:
 * idprodotto, quantita, terapista), che prevalgono su quelli copiati.
 * Business-critical: i campi sovrascritti sono tutti qui, da perfezionare.
 */
function creaCopiaImpegnativa(array $prima, string $tipo, array $dati_specifici = []): ?int {
	$id_utente = (int)$prima['id_utente'];

	$nuova = array_diff_key($prima, array_flip([
		'id_impegnativa', 'ultima_modifica', 'siglaprodotto', 'descrizioneprodotto', 'nome_terapista',
	]));

	// Nuova pratica: stato azzerato; scadenza, note e campi riserva non si copiano
	$nuova = array_merge($nuova, [
		'data_imp'                => date('Y-m-d H:i:s'),
		'anno'                    => (int)date('Y'),
		'data_inizio_trattamento' => null,
		'data_dimissione'         => null,
		'data_sospensione'        => null,
		'data_riattivazione'      => null,
		'motivo_sospensione'      => null,
		'scadenza_impegnativa'    => null,
		'note'                    => null,
		'riserva1'                => null,
		'riserva2'                => null,
		'riserva3'                => null,
		'riserva4'                => null,
	]);

	// Dati anagrafici dall'anagrafe aggiornata (se il campo in anagrafe è vuoto resta quello copiato)
	$anag = righe(DB::PrepareSQL(
		"SELECT cognome_e_nome, data_di_nascita, sesso, indirizzo, localita,
		        nro_telefono, luogo_di_nascita_paziente
		   FROM anagrafe WHERE id_utente = :1", $id_utente))[0] ?? [];
	$da_anagrafe = [ // campo impegnative => [campo anagrafe, lunghezza max in impegnative]
		'cognome_e_nome'   => ['cognome_e_nome', 50],
		'data_di_nascita'  => ['data_di_nascita', null],
		'sesso'            => ['sesso', 4],
		'indirizzo'        => ['indirizzo', 100],
		'localita'         => ['localita', 50],
		'nro_telefono'     => ['nro_telefono', 50],
		'luogo_di_nascita' => ['luogo_di_nascita_paziente', 255],
	];
	foreach ($da_anagrafe as $campo_imp => [$campo_anag, $max]) {
		$v = $anag[$campo_anag] ?? null;
		if ($v === null || trim((string)$v) === '') continue;
		$nuova[$campo_imp] = $max ? mb_substr(trim((string)$v), 0, $max) : $v;
	}

	// Flag (indicazione utente 2026-10-02): ogni nuova impegnativa ha trattamento = 1 e trattamento1 = 1;
	// unica eccezione la valutazione, con trattamento = 1 e valutazione = 1. Tutti gli altri flag a 0.
	// Il seguito del ciclo (es. dimissione) è gestito da procedure del database.
	$nuova['attesa'] = 0;
	$nuova['trattamento'] = 1;
	$nuova['dimesso'] = 0;
	if ($tipo === 'valutazione') {
		$nuova['valutazione'] = '1';
		$nuova['trattamento1'] = '0';
	} else { // primo trattamento, ulteriori, restituzione
		$nuova['valutazione'] = '0';
		$nuova['trattamento1'] = '1';
	}

	$nuova = array_merge($nuova, $dati_specifici);

	if (!DB::Insert('impegnative', $nuova)) return null;
	$id_nuova = (int)DB::LastId();
	creaFoglioFirme($id_nuova);
	return $id_nuova;
}

/**
 * Foglio firme privato: per un'impegnativa privata (privato = '1') crea in scheda_firma_privato
 * una riga per ogni seduta (quantita), con progressivo 01..N. Stessa logica dell'evento PHPRunner
 * usato altrove, ma data_firma = NULL (il DB è in modalità STRICT: '' su un DATETIME darebbe errore).
 * Business-critical: sono le righe su cui il paziente firma le sedute.
 */
function creaFoglioFirme(int $id_imp): int {
	$i = righe(DB::PrepareSQL(
		"SELECT id_impegnativa, cognome_e_nome, anno, et__evolutiva_o_adulto, settore, sigla_cliente,
		        privato, data_imp, idprodotto, quantita
		   FROM impegnative WHERE id_impegnativa = :1", $id_imp))[0] ?? null;
	if (!$i || (string)$i['privato'] !== '1') return 0;
	$quantita = (int)$i['quantita'];
	if ($quantita <= 0) return 0;
	// niente doppioni se il foglio esiste già
	if (righe(DB::PrepareSQL("SELECT 1 FROM scheda_firma_privato WHERE id_impegnativa = :1 LIMIT 1", $id_imp))) return 0;

	$righe_sql = [];
	for ($n = 1; $n <= $quantita; $n++) {
		$righe_sql[] = '(' . implode(', ', [
			(int)$i['id_impegnativa'], sqlVal($i['cognome_e_nome']), sqlVal($i['anno']),
			sqlVal($i['et__evolutiva_o_adulto']), sqlVal($i['settore']), sqlVal($i['sigla_cliente']),
			sqlVal($i['privato']), sqlVal($i['data_imp']),
			'NULL', 'NULL',                          // data_firma, firma_paziente
			(int)$i['idprodotto'], $quantita,
			"''", "''",                              // terapista, concluso (come l'evento originale)
			$n,                                      // progressivo 1..N
		]) . ')';
	}
	DB::Exec("INSERT INTO scheda_firma_privato
	            (id_impegnativa, cognome_e_nome, anno, et__evolutiva_o_adulto, settore, sigla_cliente,
	             privato, data_imp, data_firma, firma_paziente, idprodotto, quantita,
	             terapista, concluso, progressivo)
	          VALUES " . implode(",\n", $righe_sql));
	return $quantita;
}

/** Terapisti NP attivi (tabella dipendenti), con mail dalla tabella utenti */
function terapistiNP(): array {
	return righe(DB::PrepareSQL(
		"SELECT d.cognome_e_nome, d.professione, MAX(u.mail) AS mail
		   FROM dipendenti d
		   LEFT JOIN utenti u ON u.NOME = d.cognome_e_nome AND u.mail LIKE '%@%'
		  WHERE d.attivo = 1 AND d.professione IN (':1')
		  GROUP BY d.cognome_e_nome, d.professione
		  ORDER BY d.cognome_e_nome", PROFESSIONI_NP));
}

/** Dipendente attivo per id_nominativo (con mail), null se non valido */
function dipendenteAttivo(int $id_nominativo): ?array {
	foreach (dipendentiAttivi() as $d) {
		if ((int)$d['id_nominativo'] === $id_nominativo) return $d;
	}
	return null;
}

const ETICHETTE_FASE = [
	'valutazione'  => 'Valutazione',
	'trattamento'  => 'Primo trattamento',
	'ulteriori'    => 'Ulteriore trattamento',
	'restituzione' => 'Colloquio di restituzione',
];

/**
 * Mail al terapista scelto con l'attività da svolgere per la nuova impegnativa.
 * Restituisce l'esito per il messaggio a video: ok | nomail (terapista senza mail) | err.
 * L'impegnativa resta creata anche se la mail non parte.
 */
function inviaAttivita(string $fase, int $id_imp, array $terapista, string $note): string {
	if (!$terapista['mail']) return 'nomail';
	$mail = componiMailAttivita($fase, $id_imp, $note);
	if (!$mail) return 'err';
	$ret = runner_mail(['to' => $terapista['mail']] + $mail);
	return !empty($ret['mailed']) ? 'ok' : 'err';
}

/** Oggetto e testo della mail di attività (null se l'impegnativa non esiste) */
function componiMailAttivita(string $fase, int $id_imp, string $note): ?array {
	$i = righe(DB::PrepareSQL(
		"SELECT i.cognome_e_nome, i.data_imp, i.quantita, p.siglaprodotto, p.descrizioneprodotto
		   FROM impegnative i LEFT JOIN prodotti p ON p.idprodotto = i.idprodotto
		  WHERE i.id_impegnativa = :1", $id_imp))[0] ?? null;
	if (!$i) return null;

	$attivita = ETICHETTE_FASE[$fase] ?? $fase;
	$righe_mail = [
		'Attività da svolgere: ' . $attivita,
		'',
		'Paziente:     ' . $i['cognome_e_nome'],
		'Impegnativa:  n° ' . $id_imp . ' del ' . dataIt($i['data_imp']),
		'Prodotto:     ' . $i['siglaprodotto'] . ' — ' . $i['descrizioneprodotto'],
		'Quantità:     ' . $i['quantita'],
		'Note:         ' . ($note !== '' ? $note : '—'),
		'',
		'Assegnata da ' . Security::getUserName() . ' il ' . date('d/m/Y H:i') . '.',
	];
	return [
		'subject' => 'Attività da svolgere: ' . $attivita . ' — ' . $i['cognome_e_nome'],
		'body'    => implode("\n", $righe_mail),
	];
}

/** Mail del terapista, ricavata lato server dal nome scelto */
function mailTerapista(string $nome): ?string {
	foreach (terapistiNP() as $t) {
		if ($t['cognome_e_nome'] === $nome) return $t['mail'] ?: null;
	}
	return null;
}

// Prodotti ammessi come tipo di valutazione nell'affidamento
const PRESTAZIONI_AFFIDO = ['logopedia', 'psicomotricita'];

/**
 * Tipi di valutazione per l'affidamento: prodotti privati (Tipologia PRIV), ambulatoriali,
 * di logopedia o psicomotricità, dei settori NP e PM. Si mostra solo la sigla.
 */
function prodottiPrivati(): array {
	return righe(DB::PrepareSQL(
		"SELECT idprodotto, settore, siglaprodotto, prezzo_unitario
		   FROM prodotti
		  WHERE Tipologia = 'PRIV' AND modalita = 'Ambulatoriale'
		    AND prestazione IN (':1') AND settore IN (':2')
		  ORDER BY settore, siglaprodotto", PRESTAZIONI_AFFIDO, SETTORI_AFFIDO));
}

/** Prodotto privato per ID; se indicato il settore, solo se vi appartiene */
function prodottoPrivato(int $idprodotto, ?string $settore = null): ?array {
	foreach (prodottiPrivati() as $p) {
		if ((int)$p['idprodotto'] === $idprodotto && ($settore === null || $p['settore'] === $settore)) return $p;
	}
	return null;
}

/**
 * Prodotti per primo trattamento e ulteriori: tutti i privati ambulatoriali NP e PM,
 * esclusi quelli del colloquio di restituzione (altrimenti verrebbero classificati come restituzione).
 */
function prodottiTrattamento(): array {
	return righe(DB::PrepareSQL(
		"SELECT idprodotto, settore, siglaprodotto, prezzo_unitario
		   FROM prodotti
		  WHERE Tipologia = 'PRIV' AND modalita = 'Ambulatoriale'
		    AND settore IN (':1') AND idprodotto NOT IN (:2)
		  ORDER BY settore, siglaprodotto", SETTORI_AFFIDO, PRODOTTI_RESTITUZIONE));
}

/**
 * Tendina dei prodotti con gruppi NP/PM, sigla e prezzo.
 * Di default i prodotti di affidamento/valutazione; $prodotti e $gruppi per altre liste.
 */
function selectProdotti(string $id, int $selezionato, string $onchange = '', ?array $prodotti = null, ?array $gruppi = null): string {
	$gruppi = $gruppi ?? ['NP' => 'NP — logopedia', 'PM' => 'PM — psicomotricità'];
	$prodotti = $prodotti ?? prodottiPrivati();
	$html = '<select id="' . h($id) . '" name="idprodotto" required' . ($onchange ? ' onchange="' . h($onchange) . '"' : '') . '>'
		. '<option value="">—</option>';
	foreach ($gruppi as $settore => $etichetta) {
		$html .= '<optgroup label="' . h($etichetta) . '">';
		foreach ($prodotti as $p) {
			if ($p['settore'] !== $settore) continue;
			$html .= '<option value="' . (int)$p['idprodotto'] . '" data-settore="' . h($p['settore']) . '"'
				. ($selezionato === (int)$p['idprodotto'] ? ' selected' : '') . '>'
				. h($p['siglaprodotto']) . ' — € ' . number_format((float)$p['prezzo_unitario'], 2, ',', '.') . '</option>';
		}
		$html .= '</optgroup>';
	}
	return $html . '</select>';
}

// Nuova anagrafica da affidamento: valori fissi (decisione utente 2026-10-05)
const PRIVATO_AFFIDO = '1';

/**
 * Crea la posizione in anagrafe con i dati dell'affidamento (distretto P, privato 1).
 * Se esiste già un paziente con lo stesso cognome_e_nome (campo UNIQUE) non crea nulla:
 * può essere un omonimo, quindi l'abbinamento resta manuale.
 * Restituisce ['creata' => id_utente|null, 'esistente' => id_utente|null].
 * Business-critical: va chiamata dentro la transazione dell'invio (annullata se la mail fallisce).
 */
function creaAnagraficaDaAffidamento(array $d): array {
	$nome = mb_strtoupper(trim(preg_replace('/\s+/', ' ', $d['paz_nome'])));
	$esistente = righe(DB::PrepareSQL("SELECT id_utente FROM anagrafe WHERE cognome_e_nome = ':1' LIMIT 1", $nome))[0]['id_utente'] ?? null;
	if ($esistente) return ['creata' => null, 'esistente' => (int)$esistente];

	$ok = DB::Insert('anagrafe', [
		'cognome_e_nome'         => mb_substr($nome, 0, 50),
		'privato'                => PRIVATO_AFFIDO,
		'data_di_nascita'        => $d['paz_nascita'] !== '' ? $d['paz_nascita'] : null,
		'sesso'                  => $d['sesso'],
		'settore'                => $d['settore'],
		'eta_evolutiva_o_adulta' => $d['eta'],
		'distretto'              => DISTRETTO_AFFIDO,
		'altri_recapiti'         => $d['paz_recapito'] !== '' ? mb_substr($d['paz_recapito'], 0, 255) : null,
		'anno'                   => (int)date('Y'),
	]);
	return ['creata' => $ok ? (int)DB::LastId() : null, 'esistente' => null];
}

/**
 * Invia alla segreteria la richiesta di affidamento a terapista.
 * Business-critical: l'anagrafica è già creata dalla pagina; la segreteria crea solo la nuova impegnativa.
 * Restituisce null se inviata, altrimenti il messaggio di errore.
 */
function inviaAffidamento(array $d, ?string $mail_terapista, array $anagrafica): ?string {
	$ret = runner_mail(componiMailAffidamento($d, $mail_terapista, $anagrafica));
	return !empty($ret['mailed']) ? null : ('Invio non riuscito: ' . ($ret['message'] ?? 'errore sconosciuto'));
}

/** Destinatari, oggetto e testo della mail di affidamento */
function componiMailAffidamento(array $d, ?string $mail_terapista, array $anagrafica): array {
	$destinatari = array_filter([EMAIL_SEGRETERIA, $mail_terapista]);

	if ($anagrafica['creata']) {
		$righe_anag = [
			'Anagrafica:               creata automaticamente (n° ' . $anagrafica['creata'] . ')',
			'',
			'Da fare in segreteria: creare la NUOVA IMPEGNATIVA.',
		];
	} else {
		$righe_anag = $anagrafica['esistente']
			? ['ATTENZIONE: in anagrafe esiste già un paziente con questo nome (n° ' . $anagrafica['esistente'] . '),',
			   'quindi l\'anagrafica NON è stata creata. Verificare che sia lo stesso paziente,',
			   'poi creare la NUOVA IMPEGNATIVA.']
			: ['ATTENZIONE: creazione automatica dell\'anagrafica non riuscita.',
			   'Da fare in segreteria: creare la NUOVA ANAGRAFICA e la NUOVA IMPEGNATIVA.'];
	}

	$righe_mail = [
		'Richiesta di presa in carico — primo colloquio affidato a terapista',
		'',
		'Paziente:                 ' . $d['paz_nome'],
		'Data di nascita:          ' . ($d['paz_nascita'] !== '' ? dataIt($d['paz_nascita']) : '—'),
		'Sesso:                    ' . $d['sesso'],
		'Età evolutiva o adulta:   ' . ETA_AFFIDO[$d['eta']],
		'Settore:                  ' . $d['settore'],
		'Distretto:                ' . DISTRETTO_AFFIDO,
		'Privato:                  ' . PRIVATO_AFFIDO,
		'Recapito:                 ' . ($d['paz_recapito'] !== '' ? $d['paz_recapito'] : '—'),
		'',
		'Tipo di valutazione:      ' . $d['tipo_val'],
		'Quantità impegnativa:     1',
		'Terapista:                ' . $d['terapista'] . ($mail_terapista ? '' : ' (mail non presente in utenti)'),
		'Note:                     ' . ($d['note'] !== '' ? $d['note'] : '—'),
		'',
	];
	$righe_mail = array_merge($righe_mail, $righe_anag, [
		'',
		'Richiesta inserita da ' . Security::getUserName() . ' il ' . date('d/m/Y H:i') . '.',
	]);

	return [
		'to'      => implode(', ', $destinatari),
		'cc'      => EMAIL_CC_NP,
		'subject' => 'Presa in carico ' . $d['settore'] . ' — affidamento valutazione: ' . $d['paz_nome'],
		'body'    => implode("\n", $righe_mail),
	];
}

/**
 * Registra l'affidamento (dopo l'invio della mail). Restituisce l'ID o 0.
 * $id_utente: anagrafica creata automaticamente → affidamento già abbinato.
 */
function registraAffidamento(array $d, ?string $mail_terapista, ?int $id_utente = null): int {
	DB::Exec(
		"INSERT INTO affidamenti_np
		   (data_richiesta, utente_richiesta, cognome_e_nome, data_di_nascita, sesso,
		    eta_evolutiva_o_adulta, settore, distretto, recapito, idprodotto, tipo_valutazione,
		    terapista, mail_terapista, note, mail_inviata_il, id_utente, data_abbinamento)
		 VALUES (NOW(), " . implode(', ', [
			sqlVal(Security::getUserName()), sqlVal($d['paz_nome']), sqlVal($d['paz_nascita']),
			sqlVal($d['sesso']), sqlVal($d['eta']), sqlVal($d['settore']), sqlVal(DISTRETTO_AFFIDO),
			sqlVal($d['paz_recapito']), sqlVal($d['idprodotto']), sqlVal($d['tipo_val']), sqlVal($d['terapista']),
			sqlVal($mail_terapista), sqlVal($d['note']),
		]) . ", NOW(), " . ($id_utente ? (int)$id_utente . ', NOW()' : 'NULL, NULL') . ")");
	return (int)DB::LastId();
}

// ---- Parametri ----
$sez = array_key_exists($_GET['sez'] ?? '', SEZIONI) ? $_GET['sez'] : 'colloquio';
$modo = ($_GET['modo'] ?? '') === 'affida' ? 'affida' : 'scheda';

// Pratica selezionata: pc<ID> (primo colloquio) o af<ID> (affidamento)
$sel = (string)($_REQUEST['sel'] ?? '');
$id_pc = $id_af = 0;
if (preg_match('/^(pc|af)(\d+)$/', $sel, $m)) {
	if ($m[1] === 'pc') $id_pc = (int)$m[2]; else $id_af = (int)$m[2];
} else {
	$sel = '';
}

if (empty($_SESSION['pnp_token'])) {
	$_SESSION['pnp_token'] = bin2hex(random_bytes(16));
}

// ---- Azioni (POST → redirect) ----
$errore_affida = null;
$errore_val = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && hash_equals($_SESSION['pnp_token'], $_POST['token'] ?? '')) {
	$azione = $_POST['azione'] ?? '';
	$col = $id_pc > 0 ? caricaColloquio($id_pc) : null;
	$aff = $id_af > 0 ? caricaAffidamento($id_af) : null;
	$id_utente = (int)($col['id_utente'] ?? $aff['id_utente'] ?? 0);
	$dal = inizioPratica($col, $aff);
	$fasi_p = fasiPratica($id_utente > 0 && $dal ? impegnativePratica($id_utente, $dal) : []);

	// Fasi 2–4: terapista scelto (riceve la mail) e note
	$terapista = dipendenteAttivo((int)($_POST['id_terapista'] ?? 0));
	$note_terapista = trim((string)($_POST['note_terapista'] ?? ''));
	$esitoCreazione = function ($nuovo_id, string $fase) use ($terapista, $note_terapista): string {
		if (!$nuovo_id) return 'noimp';
		return "ok&nuovo=$nuovo_id&mail=" . inviaAttivita($fase, (int)$nuovo_id, $terapista, $note_terapista);
	};

	if ($azione === 'allinea' && $col) {
		// Correzione del nominativo nel primo colloquio
		$nuovo_nome = trim(preg_replace('/\s+/', ' ', $_POST['nuovo_nome'] ?? ''));
		$esito = 'err';
		if ($nuovo_nome !== '' && mb_strlen($nuovo_nome) <= 50) {
			DB::Exec(DB::PrepareSQL("UPDATE primocolloqio SET Paziente = ':1' WHERE ID = :2", $nuovo_nome, $id_pc));
			// Il legame col paziente passa da anagrafe: avvisa se il nuovo nome non vi si trova
			$abbinato = caricaColloquio($id_pc)['id_utente'] ?? null;
			$esito = $abbinato ? 'allineato' : 'allineato_nonabb';
		}
		header("Location: protocollo_np.php?sez=colloquio&sel=$sel&esito=$esito");
		exit;
	}

	if ($azione === 'abbina_af' && $aff) {
		// Abbinamento dell'affidamento al paziente creato dalla segreteria
		$scelto = (int)($_POST['id_utente_scelto'] ?? 0);
		$esiste = $scelto > 0 && righe(DB::PrepareSQL("SELECT 1 FROM anagrafe WHERE id_utente = :1", $scelto));
		if ($esiste) {
			DB::Exec(DB::PrepareSQL(
				"UPDATE affidamenti_np SET id_utente = :1, data_abbinamento = NOW()
				  WHERE id_affidamento = :2 AND id_utente IS NULL", $scelto, $id_af));
		}
		header("Location: protocollo_np.php?sez=colloquio&sel=$sel&esito=" . ($esiste ? 'abbinato' : 'err'));
		exit;
	}

	if ($azione === 'scollega_af' && $aff) {
		DB::Exec(DB::PrepareSQL(
			"UPDATE affidamenti_np SET id_utente = NULL, data_abbinamento = NULL
			  WHERE id_affidamento = :1", $id_af));
		header("Location: protocollo_np.php?sez=colloquio&sel=$sel&esito=scollegato");
		exit;
	}

	if ($azione === 'affida') {
		$dati = [];
		foreach (['paz_nome', 'paz_nascita', 'paz_recapito', 'sesso', 'eta', 'settore', 'terapista', 'note'] as $k) {
			$dati[$k] = trim((string)($_POST[$k] ?? ''));
		}
		if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dati['paz_nascita'])) $dati['paz_nascita'] = '';
		// Tipo di valutazione: prodotto privato coerente col settore scelto
		$prod = prodottoPrivato((int)($_POST['idprodotto'] ?? 0), $dati['settore']);
		$dati['idprodotto'] = $prod ? (int)$prod['idprodotto'] : null;
		$dati['tipo_val'] = $prod ? $prod['siglaprodotto'] : '';
		if ($dati['paz_nome'] === '' || !$prod || $dati['terapista'] === ''
			|| !in_array($dati['sesso'], SESSI_AFFIDO, true)
			|| !array_key_exists($dati['eta'], ETA_AFFIDO)
			|| !in_array($dati['settore'], SETTORI_AFFIDO, true)) {
			$errore_affida = 'Compila tutti i campi obbligatori (*).';
		} else {
			$mail_t = mailTerapista($dati['terapista']);
			// Anagrafica creata in transazione: se la mail non parte, la creazione si annulla
			DB::Exec("START TRANSACTION");
			$anagrafica = creaAnagraficaDaAffidamento($dati);
			$errore_affida = inviaAffidamento($dati, $mail_t, $anagrafica);
			if ($errore_affida === null) {
				$nuovo_af = registraAffidamento($dati, $mail_t, $anagrafica['creata']);
				DB::Exec("COMMIT");
				$anag = $anagrafica['creata'] ? 'creata' : ($anagrafica['esistente'] ? 'esistente' : 'errore');
				$dest = $nuovo_af ? "sel=af$nuovo_af&esito=inviata&anag=$anag" : "modo=affida&esito=inviata_nonreg&anag=$anag";
				header("Location: protocollo_np.php?sez=colloquio&$dest");
				exit;
			}
			DB::Exec("ROLLBACK");
		}
		// In caso di errore si ricarica il form con i dati inseriti
		$sez = 'colloquio';
		$modo = 'affida';
	}

	// Sequenza: valutazione solo dopo la prima impegnativa e una sola volta
	if ($azione === 'valutazione' && (!$fasi_p['prima'] || $fasi_p['valutazione'])) {
		header("Location: protocollo_np.php?sez=valutazione&sel=$sel&esito=err");
		exit;
	}

	if ($azione === 'valutazione' && $id_utente > 0) {
		// Dati specifici della valutazione, impostati prima di generare la copia
		$prod = prodottoPrivato((int)($_POST['idprodotto'] ?? 0));
		$quantita = (int)($_POST['quantita'] ?? 0);
		if (!$prod || $quantita < 1 || $quantita > 5 || !$terapista) {
			$errore_val = 'Compila tipo di valutazione, quantità (da 1 a 5) e terapista.';
			$sez = 'valutazione';
		} else {
			$oggi = date('Y-m-d');
			$nuovo_id = creaCopiaImpegnativa($fasi_p['prima'], 'valutazione', [
				'data_imp'   => $oggi,       // data impegnativa = data della copia
				'protocollo' => $oggi,       // protocollo = data della copia
				'idprodotto' => (int)$prod['idprodotto'],
				'quantita'   => $quantita,
				'terapista'  => (string)$terapista['id_nominativo'], // id_nominativo da dipendenti
			]);
			$msg = $esitoCreazione($nuovo_id, 'valutazione');
			header("Location: protocollo_np.php?sez=valutazione&sel=$sel&esito=$msg");
			exit;
		}
	}

	if ($azione === 'restituzione' && $id_utente > 0) {
		// Colloquio di restituzione: nel primo trattamento finché non ci sono ulteriori,
		// negli ulteriori dopo il primo ulteriore (così la collocazione cronologica è coerente)
		$fase = ($_POST['fase'] ?? '') === 'ulteriori' ? 'ulteriori' : 'trattamento';
		$consentito = $fase === 'trattamento'
			? ($fasi_p['trattamento'] && !$fasi_p['ulteriori'])
			: (bool)$fasi_p['ulteriori'];
		$idp = (int)($_POST['idprodotto'] ?? 0);
		$msg = 'err';
		if ($consentito && in_array($idp, PRODOTTI_RESTITUZIONE, true) && $terapista) {
			$oggi = date('Y-m-d');
			$nuovo_id = creaCopiaImpegnativa($fasi_p['prima'], 'restituzione', [
				'data_imp'   => $oggi,
				'protocollo' => $oggi,
				'idprodotto' => $idp,
				'quantita'   => 1,
				'terapista'  => (string)$terapista['id_nominativo'],
			]);
			$msg = $esitoCreazione($nuovo_id, 'restituzione');
		}
		header("Location: protocollo_np.php?sez=$fase&sel=$sel&esito=$msg");
		exit;
	}

	if (in_array($azione, ['trattamento', 'ulteriori'], true) && $id_utente > 0) {
		// Sequenza: primo trattamento dopo la valutazione e una sola volta; ulteriori dopo il primo
		$consentito = $azione === 'trattamento'
			? ($fasi_p['valutazione'] && !$fasi_p['trattamento'])
			: (bool)$fasi_p['trattamento'];
		// Prodotto scelto tra i privati ambulatoriali NP/PM (esclusi quelli di restituzione)
		$idp = (int)($_POST['idprodotto'] ?? 0);
		$prod_ok = in_array($idp, array_map('intval', array_column(prodottiTrattamento(), 'idprodotto')), true);
		$quantita = (int)($_POST['quantita'] ?? 0);
		$qta_ok = $quantita >= 1 && $quantita <= QUANTITA_MAX_TRATTAMENTO;
		$msg = 'err';
		if ($consentito && $prod_ok && $qta_ok && $terapista) {
			$oggi = date('Y-m-d');
			$nuovo_id = creaCopiaImpegnativa($fasi_p['prima'], $azione, [
				'data_imp'   => $oggi,
				'protocollo' => $oggi,
				'idprodotto' => $idp,
				'quantita'   => $quantita,   // inserita dall'operatore → righe del foglio firme
				'terapista'  => (string)$terapista['id_nominativo'],
			]);
			$msg = $esitoCreazione($nuovo_id, $azione);
		}
		header("Location: protocollo_np.php?sez=$azione&sel=$sel&esito=$msg");
		exit;
	}
}

// ---- Dati per il menu ----
// Abbinati: presenti sia in anagrafe sia in primo colloquio (un'unica voce per paziente)
$pazienti = righe(
	"SELECT MAX(pc.ID) AS id_pc, a.cognome_e_nome, MAX(pc.`Data Primo Colloquio`) AS data_pc
	   FROM primocolloqio pc
	   JOIN anagrafe a ON a.cognome_e_nome = pc.Paziente
	  WHERE pc.`Data Primo Colloquio` >= '" . DATA_INIZIO_COLLOQUI . "'
	  GROUP BY a.id_utente, a.cognome_e_nome
	  ORDER BY data_pc DESC, id_pc DESC");

// Da abbinare: colloqui senza corrispondenza in anagrafe
$da_abbinare = righe(
	"SELECT pc.ID AS id_pc, pc.Paziente, pc.`Data Primo Colloquio` AS data_pc
	   FROM primocolloqio pc
	  WHERE pc.`Data Primo Colloquio` >= '" . DATA_INIZIO_COLLOQUI . "'
	    AND NOT EXISTS (SELECT 1 FROM anagrafe a WHERE a.cognome_e_nome = pc.Paziente)
	  ORDER BY data_pc DESC, pc.ID DESC");

// Affidamenti a terapista, con indicatore di impegnativa della pratica (dalla data richiesta)
$affidamenti = righe(
	"SELECT af.id_affidamento, af.cognome_e_nome, af.data_richiesta, af.id_utente,
	        EXISTS (SELECT 1 FROM impegnative i WHERE i.id_utente = af.id_utente
	                  AND DATE(i.data_imp) >= DATE(af.data_richiesta)) AS ha_imp
	   FROM affidamenti_np af
	  ORDER BY af.data_richiesta DESC, af.id_affidamento DESC");

// ---- Pratica selezionata ----
$colloquio = $id_pc > 0 ? caricaColloquio($id_pc) : null;
$affido = $id_af > 0 ? caricaAffidamento($id_af) : null;
$id_utente = (int)($colloquio['id_utente'] ?? $affido['id_utente'] ?? 0);

// Fasi della pratica per ordine cronologico dalla data d'inizio
$inizio = inizioPratica($colloquio, $affido);
$fasi = fasiPratica($id_utente > 0 && $inizio ? impegnativePratica($id_utente, $inizio) : []);
$prima = $fasi['prima'];
$valutazione_imp = $fasi['valutazione'];
$primo_tratt = $fasi['trattamento'];
$ulteriori = $fasi['ulteriori'];
$rest_tratt = $fasi['restituzioni_trattamento'];
$rest_ult = $fasi['restituzioni_ulteriori'];

// Terapista proposto nei moduli: quello dell'ultimo passaggio della pratica (se è un id_nominativo)
$ter_default = 0;
$passaggi = array_merge(array_filter([$valutazione_imp, $primo_tratt]), $rest_tratt, $ulteriori, $rest_ult);
usort($passaggi, function ($a, $b) { return (int)$a['id_impegnativa'] <=> (int)$b['id_impegnativa']; });
foreach ($passaggi as $p) {
	if (preg_match('/^\d+$/', (string)$p['terapista'])) $ter_default = (int)$p['terapista'];
}

$allineamento = $colloquio ? statoAllineamento($colloquio['Paziente'], $prima['cognome_e_nome'] ?? null) : null;
$stato_af = $affido ? statoAffidamento($affido['id_utente'], (bool)$prima) : null;
$candidati = [];
if ($colloquio && !$id_utente) $candidati = candidatiAbbinamento($colloquio['Paziente'], $colloquio['nascita']);
if ($affido && !$id_utente) $candidati = candidatiAbbinamento($affido['cognome_e_nome'], $affido['data_di_nascita']);

function tabellaImp(array $lista, ?int $evidenzia = null): string {
	if (!$lista) return '<p class="vuoto">Nessuna impegnativa.</p>';
	$html = '<table><thead><tr><th>N°</th><th>Data</th><th>Prodotto</th><th>Qtà</th><th>Terapista</th><th>Stato</th></tr></thead><tbody>';
	foreach ($lista as $i) {
		$stato = $i['dimesso'] ? 'Dimesso' : ($i['trattamento'] ? 'In trattamento' : ($i['attesa'] ? 'In attesa' : '—'));
		$cls = $evidenzia === (int)$i['id_impegnativa'] ? ' class="nuova"' : '';
		$html .= "<tr$cls><td>" . h($i['id_impegnativa']) . '</td><td>' . dataIt($i['data_imp'])
			. '</td><td>' . h($i['siglaprodotto'] ?? $i['idprodotto']) . '</td><td>' . h($i['quantita'])
			. '</td><td>' . h($i['nome_terapista']) . "</td><td>$stato</td></tr>";
	}
	return $html . '</tbody></table>';
}

function campiNascosti(string $azione, string $sel): string {
	return '<input type="hidden" name="token" value="' . h($_SESSION['pnp_token']) . '">'
		. '<input type="hidden" name="sel" value="' . h($sel) . '">'
		. '<input type="hidden" name="azione" value="' . h($azione) . '">';
}

function bottone(string $azione, string $label, string $sel, bool $abilitato = true, string $classe = ''): string {
	$dis = $abilitato ? '' : ' disabled';
	$cls = $classe ? " class=\"$classe\"" : '';
	return '<form method="post" onsubmit="return confirm(\'Confermi: ' . h($label) . '?\')">'
		. campiNascosti($azione, $sel)
		. "<button type=\"submit\"$cls$dis>" . h($label) . '</button></form>';
}

/** Badge di corrispondenza per un candidato all'abbinamento */
function badgeCandidato(array $c): string {
	$b = $c['stesse_parole'] ? '<span class="badge ok">Stesse parole</span>' : '<span class="badge noimp">Cognome simile</span>';
	if ($c['stessa_nascita']) $b .= ' <span class="badge ok">Stessa nascita</span>';
	return $b;
}

$nuovo = (int)($_GET['nuovo'] ?? 0);
$esito = $_GET['esito'] ?? '';
$post = function ($k) { return h($_POST[$k] ?? ''); };
$qs_sel = $sel !== '' ? "&sel=$sel" : '';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Protocollo Presa in Carico NP</title>
<style>
	:root { --blu:#1f4e79; --chiaro:#eef3f8; --bordo:#d5dde6; --testo:#1d2733; --muto:#6b7785;
	        --verde:#1e6b2e; --verde-bg:#e7f6ea; --giallo:#7a5a00; --giallo-bg:#fff5d6; --rosso:#8a1f1f; --rosso-bg:#fbeaea; }
	* { box-sizing:border-box; }
	body { margin:0; font:15px/1.45 "Segoe UI", system-ui, sans-serif; color:var(--testo); background:#f7f9fb; }
	header { background:var(--blu); color:#fff; padding:14px 24px; display:flex; flex-wrap:wrap; gap:12px; align-items:center; justify-content:space-between; }
	header h1 { margin:0; font-size:18px; font-weight:600; }
	header { position:relative; }
	.scelta > summary { list-style:none; cursor:pointer; background:#fff; color:var(--testo); padding:7px 14px; border-radius:6px; font-size:14px; min-width:260px; display:flex; justify-content:space-between; gap:10px; }
	.scelta > summary::-webkit-details-marker, .cat > summary::-webkit-details-marker { display:none; }
	.scelta[open] .freccia { transform:rotate(180deg); }
	.pannello { position:absolute; right:24px; top:calc(100% - 6px); z-index:10; width:440px; max-width:calc(100vw - 32px); background:#fff; color:var(--testo); border:1px solid var(--bordo); border-radius:8px; box-shadow:0 8px 24px rgba(0,0,0,.15); padding:8px; }
	.cat { border-radius:6px; }
	.cat > summary { list-style:none; cursor:pointer; padding:10px 12px; font-weight:600; display:flex; align-items:center; border-radius:6px; }
	.cat > summary:hover, .cat[open] > summary { background:var(--chiaro); }
	.cat > summary::before { content:'▸'; margin-right:8px; color:var(--blu); }
	.cat[open] > summary::before { content:'▾'; }
	.conta { margin-left:auto; background:var(--blu); color:#fff; border-radius:10px; padding:1px 9px; font-size:12px; }
	.filtro { width:100%; margin:8px 0 4px; padding:7px 10px; border:1px solid var(--bordo); border-radius:6px; font:inherit; }
	.elenco { list-style:none; margin:0; padding:0; max-height:50vh; overflow:auto; }
	.elenco li a { display:block; padding:6px 10px; color:var(--testo); text-decoration:none; border-radius:4px; font-size:14px; }
	.elenco li a:hover { background:var(--chiaro); }
	.elenco li.corrente a { background:var(--blu); color:#fff; }
	.elenco .data { color:var(--muto); font-size:12px; font-variant-numeric:tabular-nums; }
	.elenco li.corrente .data { color:#dce6f0; }
	.elenco .badge { font-size:11px; padding:1px 7px; margin-left:4px; }
	.elenco .sottotitolo { padding:10px 10px 4px; font-size:12px; font-weight:600; color:var(--rosso); text-transform:uppercase; letter-spacing:.03em; }
	.elenco .vuoto { padding:6px 10px; font-size:14px; }
	.wrap { display:flex; min-height:calc(100vh - 60px); }
	nav { width:250px; background:#fff; border-right:1px solid var(--bordo); padding:16px 0; flex-shrink:0; }
	nav a { display:flex; gap:10px; align-items:center; padding:11px 22px; color:var(--testo); text-decoration:none; border-left:4px solid transparent; }
	nav a .n { width:22px; height:22px; border-radius:50%; background:var(--chiaro); color:var(--blu); font-size:12px; display:grid; place-items:center; font-weight:600; flex-shrink:0; }
	nav a:hover { background:var(--chiaro); }
	nav a.attivo { border-left-color:var(--blu); background:var(--chiaro); font-weight:600; }
	nav a.attivo .n { background:var(--blu); color:#fff; }
	main { flex:1; padding:24px 32px; max-width:1000px; }
	h2 { margin:0 0 16px; color:var(--blu); font-size:20px; }
	h3 { margin:0 0 12px; font-size:15px; }
	.card { background:#fff; border:1px solid var(--bordo); border-radius:8px; padding:18px 20px; margin-bottom:18px; }
	.campi { display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:14px; }
	.campo label { display:block; font-size:12px; text-transform:uppercase; letter-spacing:.04em; color:var(--muto); }
	.campo div { font-size:16px; font-weight:500; margin-top:2px; }
	.schede { display:flex; gap:4px; margin-bottom:14px; border-bottom:1px solid var(--bordo); }
	.schede a { padding:8px 16px; text-decoration:none; color:var(--muto); border-bottom:3px solid transparent; margin-bottom:-1px; }
	.schede a.attivo { color:var(--blu); border-bottom-color:var(--blu); font-weight:600; }
	.badge { display:inline-block; padding:3px 10px; border-radius:12px; font-size:13px; font-weight:600; }
	.badge.ok, .badge.carico { background:var(--verde-bg); color:var(--verde); }
	.badge.case, .badge.attesa_imp { background:var(--giallo-bg); color:var(--giallo); }
	.badge.diff, .badge.nonabb, .badge.attesa_anag { background:var(--rosso-bg); color:var(--rosso); }
	.badge.noimp, .badge.origine { background:var(--chiaro); color:var(--muto); }
	.confronto { display:grid; grid-template-columns:1fr 1fr; gap:14px; margin:12px 0 16px; }
	.confronto .campo div { font-family:Consolas, monospace; font-size:15px; }
	.modulo { display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:14px; }
	.modulo .largo { grid-column:1 / -1; }
	.modulo label, .riga-edit label { display:block; font-size:13px; font-weight:600; margin-bottom:4px; }
	input[type=text], input[type=date], select, textarea { width:100%; padding:8px 10px; border:1px solid var(--bordo); border-radius:6px; font:inherit; background:#fff; }
	input[readonly] { background:var(--chiaro); }
	select.elenco-terapisti { margin-top:6px; height:auto; }
	textarea { min-height:70px; resize:vertical; }
	.riga-edit { display:flex; flex-wrap:wrap; gap:8px; align-items:flex-end; }
	.riga-edit > div { flex:1 1 280px; }
	table { width:100%; border-collapse:collapse; font-size:14px; }
	th, td { text-align:left; padding:7px 10px; border-bottom:1px solid var(--bordo); vertical-align:middle; }
	th { background:var(--chiaro); font-weight:600; }
	td form { margin:0; }
	tr.nuova td { background:var(--verde-bg); }
	button { background:var(--blu); color:#fff; border:0; border-radius:6px; padding:9px 16px; font-size:14px; cursor:pointer; }
	button.sec { background:#fff; color:var(--blu); border:1px solid var(--blu); }
	button.piccolo { padding:4px 10px; font-size:13px; }
	button:disabled { background:#aab4bf; border-color:#aab4bf; color:#fff; cursor:not-allowed; }
	form { margin:0 0 14px; }
	.msg { padding:10px 14px; border-radius:6px; margin-bottom:16px; }
	.msg.ok { background:var(--verde-bg); color:var(--verde); } .msg.err { background:var(--rosso-bg); color:var(--rosso); }
	.vuoto, .nota { color:var(--muto); }
	@media (max-width:700px) { .wrap { flex-direction:column; } nav { width:auto; display:flex; overflow-x:auto; padding:0; border-right:0; border-bottom:1px solid var(--bordo); } nav a { border-left:0; border-bottom:3px solid transparent; white-space:nowrap; padding:10px 14px; } nav a.attivo { border-bottom-color:var(--blu); } main { padding:16px; } .confronto { grid-template-columns:1fr; } }
</style>
</head>
<body>
<header>
	<h1>Protocollo Presa in Carico NP</h1>
	<?php
	// Scelta paziente in due passi: categoria → elenco filtrabile
	$nome_sel = $colloquio['Paziente'] ?? $affido['cognome_e_nome'] ?? null;
	$cat_aperta = $id_af ? 'af' : 'pc';
	$voce = function (string $v, $data, $nome, string $extra = '') use ($sez, $sel) {
		$cls = $v === $sel ? ' class="corrente"' : '';
		return "<li$cls><a href=\"?sez=$sez&sel=$v\"><span class=\"data\">" . dataIt($data) . '</span> '
			. h($nome) . $extra . '</a></li>';
	};
	?>
	<details class="scelta" data-sel="<?= $nome_sel ? 1 : 0 ?>"<?= $nome_sel ? '' : ' open' ?>>
		<summary><?= $nome_sel ? h($nome_sel) : 'Scegli paziente' ?> <span class="freccia">▾</span></summary>
		<div class="pannello">
			<details class="cat" name="cat"<?= $cat_aperta === 'pc' && $nome_sel ? ' open' : '' ?>>
				<summary>Primi colloqui <span class="conta"><?= count($pazienti) + count($da_abbinare) ?></span></summary>
				<input type="search" class="filtro" placeholder="Cerca nome…" aria-label="Cerca tra i primi colloqui">
				<ul class="elenco">
					<?php foreach ($pazienti as $p) echo $voce('pc' . (int)$p['id_pc'], $p['data_pc'], $p['cognome_e_nome']); ?>
					<?php if ($da_abbinare): ?>
						<li class="sottotitolo">⚠ Da abbinare (<?= count($da_abbinare) ?>)</li>
						<?php foreach ($da_abbinare as $p) echo $voce('pc' . (int)$p['id_pc'], $p['data_pc'], $p['Paziente']); ?>
					<?php endif; ?>
					<?php if (!$pazienti && !$da_abbinare): ?><li class="vuoto">Nessun primo colloquio.</li><?php endif; ?>
				</ul>
			</details>
			<details class="cat" name="cat"<?= $cat_aperta === 'af' && $nome_sel ? ' open' : '' ?>>
				<summary>Affidamenti a terapista <span class="conta"><?= count($affidamenti) ?></span></summary>
				<input type="search" class="filtro" placeholder="Cerca nome…" aria-label="Cerca tra gli affidamenti">
				<ul class="elenco">
					<?php foreach ($affidamenti as $a) {
						$st = statoAffidamento($a['id_utente'], $a['ha_imp']);
						echo $voce('af' . (int)$a['id_affidamento'], $a['data_richiesta'], $a['cognome_e_nome'],
							' <span class="badge ' . $st[0] . '">' . h($st[1]) . '</span>');
					} ?>
					<?php if (!$affidamenti): ?><li class="vuoto">Nessun affidamento.</li><?php endif; ?>
				</ul>
			</details>
		</div>
	</details>
</header>
<div class="wrap">
	<nav>
		<?php $n = 0; foreach (SEZIONI as $k => $label): $n++; ?>
			<a href="?sez=<?= $k ?><?= $qs_sel ?>" class="<?= $k === $sez ? 'attivo' : '' ?>"><span class="n"><?= $n ?></span><?= h($label) ?></a>
		<?php endforeach; ?>
	</nav>
	<main>
		<h2><?= h(SEZIONI[$sez]) ?></h2>

		<?php if ($esito === 'ok'): $esito_mail = $_GET['mail'] ?? ''; ?>
			<div class="msg ok">Impegnativa n° <?= $nuovo ?> creata<?= $esito_mail === 'ok' ? ' e mail inviata al terapista' : '' ?>.</div>
			<?php if ($esito_mail === 'nomail'): ?><div class="msg err">Il terapista scelto non ha una mail in utenti: la mail non è stata inviata, avvisalo direttamente.</div>
			<?php elseif ($esito_mail === 'err'): ?><div class="msg err">Invio della mail al terapista non riuscito: avvisalo direttamente.</div><?php endif; ?>
		<?php elseif ($esito === 'allineato'): ?><div class="msg ok">Nominativo del primo colloquio aggiornato.</div>
		<?php elseif ($esito === 'allineato_nonabb'): ?><div class="msg err">Nominativo aggiornato, ma non corrisponde a nessun paziente in anagrafe: il colloquio resta tra quelli da abbinare.</div>
		<?php elseif ($esito === 'inviata'): $anag = $_GET['anag'] ?? ''; ?>
			<div class="msg ok">Richiesta inviata alla segreteria e affidamento registrato<?= $anag === 'creata' ? '; nuova anagrafica creata e abbinata' : '' ?>.</div>
			<?php if ($anag === 'esistente'): ?><div class="msg err">In anagrafe esiste già un paziente con questo nome: anagrafica non creata. Verifica se è lo stesso paziente e abbinalo qui sotto.</div>
			<?php elseif ($anag === 'errore'): ?><div class="msg err">Creazione automatica dell'anagrafica non riuscita: la mail chiede alla segreteria di crearla.</div><?php endif; ?>
		<?php elseif ($esito === 'inviata_nonreg'): ?><div class="msg err">Mail inviata, ma la registrazione dell'affidamento non è riuscita: avvisa l'amministratore.</div>
		<?php elseif ($esito === 'abbinato'): ?><div class="msg ok">Affidamento abbinato al paziente in anagrafe.</div>
		<?php elseif ($esito === 'scollegato'): ?><div class="msg ok">Abbinamento annullato.</div>
		<?php elseif ($esito === 'noimp'): ?><div class="msg err">Nessuna impegnativa di partenza per questo paziente.</div>
		<?php elseif ($esito === 'err'): ?><div class="msg err">Operazione non eseguita.</div><?php endif; ?>

		<?php if ($sez === 'colloquio'): ?>
			<div class="schede">
				<a href="?sez=colloquio<?= $qs_sel ?>" class="<?= $modo === 'scheda' ? 'attivo' : '' ?>">Scheda pratica</a>
				<a href="?sez=colloquio&modo=affida<?= $qs_sel ?>" class="<?= $modo === 'affida' ? 'attivo' : '' ?>">Nuovo affidamento a terapista</a>
			</div>

			<?php if ($modo === 'scheda'): ?>
				<?php if ($colloquio): ?>
					<div class="card">
						<h3><span class="badge origine">Primo colloquio</span></h3>
						<div class="campi">
							<div class="campo"><label>Paziente</label><div><?= h($colloquio['Paziente']) ?></div></div>
							<div class="campo"><label>Operatore primo colloquio</label><div><?= h($colloquio['Operatore']) ?: '—' ?></div></div>
							<div class="campo"><label>Data colloquio</label><div><?= dataIt($colloquio['data_pc']) ?></div></div>
							<div class="campo"><label>Prodotto erogato</label><div><?= $prima ? h($prima['siglaprodotto']) . ' <small class="nota">' . h($prima['descrizioneprodotto']) . '</small>' : '—' ?></div></div>
						</div>
					</div>

					<div class="card">
						<h3>Controllo nominativo
							<?php if (!$id_utente): ?><span class="badge nonabb">Non abbinato ad anagrafe</span>
							<?php else: ?><span class="badge <?= $allineamento[0] ?>"><?= h($allineamento[1]) ?></span><?php endif; ?>
						</h3>
						<div class="confronto">
							<div class="campo"><label>Primo colloquio — Paziente</label><div><?= h($colloquio['Paziente']) ?></div></div>
							<div class="campo"><label>Prima impegnativa — cognome_e_nome</label><div><?= $prima ? h($prima['cognome_e_nome']) . ' <small class="nota">(n° ' . (int)$prima['id_impegnativa'] . ')</small>' : '—' ?></div></div>
						</div>

						<?php if ($candidati): ?>
							<p class="nota">Possibili corrispondenze in anagrafe (anche con cognome e nome invertiti): scegline una per compilare il campo.</p>
							<table>
								<thead><tr><th>Anagrafe</th><th>Corrispondenza</th><th>Nascita</th><th>Prima impegnativa</th><th></th></tr></thead>
								<tbody>
								<?php foreach ($candidati as $c): ?>
									<tr>
										<td><?= h($c['cognome_e_nome']) ?></td>
										<td><?= badgeCandidato($c) ?></td>
										<td><?= dataIt($c['data_di_nascita']) ?></td>
										<td><?= h($c['nome_imp']) ?: '—' ?></td>
										<td><button type="button" class="sec piccolo" onclick="usaNome(<?= h(json_encode($c['cognome_e_nome'])) ?>)">Usa</button></td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
							<br>
						<?php endif; ?>

						<?php if ($allineamento[0] !== 'ok' || !$id_utente): ?>
						<form method="post" onsubmit="return confirm('Aggiornare il nominativo nel primo colloquio?')">
							<?= campiNascosti('allinea', $sel) ?>
							<div class="riga-edit">
								<div>
									<label for="nuovo_nome">Paziente nel primo colloquio</label>
									<input type="text" id="nuovo_nome" name="nuovo_nome" maxlength="50" required value="<?= h($colloquio['Paziente']) ?>">
								</div>
								<?php if ($prima): ?>
									<button type="button" class="sec" onclick="usaNome(<?= h(json_encode($prima['cognome_e_nome'])) ?>)">Copia da impegnativa</button>
								<?php endif; ?>
								<button type="submit">Salva nel primo colloquio</button>
							</div>
						</form>
						<?php endif; ?>
					</div>

				<?php elseif ($affido): ?>
					<div class="card">
						<h3><span class="badge origine">Affidamento a terapista</span> <span class="badge <?= $stato_af[0] ?>"><?= h($stato_af[1]) ?></span></h3>
						<div class="campi">
							<div class="campo"><label>Paziente</label><div><?= h($affido['cognome_e_nome']) ?></div></div>
							<div class="campo"><label>Terapista</label><div><?= h($affido['terapista']) ?></div></div>
							<div class="campo"><label>Tipo di valutazione</label><div><?= h($affido['tipo_valutazione']) ?></div></div>
							<div class="campo"><label>Data richiesta</label><div><?= dataIt($affido['data_richiesta']) ?></div></div>
							<div class="campo"><label>Nascita · Sesso · Età</label><div><?= dataIt($affido['data_di_nascita']) ?> · <?= h($affido['sesso']) ?> · <?= h($affido['eta_evolutiva_o_adulta']) ?></div></div>
							<div class="campo"><label>Settore · Distretto</label><div><?= h($affido['settore']) ?> · <?= h($affido['distretto']) ?></div></div>
							<div class="campo"><label>Richiesta da</label><div><?= h($affido['utente_richiesta']) ?: '—' ?></div></div>
							<div class="campo"><label>Prodotto erogato</label><div><?= $prima ? h($prima['siglaprodotto']) . ' <small class="nota">' . h($prima['descrizioneprodotto']) . '</small>' : '—' ?></div></div>
						</div>
						<?php if ($affido['note'] !== null && $affido['note'] !== ''): ?><p class="nota"><strong>Note:</strong> <?= nl2br(h($affido['note'])) ?></p><?php endif; ?>
					</div>

					<div class="card">
						<h3>Abbinamento anagrafe</h3>
						<?php if ($id_utente): ?>
							<div class="confronto">
								<div class="campo"><label>Anagrafe</label><div><?= h($affido['nome_anagrafe']) ?></div></div>
								<div class="campo"><label>Prima impegnativa</label><div><?= $prima ? h($prima['cognome_e_nome']) . ' <small class="nota">(n° ' . (int)$prima['id_impegnativa'] . ' del ' . dataIt($prima['data_imp']) . ')</small>' : '— in attesa della segreteria' ?></div></div>
							</div>
							<?= bottone('scollega_af', 'Annulla abbinamento', $sel, true, 'sec piccolo') ?>
						<?php elseif ($candidati): ?>
							<p class="nota">Quando la segreteria ha creato l'anagrafica, abbina qui la pratica al paziente.</p>
							<table>
								<thead><tr><th>Anagrafe</th><th>Corrispondenza</th><th>Nascita</th><th>Prima impegnativa</th><th></th></tr></thead>
								<tbody>
								<?php foreach ($candidati as $c): ?>
									<tr>
										<td><?= h($c['cognome_e_nome']) ?></td>
										<td><?= badgeCandidato($c) ?></td>
										<td><?= dataIt($c['data_di_nascita']) ?></td>
										<td><?= h($c['nome_imp']) ?: '—' ?></td>
										<td>
											<form method="post" onsubmit="return confirm('Abbinare l\'affidamento a <?= h(addslashes($c['cognome_e_nome'])) ?>?')">
												<?= campiNascosti('abbina_af', $sel) ?>
												<input type="hidden" name="id_utente_scelto" value="<?= (int)$c['id_utente'] ?>">
												<button type="submit" class="piccolo">Abbina</button>
											</form>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						<?php else: ?>
							<p class="vuoto">Nessun paziente corrispondente in anagrafe: la segreteria deve ancora creare l'anagrafica.</p>
						<?php endif; ?>
					</div>

				<?php else: ?>
					<div class="card vuoto">Seleziona un paziente in alto, oppure crea un nuovo affidamento a terapista.</div>
				<?php endif; ?>

			<?php else: /* nuovo affidamento */ ?>
				<div class="card">
					<p class="nota">Primo colloquio affidato direttamente a un terapista: la richiesta va via mail a <?= h(EMAIL_SEGRETERIA) ?> e al terapista scelto (cc <?= h(EMAIL_CC_NP) ?>) e viene registrata. La nuova anagrafica (distretto <?= DISTRETTO_AFFIDO ?>, privato <?= PRIVATO_AFFIDO ?>) viene creata automaticamente; la segreteria crea la nuova impegnativa.</p>
					<?php if ($errore_affida): ?><div class="msg err"><?= h($errore_affida) ?></div><?php endif; ?>
					<form method="post" onsubmit="return confirm('Inviare la richiesta alla segreteria? Verrà creata anche la nuova anagrafica.')">
						<?= campiNascosti('affida', $sel) ?>
						<div class="modulo">
							<div class="largo">
								<label for="paz_nome">Paziente (cognome e nome) *</label>
								<input type="text" id="paz_nome" name="paz_nome" maxlength="50" required value="<?= $post('paz_nome') ?>">
							</div>
							<div>
								<label for="paz_nascita">Data di nascita</label>
								<input type="date" id="paz_nascita" name="paz_nascita" value="<?= $post('paz_nascita') ?>">
							</div>
							<div>
								<label for="sesso">Sesso *</label>
								<select id="sesso" name="sesso" required>
									<option value="">—</option>
									<?php foreach (SESSI_AFFIDO as $v): ?>
										<option<?= ($_POST['sesso'] ?? '') === $v ? ' selected' : '' ?>><?= $v ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div>
								<label for="eta">Età evolutiva o adulta *</label>
								<select id="eta" name="eta" required>
									<option value="">—</option>
									<?php foreach (ETA_AFFIDO as $v => $label): ?>
										<option value="<?= $v ?>"<?= ($_POST['eta'] ?? '') === $v ? ' selected' : '' ?>><?= h($label) ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div>
								<label for="settore">Settore *</label>
								<select id="settore" name="settore" required onchange="prodottoDaSettore()">
									<?php foreach (SETTORI_AFFIDO as $v): ?>
										<option<?= ($_POST['settore'] ?? 'NP') === $v ? ' selected' : '' ?>><?= $v ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div>
								<label>Distretto</label>
								<input type="text" value="<?= DISTRETTO_AFFIDO ?>" readonly>
							</div>
							<div>
								<label for="paz_recapito">Recapito</label>
								<input type="text" id="paz_recapito" name="paz_recapito" maxlength="100" value="<?= $post('paz_recapito') ?>">
							</div>
							<div>
								<label for="idprodotto">Tipo di valutazione *</label>
								<?= selectProdotti('idprodotto', (int)($_POST['idprodotto'] ?? 0), 'settoreDaProdotto()') ?>
							</div>
							<div>
								<label for="terapista">Terapista *</label>
								<select id="terapista" name="terapista" required>
									<option value="">—</option>
									<?php foreach (terapistiNP() as $t): ?>
										<option value="<?= h($t['cognome_e_nome']) ?>"<?= ($_POST['terapista'] ?? '') === $t['cognome_e_nome'] ? ' selected' : '' ?>><?= h($t['cognome_e_nome']) ?> (<?= h($t['professione']) ?>)<?= $t['mail'] ? '' : ' — senza mail' ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="largo">
								<label for="note">Note per la segreteria</label>
								<textarea id="note" name="note"><?= $post('note') ?></textarea>
							</div>
						</div>
						<br>
						<button type="submit">Invia alla segreteria</button>
					</form>
				</div>
			<?php endif; ?>

		<?php elseif (!$colloquio && !$affido): ?>
			<div class="card vuoto">Seleziona un paziente in alto per iniziare.</div>

		<?php elseif (!$id_utente): ?>
			<div class="card vuoto">
				<?php if ($affido): ?>
					L'affidamento è in attesa di anagrafica: quando la segreteria l'ha creata, abbinalo in <a href="?sez=colloquio<?= $qs_sel ?>">Primo colloquio / Affidamento</a>.
				<?php else: ?>
					Il primo colloquio non è abbinato a un paziente in anagrafe: allinea il nominativo in <a href="?sez=colloquio<?= $qs_sel ?>">Primo colloquio / Affidamento</a>.
				<?php endif; ?>
			</div>

		<?php elseif ($sez === 'valutazione'):
			// Valori proposti: quanto già inserito, altrimenti i dati dell'affidamento / prima impegnativa
			$val_prod = (int)($_POST['idprodotto'] ?? $affido['idprodotto'] ?? $prima['idprodotto'] ?? 0);
			$val_qta = (int)($_POST['quantita'] ?? 0);
			$val_ter = (int)($_POST['id_terapista'] ?? 0);
			$dipendenti = dipendentiAttivi();
			if (!$val_ter && $affido) {
				foreach ($dipendenti as $d) if ($d['cognome_e_nome'] === $affido['terapista']) $val_ter = (int)$d['id_nominativo'];
			}
		?>
			<div class="card">
				<h3>Dati per l'impegnativa di valutazione</h3>
				<?php if (!$prima): ?>
					<p class="nota">La pratica non ha ancora una prima impegnativa (dal <?= dataIt($inizio) ?>) da copiare.</p>
				<?php elseif ($valutazione_imp): ?>
					<p class="nota">L'impegnativa di valutazione della pratica è già stata generata.</p>
				<?php else: ?>
					<p class="nota">Si genera una copia della prima impegnativa (n° <?= (int)$prima['id_impegnativa'] ?> del <?= dataIt($prima['data_imp']) ?>) con i dati indicati qui sotto.</p>
					<?php if ($errore_val): ?><div class="msg err"><?= h($errore_val) ?></div><?php endif; ?>
					<form method="post" onsubmit="return confirm('Generare l\'impegnativa di valutazione con questi dati? Il terapista riceverà una mail.')">
						<?= campiNascosti('valutazione', $sel) ?>
						<div class="modulo">
							<div>
								<label>Data impegnativa e protocollo</label>
								<input type="text" value="<?= date('d/m/Y') ?>" readonly>
							</div>
							<div>
								<label for="val_prodotto">Tipo di valutazione *</label>
								<?= selectProdotti('val_prodotto', $val_prod) ?>
							</div>
							<div>
								<label for="quantita">Quantità massima *</label>
								<select id="quantita" name="quantita" required>
									<option value="">—</option>
									<?php for ($q = 1; $q <= 5; $q++): ?>
										<option<?= $val_qta === $q ? ' selected' : '' ?>><?= $q ?></option>
									<?php endfor; ?>
								</select>
							</div>
							<div class="largo"><?= pickerTerapista('valutazione', $val_ter) ?></div>
							<div class="largo"><?= campoNote('valutazione') ?></div>
						</div>
						<br>
						<button type="submit">+ Genera impegnativa di valutazione</button>
					</form>
				<?php endif; ?>
			</div>
			<div class="card">
				<h3>Impegnativa di valutazione (2ª della pratica)</h3>
				<?= tabellaImp($valutazione_imp ? [$valutazione_imp] : [], $nuovo) ?>
			</div>

		<?php elseif ($sez === 'trattamento'): ?>
			<div class="card">
				<?= formTrattamento('trattamento', '+ Crea impegnativa trattamento', $sel, $valutazione_imp && !$primo_tratt, $ter_default) ?>
				<?php if ($primo_tratt): ?><p class="nota">Il primo trattamento esiste già.</p>
				<?php elseif (!$valutazione_imp): ?><p class="nota">Genera prima l'impegnativa di valutazione.</p><?php endif; ?>
				<h3>Primo trattamento (3ª della pratica)</h3>
				<?= tabellaImp($primo_tratt ? [$primo_tratt] : [], $nuovo) ?>
			</div>
			<?= riquadroRestituzione('trattamento', $sel, $primo_tratt && !$ulteriori,
				!$primo_tratt ? 'Disponibile dopo l\'impegnativa di primo trattamento.'
					: ($ulteriori ? 'Ci sono già ulteriori trattamenti: inserisci il colloquio di restituzione nella sezione Ulteriori trattamenti.' : ''),
				$rest_tratt, $nuovo, $ter_default) ?>

		<?php elseif ($sez === 'ulteriori'): ?>
			<div class="card">
				<?= formTrattamento('ulteriori', '+ Crea ulteriore trattamento', $sel, (bool)$primo_tratt, $ter_default) ?>
				<?php if (!$primo_tratt): ?><p class="nota">Crea prima l'impegnativa del primo trattamento.</p><?php endif; ?>
				<h3>Ulteriori trattamenti (dalla 4ª della pratica)</h3>
				<?= tabellaImp($ulteriori, $nuovo) ?>
			</div>
			<?= riquadroRestituzione('ulteriori', $sel, (bool)$ulteriori,
				$ulteriori ? '' : 'Disponibile dopo il primo ulteriore trattamento.', $rest_ult, $nuovo, $ter_default) ?>
		<?php endif; ?>
	</main>
</div>
<script>
	// Scelta paziente: una categoria aperta alla volta, filtro per nome
	document.querySelectorAll('.cat').forEach(function (cat) {
		cat.addEventListener('toggle', function () {
			if (!cat.open) return;
			document.querySelectorAll('.cat').forEach(function (altra) { if (altra !== cat) altra.open = false; });
			var f = cat.querySelector('.filtro'); if (f) f.focus();
		});
		var filtro = cat.querySelector('.filtro');
		filtro.addEventListener('input', function () {
			var q = filtro.value.trim().toLowerCase();
			cat.querySelectorAll('.elenco li').forEach(function (li) {
				if (li.classList.contains('sottotitolo') || li.classList.contains('vuoto')) { li.hidden = q !== ''; return; }
				li.hidden = q !== '' && li.textContent.toLowerCase().indexOf(q) === -1;
			});
		});
	});
	// Chiude il pannello cliccando fuori
	document.addEventListener('click', function (e) {
		var s = document.querySelector('.scelta');
		if (s && s.open && s.dataset.sel === '1' && !s.contains(e.target)) s.open = false;
	});

	// Affidamento: il settore segue il prodotto scelto; se il settore cambia a mano
	// e non corrisponde più al prodotto, il prodotto si azzera
	function settoreDaProdotto() {
		var p = document.getElementById('idprodotto'), s = document.getElementById('settore');
		var o = p.options[p.selectedIndex];
		if (o && o.getAttribute('data-settore')) s.value = o.getAttribute('data-settore');
	}
	function prodottoDaSettore() {
		var p = document.getElementById('idprodotto'), s = document.getElementById('settore');
		var o = p.options[p.selectedIndex];
		if (o && o.getAttribute('data-settore') && o.getAttribute('data-settore') !== s.value) p.value = '';
	}

	// Valutazione: filtro per nominativo nell'elenco dipendenti
	function filtraTerapisti(campo) {
		var q = campo.value.trim().toLowerCase();
		var sel = document.getElementById(campo.getAttribute('data-target'));
		Array.prototype.forEach.call(sel.options, function (o) {
			o.hidden = q !== '' && o.text.toLowerCase().indexOf(q) === -1;
		});
	}

	function usaNome(nome) {
		var campo = document.getElementById('nuovo_nome');
		if (campo) { campo.value = nome; campo.focus(); }
	}
</script>
</body>
</html>
