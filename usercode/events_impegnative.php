<?php
class eventclass_impegnative  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'AfterEdit' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		'attesa' => array(
			'edit' => true 
		),
		'trattamento' => array(
			'edit' => true 
		),
		'dimesso' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function AfterEdit( &$values, $where, &$oldvalues, &$keys, $inline, $pageObject ) {
		// Place event code here.
$idImpegnativa = intval($values["id_impegnativa"]);
$quantita = intval($values["quantita"]);

// Se privato != '1', cancella solo i record vuoti (senza firma) e esci
if ($values["privato"] != '1') {
    DB::Exec("DELETE FROM scheda_firma_privato
              WHERE id_impegnativa = " . $idImpegnativa . "
              AND (data_firma IS NULL OR data_firma = '')");
    return;
}

// 1. Cancella i record SENZA firma (preserva quelli con firma gia compilata)
DB::Exec("DELETE FROM scheda_firma_privato
          WHERE id_impegnativa = " . $idImpegnativa . "
          AND (data_firma IS NULL OR data_firma = '')");

// 2. Aggiorna i campi dati sui record firmati rimasti
DB::Exec("UPDATE scheda_firma_privato SET
          cognome_e_nome = '" . str_replace("'", "''", $values["cognome_e_nome"]) . "',
          anno = '" . str_replace("'", "''", $values["anno"]) . "',
          et__evolutiva_o_adulto = '" . str_replace("'", "''", $values["et__evolutiva_o_adulto"]) . "',
          settore = '" . str_replace("'", "''", $values["settore"]) . "',
          sigla_cliente = '" . str_replace("'", "''", $values["sigla_cliente"]) . "',
          privato = '" . str_replace("'", "''", $values["privato"]) . "',
          data_imp = '" . str_replace("'", "''", $values["data_imp"]) . "',
          idprodotto = " . intval($values["idprodotto"]) . ",
          quantita = '" . str_replace("'", "''", $values["quantita"]) . "'
          WHERE id_impegnativa = " . $idImpegnativa);

// 3. Conta quanti record firmati sono rimasti
$rs = DB::Query("SELECT COUNT(*) as cnt FROM scheda_firma_privato
                 WHERE id_impegnativa = " . $idImpegnativa);
$row = $rs->fetchAssoc();
$firmati = intval($row["cnt"]);

// 4. Trova il progressivo massimo esistente
$rs2 = DB::Query("SELECT MAX(CAST(progressivo AS UNSIGNED)) as max_prog
                  FROM scheda_firma_privato
                  WHERE id_impegnativa = " . $idImpegnativa);
$row2 = $rs2->fetchAssoc();
$maxProg = intval($row2["max_prog"]);

// 5. Se servono piu record, crea i mancanti
if ($firmati < $quantita) {
    $daCreare = $quantita - $firmati;
    for ($i = 1; $i <= $daCreare; $i++) {
        $nuovoProg = $maxProg + $i;
        $progressivo = str_pad($nuovoProg, 2, '0', STR_PAD_LEFT);

        $sql = "INSERT INTO scheda_firma_privato
                (id_impegnativa, cognome_e_nome, anno, et__evolutiva_o_adulto,
                 settore, sigla_cliente, privato, data_imp,
                 data_firma, firma_paziente, idprodotto, quantita,
                 terapista, concluso, progressivo)
                VALUES (
                 " . $idImpegnativa . ",
                 '" . str_replace("'", "''", $values["cognome_e_nome"]) . "',
                 '" . str_replace("'", "''", $values["anno"]) . "',
                 '" . str_replace("'", "''", $values["et__evolutiva_o_adulto"]) . "',
                 '" . str_replace("'", "''", $values["settore"]) . "',
                 '" . str_replace("'", "''", $values["sigla_cliente"]) . "',
                 '" . str_replace("'", "''", $values["privato"]) . "',
                 '" . str_replace("'", "''", $values["data_imp"]) . "',
                 '',
                 NULL,
                 " . intval($values["idprodotto"]) . ",
                 '" . str_replace("'", "''", $values["quantita"]) . "',
                 '',
                 '',
                 '" . $progressivo . "'
                )";
        DB::Exec($sql);
    }
}


// Use "Add Action" button to add code snippets.


		;
		
	}
	public function default_attesa_efedit(  ) {
	$defaultValue = 0;
return $defaultValue;
}

public function default_trattamento_efedit(  ) {
	$defaultValue = 0;
return $defaultValue;
}

public function default_dimesso_efedit(  ) {
	$defaultValue = 0;
return $defaultValue;
}	

}


?>