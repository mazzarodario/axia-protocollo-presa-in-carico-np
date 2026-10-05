<?php
global $runnerTableSettings;
$runnerTableSettings['impegnative'] = array(
	'name' => 'impegnative',
	'shortName' => 'impegnative',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'afterEditDetails' => 'impegnative',
	'afterAddDetail' => 'impegnative',
	'detailsBadgeColor' => 'e07878',
	'strOrderBy' => 'ORDER BY
	impegnative.id_impegnativa DESC',
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id_impegnativa' 
		) 
	),
	'sql' => 'SELECT
	impegnative.id_impegnativa,
	impegnative.cognome_e_nome,
	impegnative.id_utente,
	impegnative.data_di_nascita,
	impegnative.sesso,
	impegnative.et__evolutiva_o_adulto,
	impegnative.settore,
	impegnative.privato,
	impegnative.codice_fim,
	impegnative.codice_patologia,
	impegnative.data_imp,
	impegnative.medico_inviante,
	impegnative.sigla_cliente,
	impegnative.protocollo,
	impegnative.anno,
	impegnative.idprodotto,
	impegnative.quantita,
	impegnative.scadenza_impegnativa,
	impegnative.attesa,
	impegnative.trattamento,
	impegnative.dimesso,
	impegnative.data_inizio_trattamento,
	impegnative.data_dimissione,
	impegnative.terapista,
	impegnative.data_sospensione,
	impegnative.data_riattivazione,
	impegnative.motivo_sospensione,
	impegnative.note,
	impegnative.valutazione,
	impegnative.trattamento1,
	impegnative.diagnosi,
	impegnative.medico_interno,
	impegnative.visita_urgente,
	impegnative.indirizzo,
	impegnative.paziente_asa,
	impegnative.ptda,
	impegnative.data_segnalazione_pdta,
	impegnative.luogo_di_nascita,
	impegnative.localita,
	impegnative.nro_telefono,
	impegnative.riserva1,
	impegnative.riserva2,
	impegnative.riserva3,
	impegnative.riserva4,
	impegnative.ultima_modifica,
	impegnative.escludi,
	impegnative.dimissione_ospedaliera,
	prodotti.siglaprodotto,
	prodotti.Tipologia
FROM
	impegnative
	INNER JOIN prodotti ON prodotti.idprodotto = impegnative.idprodotto
WHERE
impegnative.id_impegnativa >63721 AND impegnative.settore <>"NM" AND prodotti.Tipologia ="PRIV"
ORDER BY
	impegnative.id_impegnativa DESC
',
	'keyFields' => array( 
		'id_impegnativa' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id_impegnativa' => array(
			'name' => 'id_impegnativa',
			'goodName' => 'id_impegnativa',
			'strField' => 'id_impegnativa',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'impegnative.id_impegnativa',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'cognome_e_nome' => array(
			'name' => 'cognome_e_nome',
			'goodName' => 'cognome_e_nome',
			'strField' => 'cognome_e_nome',
			'index' => 2,
			'sqlExpression' => 'impegnative.cognome_e_nome',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'impegnative',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'cognome_e_nome',
					'lookupDisplayField' => 'cognome_e_nome',
					'lookupOrderBy' => 'cognome_e_nome',
					'lookupControlType' => 1 
				) 
			),
			'searchOptions' => array( 
				'Equals' 
			),
			'tableName' => 'impegnative',
			'viewLinkTable' => 'impegnative',
			'viewLinkLookup' => true 
		),
		'id_utente' => array(
			'name' => 'id_utente',
			'goodName' => 'id_utente',
			'strField' => 'id_utente',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'impegnative.id_utente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative',
			'viewLinkTable' => 'anagrafe',
			'viewLinkLookup' => false 
		),
		'data_di_nascita' => array(
			'name' => 'data_di_nascita',
			'goodName' => 'data_di_nascita',
			'strField' => 'data_di_nascita',
			'index' => 4,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_di_nascita',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'sesso' => array(
			'name' => 'sesso',
			'goodName' => 'sesso',
			'strField' => 'sesso',
			'index' => 5,
			'sqlExpression' => 'impegnative.sesso',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'M',
						'F' 
					) 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'et__evolutiva_o_adulto' => array(
			'name' => 'et__evolutiva_o_adulto',
			'goodName' => 'et__evolutiva_o_adulto',
			'strField' => 'et__evolutiva_o_adulto',
			'index' => 6,
			'sqlExpression' => 'impegnative.et__evolutiva_o_adulto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'A',
						'B' 
					) 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'settore' => array(
			'name' => 'settore',
			'goodName' => 'settore',
			'strField' => 'settore',
			'index' => 7,
			'sqlExpression' => 'impegnative.settore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'NP',
						'PM' 
					) 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'privato' => array(
			'name' => 'privato',
			'goodName' => 'privato',
			'strField' => 'privato',
			'index' => 8,
			'sqlExpression' => 'impegnative.privato',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'codice_fim' => array(
			'name' => 'codice_fim',
			'goodName' => 'codice_fim',
			'strField' => 'codice_fim',
			'index' => 9,
			'sqlExpression' => 'impegnative.codice_fim',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'codice_patologia' => array(
			'name' => 'codice_patologia',
			'goodName' => 'codice_patologia',
			'strField' => 'codice_patologia',
			'index' => 10,
			'sqlExpression' => 'impegnative.codice_patologia',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupTable' => 'codici patologia',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'descrizione',
					'lookupDisplayField' => 'descrizione',
					'lookupOrderBy' => 'descrizione' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_imp' => array(
			'name' => 'data_imp',
			'goodName' => 'data_imp',
			'strField' => 'data_imp',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_imp',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'medico_inviante' => array(
			'name' => 'medico_inviante',
			'goodName' => 'medico_inviante',
			'strField' => 'medico_inviante',
			'index' => 12,
			'sqlExpression' => 'impegnative.medico_inviante',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'sigla_cliente' => array(
			'name' => 'sigla_cliente',
			'goodName' => 'sigla_cliente',
			'strField' => 'sigla_cliente',
			'index' => 13,
			'sqlExpression' => 'impegnative.sigla_cliente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'protocollo' => array(
			'name' => 'protocollo',
			'goodName' => 'protocollo',
			'strField' => 'protocollo',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'impegnative.protocollo',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'anno' => array(
			'name' => 'anno',
			'goodName' => 'anno',
			'strField' => 'anno',
			'index' => 15,
			'type' => 3,
			'sqlExpression' => 'impegnative.anno',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'idprodotto' => array(
			'name' => 'idprodotto',
			'goodName' => 'idprodotto',
			'strField' => 'idprodotto',
			'index' => 16,
			'type' => 3,
			'sqlExpression' => 'impegnative.idprodotto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'quantita' => array(
			'name' => 'quantita',
			'goodName' => 'quantita',
			'strField' => 'quantita',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'impegnative.quantita',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'scadenza_impegnativa' => array(
			'name' => 'scadenza_impegnativa',
			'goodName' => 'scadenza_impegnativa',
			'strField' => 'scadenza_impegnativa',
			'index' => 18,
			'type' => 135,
			'sqlExpression' => 'impegnative.scadenza_impegnativa',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'attesa' => array(
			'name' => 'attesa',
			'goodName' => 'attesa',
			'strField' => 'attesa',
			'index' => 19,
			'type' => 2,
			'sqlExpression' => 'impegnative.attesa',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'defaultValue' => '0' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'trattamento' => array(
			'name' => 'trattamento',
			'goodName' => 'trattamento',
			'strField' => 'trattamento',
			'index' => 20,
			'type' => 2,
			'sqlExpression' => 'impegnative.trattamento',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'defaultValue' => '0' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'dimesso' => array(
			'name' => 'dimesso',
			'goodName' => 'dimesso',
			'strField' => 'dimesso',
			'index' => 21,
			'type' => 2,
			'sqlExpression' => 'impegnative.dimesso',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'defaultValue' => '0' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_inizio_trattamento' => array(
			'name' => 'data_inizio_trattamento',
			'goodName' => 'data_inizio_trattamento',
			'strField' => 'data_inizio_trattamento',
			'index' => 22,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_inizio_trattamento',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_dimissione' => array(
			'name' => 'data_dimissione',
			'goodName' => 'data_dimissione',
			'strField' => 'data_dimissione',
			'index' => 23,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_dimissione',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'terapista' => array(
			'name' => 'terapista',
			'goodName' => 'terapista',
			'strField' => 'terapista',
			'index' => 24,
			'sqlExpression' => 'impegnative.terapista',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupTable' => 'dipendenti',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id_nominativo',
					'lookupDisplayField' => 'cognome_e_nome',
					'lookupOrderBy' => 'cognome_e_nome' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_sospensione' => array(
			'name' => 'data_sospensione',
			'goodName' => 'data_sospensione',
			'strField' => 'data_sospensione',
			'index' => 25,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_sospensione',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_riattivazione' => array(
			'name' => 'data_riattivazione',
			'goodName' => 'data_riattivazione',
			'strField' => 'data_riattivazione',
			'index' => 26,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_riattivazione',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'motivo_sospensione' => array(
			'name' => 'motivo_sospensione',
			'goodName' => 'motivo_sospensione',
			'strField' => 'motivo_sospensione',
			'index' => 27,
			'type' => 201,
			'sqlExpression' => 'impegnative.motivo_sospensione',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'note' => array(
			'name' => 'note',
			'goodName' => 'note',
			'strField' => 'note',
			'index' => 28,
			'type' => 201,
			'sqlExpression' => 'impegnative.note',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'valutazione' => array(
			'name' => 'valutazione',
			'goodName' => 'valutazione',
			'strField' => 'valutazione',
			'index' => 29,
			'sqlExpression' => 'impegnative.valutazione',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'trattamento1' => array(
			'name' => 'trattamento1',
			'goodName' => 'trattamento1',
			'strField' => 'trattamento1',
			'index' => 30,
			'sqlExpression' => 'impegnative.trattamento1',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'diagnosi' => array(
			'name' => 'diagnosi',
			'goodName' => 'diagnosi',
			'strField' => 'diagnosi',
			'index' => 31,
			'type' => 201,
			'sqlExpression' => 'impegnative.diagnosi',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'medico_interno' => array(
			'name' => 'medico_interno',
			'goodName' => 'medico_interno',
			'strField' => 'medico_interno',
			'index' => 32,
			'sqlExpression' => 'impegnative.medico_interno',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'visita_urgente' => array(
			'name' => 'visita_urgente',
			'goodName' => 'visita_urgente',
			'strField' => 'visita_urgente',
			'index' => 33,
			'sqlExpression' => 'impegnative.visita_urgente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'indirizzo' => array(
			'name' => 'indirizzo',
			'goodName' => 'indirizzo',
			'strField' => 'indirizzo',
			'index' => 34,
			'sqlExpression' => 'impegnative.indirizzo',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'paziente_asa' => array(
			'name' => 'paziente_asa',
			'goodName' => 'paziente_asa',
			'strField' => 'paziente_asa',
			'index' => 35,
			'sqlExpression' => 'impegnative.paziente_asa',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'ptda' => array(
			'name' => 'ptda',
			'goodName' => 'ptda',
			'strField' => 'ptda',
			'index' => 36,
			'sqlExpression' => 'impegnative.ptda',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'data_segnalazione_pdta' => array(
			'name' => 'data_segnalazione_pdta',
			'goodName' => 'data_segnalazione_pdta',
			'strField' => 'data_segnalazione_pdta',
			'index' => 37,
			'type' => 135,
			'sqlExpression' => 'impegnative.data_segnalazione_pdta',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'luogo_di_nascita' => array(
			'name' => 'luogo_di_nascita',
			'goodName' => 'luogo_di_nascita',
			'strField' => 'luogo_di_nascita',
			'index' => 38,
			'sqlExpression' => 'impegnative.luogo_di_nascita',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'localita' => array(
			'name' => 'localita',
			'goodName' => 'localita',
			'strField' => 'localita',
			'index' => 39,
			'sqlExpression' => 'impegnative.localita',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'nro_telefono' => array(
			'name' => 'nro_telefono',
			'goodName' => 'nro_telefono',
			'strField' => 'nro_telefono',
			'index' => 40,
			'sqlExpression' => 'impegnative.nro_telefono',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'riserva1' => array(
			'name' => 'riserva1',
			'goodName' => 'riserva1',
			'strField' => 'riserva1',
			'index' => 41,
			'type' => 2,
			'sqlExpression' => 'impegnative.riserva1',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'riserva2' => array(
			'name' => 'riserva2',
			'goodName' => 'riserva2',
			'strField' => 'riserva2',
			'index' => 42,
			'type' => 201,
			'sqlExpression' => 'impegnative.riserva2',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'riserva3' => array(
			'name' => 'riserva3',
			'goodName' => 'riserva3',
			'strField' => 'riserva3',
			'index' => 43,
			'sqlExpression' => 'impegnative.riserva3',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'riserva4' => array(
			'name' => 'riserva4',
			'goodName' => 'riserva4',
			'strField' => 'riserva4',
			'index' => 44,
			'type' => 128,
			'sqlExpression' => 'impegnative.riserva4',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Database image' 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'ultima_modifica' => array(
			'name' => 'ultima_modifica',
			'goodName' => 'ultima_modifica',
			'strField' => 'ultima_modifica',
			'index' => 45,
			'type' => 135,
			'sqlExpression' => 'impegnative.ultima_modifica',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'escludi' => array(
			'name' => 'escludi',
			'goodName' => 'escludi',
			'strField' => 'escludi',
			'index' => 46,
			'sqlExpression' => 'impegnative.escludi',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'dimissione_ospedaliera' => array(
			'name' => 'dimissione_ospedaliera',
			'goodName' => 'dimissione_ospedaliera',
			'strField' => 'dimissione_ospedaliera',
			'index' => 47,
			'type' => 135,
			'sqlExpression' => 'impegnative.dimissione_ospedaliera',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'impegnative' 
		),
		'siglaprodotto' => array(
			'name' => 'siglaprodotto',
			'goodName' => 'siglaprodotto',
			'strField' => 'siglaprodotto',
			'index' => 48,
			'sqlExpression' => 'prodotti.siglaprodotto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupTable' => 'prodotti',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'siglaprodotto',
					'lookupDisplayField' => 'siglaprodotto',
					'lookupOrderBy' => 'siglaprodotto' 
				) 
			),
			'tableName' => 'prodotti' 
		),
		'Tipologia' => array(
			'name' => 'Tipologia',
			'goodName' => 'Tipologia',
			'strField' => 'Tipologia',
			'index' => 49,
			'sqlExpression' => 'prodotti.Tipologia',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'prodotti' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'anagrafe',
			'detailsKeys' => array( 
				'id_utente' 
			),
			'masterKeys' => array( 
				'id_utente' 
			) 
		) 
	),
	'detailsTables' => array( 
		'scheda_firma_privato' 
	),
	'query' => array(
		'sql' => 'SELECT
	impegnative.id_impegnativa,
	impegnative.cognome_e_nome,
	impegnative.id_utente,
	impegnative.data_di_nascita,
	impegnative.sesso,
	impegnative.et__evolutiva_o_adulto,
	impegnative.settore,
	impegnative.privato,
	impegnative.codice_fim,
	impegnative.codice_patologia,
	impegnative.data_imp,
	impegnative.medico_inviante,
	impegnative.sigla_cliente,
	impegnative.protocollo,
	impegnative.anno,
	impegnative.idprodotto,
	impegnative.quantita,
	impegnative.scadenza_impegnativa,
	impegnative.attesa,
	impegnative.trattamento,
	impegnative.dimesso,
	impegnative.data_inizio_trattamento,
	impegnative.data_dimissione,
	impegnative.terapista,
	impegnative.data_sospensione,
	impegnative.data_riattivazione,
	impegnative.motivo_sospensione,
	impegnative.note,
	impegnative.valutazione,
	impegnative.trattamento1,
	impegnative.diagnosi,
	impegnative.medico_interno,
	impegnative.visita_urgente,
	impegnative.indirizzo,
	impegnative.paziente_asa,
	impegnative.ptda,
	impegnative.data_segnalazione_pdta,
	impegnative.luogo_di_nascita,
	impegnative.localita,
	impegnative.nro_telefono,
	impegnative.riserva1,
	impegnative.riserva2,
	impegnative.riserva3,
	impegnative.riserva4,
	impegnative.ultima_modifica,
	impegnative.escludi,
	impegnative.dimissione_ospedaliera,
	prodotti.siglaprodotto,
	prodotti.Tipologia
FROM
	impegnative
	INNER JOIN prodotti ON prodotti.idprodotto = impegnative.idprodotto
WHERE
impegnative.id_impegnativa >63721 AND impegnative.settore <>"NM" AND prodotti.Tipologia ="PRIV"
ORDER BY
	impegnative.id_impegnativa DESC
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'impegnative.id_impegnativa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'id_impegnativa' 
				),
				'encrypted' => false,
				'columnName' => 'id_impegnativa' 
			),
			array(
				'sql' => 'impegnative.cognome_e_nome',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'cognome_e_nome' 
				),
				'encrypted' => false,
				'columnName' => 'cognome_e_nome' 
			),
			array(
				'sql' => 'impegnative.id_utente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'id_utente' 
				),
				'encrypted' => false,
				'columnName' => 'id_utente' 
			),
			array(
				'sql' => 'impegnative.data_di_nascita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_di_nascita' 
				),
				'encrypted' => false,
				'columnName' => 'data_di_nascita' 
			),
			array(
				'sql' => 'impegnative.sesso',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'sesso' 
				),
				'encrypted' => false,
				'columnName' => 'sesso' 
			),
			array(
				'sql' => 'impegnative.et__evolutiva_o_adulto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'et__evolutiva_o_adulto' 
				),
				'encrypted' => false,
				'columnName' => 'et__evolutiva_o_adulto' 
			),
			array(
				'sql' => 'impegnative.settore',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'settore' 
				),
				'encrypted' => false,
				'columnName' => 'settore' 
			),
			array(
				'sql' => 'impegnative.privato',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'privato' 
				),
				'encrypted' => false,
				'columnName' => 'privato' 
			),
			array(
				'sql' => 'impegnative.codice_fim',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'codice_fim' 
				),
				'encrypted' => false,
				'columnName' => 'codice_fim' 
			),
			array(
				'sql' => 'impegnative.codice_patologia',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'codice_patologia' 
				),
				'encrypted' => false,
				'columnName' => 'codice_patologia' 
			),
			array(
				'sql' => 'impegnative.data_imp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_imp' 
				),
				'encrypted' => false,
				'columnName' => 'data_imp' 
			),
			array(
				'sql' => 'impegnative.medico_inviante',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'medico_inviante' 
				),
				'encrypted' => false,
				'columnName' => 'medico_inviante' 
			),
			array(
				'sql' => 'impegnative.sigla_cliente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'sigla_cliente' 
				),
				'encrypted' => false,
				'columnName' => 'sigla_cliente' 
			),
			array(
				'sql' => 'impegnative.protocollo',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'protocollo' 
				),
				'encrypted' => false,
				'columnName' => 'protocollo' 
			),
			array(
				'sql' => 'impegnative.anno',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'anno' 
				),
				'encrypted' => false,
				'columnName' => 'anno' 
			),
			array(
				'sql' => 'impegnative.idprodotto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'idprodotto' 
				),
				'encrypted' => false,
				'columnName' => 'idprodotto' 
			),
			array(
				'sql' => 'impegnative.quantita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'quantita' 
				),
				'encrypted' => false,
				'columnName' => 'quantita' 
			),
			array(
				'sql' => 'impegnative.scadenza_impegnativa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'scadenza_impegnativa' 
				),
				'encrypted' => false,
				'columnName' => 'scadenza_impegnativa' 
			),
			array(
				'sql' => 'impegnative.attesa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'attesa' 
				),
				'encrypted' => false,
				'columnName' => 'attesa' 
			),
			array(
				'sql' => 'impegnative.trattamento',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'trattamento' 
				),
				'encrypted' => false,
				'columnName' => 'trattamento' 
			),
			array(
				'sql' => 'impegnative.dimesso',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'dimesso' 
				),
				'encrypted' => false,
				'columnName' => 'dimesso' 
			),
			array(
				'sql' => 'impegnative.data_inizio_trattamento',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_inizio_trattamento' 
				),
				'encrypted' => false,
				'columnName' => 'data_inizio_trattamento' 
			),
			array(
				'sql' => 'impegnative.data_dimissione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_dimissione' 
				),
				'encrypted' => false,
				'columnName' => 'data_dimissione' 
			),
			array(
				'sql' => 'impegnative.terapista',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'terapista' 
				),
				'encrypted' => false,
				'columnName' => 'terapista' 
			),
			array(
				'sql' => 'impegnative.data_sospensione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_sospensione' 
				),
				'encrypted' => false,
				'columnName' => 'data_sospensione' 
			),
			array(
				'sql' => 'impegnative.data_riattivazione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_riattivazione' 
				),
				'encrypted' => false,
				'columnName' => 'data_riattivazione' 
			),
			array(
				'sql' => 'impegnative.motivo_sospensione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'motivo_sospensione' 
				),
				'encrypted' => false,
				'columnName' => 'motivo_sospensione' 
			),
			array(
				'sql' => 'impegnative.note',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'note' 
				),
				'encrypted' => false,
				'columnName' => 'note' 
			),
			array(
				'sql' => 'impegnative.valutazione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'valutazione' 
				),
				'encrypted' => false,
				'columnName' => 'valutazione' 
			),
			array(
				'sql' => 'impegnative.trattamento1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'trattamento1' 
				),
				'encrypted' => false,
				'columnName' => 'trattamento1' 
			),
			array(
				'sql' => 'impegnative.diagnosi',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'diagnosi' 
				),
				'encrypted' => false,
				'columnName' => 'diagnosi' 
			),
			array(
				'sql' => 'impegnative.medico_interno',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'medico_interno' 
				),
				'encrypted' => false,
				'columnName' => 'medico_interno' 
			),
			array(
				'sql' => 'impegnative.visita_urgente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'visita_urgente' 
				),
				'encrypted' => false,
				'columnName' => 'visita_urgente' 
			),
			array(
				'sql' => 'impegnative.indirizzo',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'indirizzo' 
				),
				'encrypted' => false,
				'columnName' => 'indirizzo' 
			),
			array(
				'sql' => 'impegnative.paziente_asa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'paziente_asa' 
				),
				'encrypted' => false,
				'columnName' => 'paziente_asa' 
			),
			array(
				'sql' => 'impegnative.ptda',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'ptda' 
				),
				'encrypted' => false,
				'columnName' => 'ptda' 
			),
			array(
				'sql' => 'impegnative.data_segnalazione_pdta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'data_segnalazione_pdta' 
				),
				'encrypted' => false,
				'columnName' => 'data_segnalazione_pdta' 
			),
			array(
				'sql' => 'impegnative.luogo_di_nascita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'luogo_di_nascita' 
				),
				'encrypted' => false,
				'columnName' => 'luogo_di_nascita' 
			),
			array(
				'sql' => 'impegnative.localita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'localita' 
				),
				'encrypted' => false,
				'columnName' => 'localita' 
			),
			array(
				'sql' => 'impegnative.nro_telefono',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'nro_telefono' 
				),
				'encrypted' => false,
				'columnName' => 'nro_telefono' 
			),
			array(
				'sql' => 'impegnative.riserva1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'riserva1' 
				),
				'encrypted' => false,
				'columnName' => 'riserva1' 
			),
			array(
				'sql' => 'impegnative.riserva2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'riserva2' 
				),
				'encrypted' => false,
				'columnName' => 'riserva2' 
			),
			array(
				'sql' => 'impegnative.riserva3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'riserva3' 
				),
				'encrypted' => false,
				'columnName' => 'riserva3' 
			),
			array(
				'sql' => 'impegnative.riserva4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'riserva4' 
				),
				'encrypted' => false,
				'columnName' => 'riserva4' 
			),
			array(
				'sql' => 'impegnative.ultima_modifica',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'ultima_modifica' 
				),
				'encrypted' => false,
				'columnName' => 'ultima_modifica' 
			),
			array(
				'sql' => 'impegnative.escludi',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'escludi' 
				),
				'encrypted' => false,
				'columnName' => 'escludi' 
			),
			array(
				'sql' => 'impegnative.dimissione_ospedaliera',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'dimissione_ospedaliera' 
				),
				'encrypted' => false,
				'columnName' => 'dimissione_ospedaliera' 
			),
			array(
				'sql' => 'prodotti.siglaprodotto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prodotti',
					'name' => 'siglaprodotto' 
				),
				'encrypted' => false,
				'columnName' => 'siglaprodotto' 
			),
			array(
				'sql' => 'prodotti.Tipologia',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'prodotti',
					'name' => 'Tipologia' 
				),
				'encrypted' => false,
				'columnName' => 'Tipologia' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'impegnative',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'impegnative',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id_impegnativa',
						'cognome_e_nome',
						'id_utente',
						'data_di_nascita',
						'sesso',
						'et__evolutiva_o_adulto',
						'settore',
						'privato',
						'codice_fim',
						'codice_patologia',
						'data_imp',
						'medico_inviante',
						'sigla_cliente',
						'protocollo',
						'anno',
						'tipologia',
						'idprodotto',
						'quantita',
						'scadenza_impegnativa',
						'attesa',
						'trattamento',
						'dimesso',
						'data_inizio_trattamento',
						'data_dimissione',
						'terapista',
						'data_sospensione',
						'data_riattivazione',
						'motivo_sospensione',
						'note',
						'valutazione',
						'trattamento1',
						'diagnosi',
						'medico_interno',
						'visita_urgente',
						'indirizzo',
						'paziente_asa',
						'ptda',
						'data_segnalazione_pdta',
						'luogo_di_nascita',
						'localita',
						'nro_telefono',
						'riserva1',
						'riserva2',
						'riserva3',
						'riserva4',
						'ultima_modifica',
						'escludi',
						'dimissione_ospedaliera' 
					),
					'name' => 'impegnative' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			),
			array(
				'sql' => 'INNER JOIN prodotti ON prodotti.idprodotto = impegnative.idprodotto',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'prodotti',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'idprodotto',
						'settore',
						'siglaprodotto',
						'modalita',
						'descrizioneprodotto',
						'prezzo_unitario',
						'codice_cc',
						'ultima_modifica',
						'Tipologia',
						'prestazione' 
					),
					'name' => 'prodotti' 
				),
				'joinOn' => array(
					'sql' => 'prodotti.idprodotto = impegnative.idprodotto',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'prodotti',
						'name' => 'idprodotto' 
					),
					'case' => '= impegnative.idprodotto',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'prodotti.idprodotto = impegnative.idprodotto',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'prodotti',
							'name' => 'idprodotto' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'impegnative',
							'name' => 'idprodotto' 
						) 
					) 
				),
				'link' => 1 
			) 
		),
		'where' => array(
			'sql' => 'impegnative.id_impegnativa >63721 AND impegnative.settore <>"NM" AND prodotti.Tipologia ="PRIV"',
			'parsed' => true,
			'type' => 'LogicalExpression',
			'contained' => array( 
				array(
					'sql' => 'impegnative.id_impegnativa >63721',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'impegnative',
						'name' => 'id_impegnativa' 
					),
					'case' => '>63721',
					'useAlias' => false 
				),
				array(
					'sql' => 'impegnative.settore <>"NM"',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'impegnative',
						'name' => 'settore' 
					),
					'case' => '<>"NM"',
					'useAlias' => false 
				),
				array(
					'sql' => 'prodotti.Tipologia ="PRIV"',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'prodotti',
						'name' => 'Tipologia' 
					),
					'case' => '="PRIV"',
					'useAlias' => false 
				) 
			),
			'unionType' => 1,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			array(
				'sql' => 'impegnative.id_impegnativa DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'impegnative',
					'name' => 'id_impegnativa' 
				),
				'asc' => false,
				'columnNumber' => 1 
			) 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => 0,
				'groupByIndex' => -1,
				'whereIndex' => 0,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => 1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 34,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 35,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 36,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 37,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 38,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 39,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 40,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 41,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 42,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 43,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 44,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 45,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 46,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 47,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 48,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => 2,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'impegnative.id_impegnativa,
	impegnative.cognome_e_nome,
	impegnative.id_utente,
	impegnative.data_di_nascita,
	impegnative.sesso,
	impegnative.et__evolutiva_o_adulto,
	impegnative.settore,
	impegnative.privato,
	impegnative.codice_fim,
	impegnative.codice_patologia,
	impegnative.data_imp,
	impegnative.medico_inviante,
	impegnative.sigla_cliente,
	impegnative.protocollo,
	impegnative.anno,
	impegnative.idprodotto,
	impegnative.quantita,
	impegnative.scadenza_impegnativa,
	impegnative.attesa,
	impegnative.trattamento,
	impegnative.dimesso,
	impegnative.data_inizio_trattamento,
	impegnative.data_dimissione,
	impegnative.terapista,
	impegnative.data_sospensione,
	impegnative.data_riattivazione,
	impegnative.motivo_sospensione,
	impegnative.note,
	impegnative.valutazione,
	impegnative.trattamento1,
	impegnative.diagnosi,
	impegnative.medico_interno,
	impegnative.visita_urgente,
	impegnative.indirizzo,
	impegnative.paziente_asa,
	impegnative.ptda,
	impegnative.data_segnalazione_pdta,
	impegnative.luogo_di_nascita,
	impegnative.localita,
	impegnative.nro_telefono,
	impegnative.riserva1,
	impegnative.riserva2,
	impegnative.riserva3,
	impegnative.riserva4,
	impegnative.ultima_modifica,
	impegnative.escludi,
	impegnative.dimissione_ospedaliera,
	prodotti.siglaprodotto,
	prodotti.Tipologia',
		'fromListSql' => 'FROM
	impegnative
	INNER JOIN prodotti ON prodotti.idprodotto = impegnative.idprodotto',
		'whereSql' => 'impegnative.id_impegnativa >63721 AND impegnative.settore <>"NM" AND prodotti.Tipologia ="PRIV"',
		'orderBySql' => 'ORDER BY
	impegnative.id_impegnativa DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'impegnative',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id_impegnativa',
			'cognome_e_nome',
			'id_utente',
			'data_di_nascita',
			'sesso',
			'et__evolutiva_o_adulto',
			'settore',
			'privato',
			'codice_fim',
			'codice_patologia',
			'data_imp',
			'medico_inviante',
			'sigla_cliente',
			'protocollo',
			'anno',
			'idprodotto',
			'quantita',
			'scadenza_impegnativa',
			'attesa',
			'trattamento',
			'dimesso',
			'data_inizio_trattamento',
			'data_dimissione',
			'terapista',
			'data_sospensione',
			'data_riattivazione',
			'motivo_sospensione',
			'note',
			'valutazione',
			'trattamento1',
			'diagnosi',
			'medico_interno',
			'visita_urgente',
			'indirizzo',
			'paziente_asa',
			'ptda',
			'data_segnalazione_pdta',
			'luogo_di_nascita',
			'localita',
			'nro_telefono',
			'riserva1',
			'riserva2',
			'riserva3',
			'ultima_modifica',
			'escludi',
			'dimissione_ospedaliera',
			'siglaprodotto',
			'Tipologia' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id_impegnativa',
			'cognome_e_nome',
			'id_utente',
			'data_di_nascita',
			'sesso',
			'et__evolutiva_o_adulto',
			'settore',
			'privato',
			'codice_fim',
			'codice_patologia',
			'data_imp',
			'medico_inviante',
			'sigla_cliente',
			'protocollo',
			'anno',
			'idprodotto',
			'quantita',
			'scadenza_impegnativa',
			'attesa',
			'trattamento',
			'dimesso',
			'data_inizio_trattamento',
			'data_dimissione',
			'terapista',
			'data_sospensione',
			'data_riattivazione',
			'motivo_sospensione',
			'note',
			'valutazione',
			'trattamento1',
			'diagnosi',
			'medico_interno',
			'visita_urgente',
			'indirizzo',
			'paziente_asa',
			'ptda',
			'data_segnalazione_pdta',
			'luogo_di_nascita',
			'localita',
			'nro_telefono',
			'riserva1',
			'riserva2',
			'riserva3',
			'ultima_modifica',
			'escludi',
			'dimissione_ospedaliera',
			'siglaprodotto',
			'Tipologia' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'Italian' ) {
	$runnerTableLabels['impegnative'] = array(
	'tableCaption' => 'Impegnative',
	'fieldLabels' => array(
		'id_impegnativa' => 'Id Impegnativa',
		'cognome_e_nome' => 'Cognome E Nome',
		'id_utente' => 'Id Utente',
		'data_di_nascita' => 'Data Di Nascita',
		'sesso' => 'Sesso',
		'et__evolutiva_o_adulto' => 'Et Evolutiva O Adulto',
		'settore' => 'Settore',
		'privato' => 'Privato',
		'codice_fim' => 'Codice Fim',
		'codice_patologia' => 'Codice Patologia',
		'data_imp' => 'Data Imp',
		'medico_inviante' => 'Medico Inviante',
		'sigla_cliente' => 'Sigla Cliente',
		'protocollo' => 'Protocollo',
		'anno' => 'Anno',
		'idprodotto' => 'Idprodotto',
		'quantita' => 'Quantita',
		'scadenza_impegnativa' => 'Scadenza Impegnativa',
		'attesa' => 'Attesa',
		'trattamento' => 'Trattamento',
		'dimesso' => 'Dimesso',
		'data_inizio_trattamento' => 'Data Inizio Trattamento',
		'data_dimissione' => 'Data Dimissione',
		'terapista' => 'Terapista',
		'data_sospensione' => 'Data Sospensione',
		'data_riattivazione' => 'Data Riattivazione',
		'motivo_sospensione' => 'Motivo Sospensione',
		'note' => 'Note',
		'valutazione' => 'Valutazione',
		'trattamento1' => 'Trattamento1',
		'diagnosi' => 'Diagnosi',
		'medico_interno' => 'Medico Interno',
		'visita_urgente' => 'Visita Urgente',
		'indirizzo' => 'Indirizzo',
		'paziente_asa' => 'Paziente Asa',
		'ptda' => 'Ptda',
		'data_segnalazione_pdta' => 'Data Segnalazione Pdta',
		'luogo_di_nascita' => 'Luogo Di Nascita',
		'localita' => 'Localita',
		'nro_telefono' => 'Nro Telefono',
		'riserva1' => 'Riserva1',
		'riserva2' => 'Riserva2',
		'riserva3' => 'Riserva3',
		'riserva4' => 'Riserva4',
		'ultima_modifica' => 'Ultima Modifica',
		'escludi' => 'Escludi',
		'dimissione_ospedaliera' => 'Dimissione Ospedaliera',
		'siglaprodotto' => 'Siglaprodotto',
		'Tipologia' => 'Tipologia' 
	),
	'fieldTooltips' => array(
		'id_impegnativa' => '',
		'cognome_e_nome' => '',
		'id_utente' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'et__evolutiva_o_adulto' => '',
		'settore' => '',
		'privato' => '',
		'codice_fim' => '',
		'codice_patologia' => '',
		'data_imp' => '',
		'medico_inviante' => '',
		'sigla_cliente' => '',
		'protocollo' => '',
		'anno' => '',
		'idprodotto' => '',
		'quantita' => '',
		'scadenza_impegnativa' => '',
		'attesa' => '',
		'trattamento' => '',
		'dimesso' => '',
		'data_inizio_trattamento' => '',
		'data_dimissione' => '',
		'terapista' => '',
		'data_sospensione' => '',
		'data_riattivazione' => '',
		'motivo_sospensione' => '',
		'note' => '',
		'valutazione' => '',
		'trattamento1' => '',
		'diagnosi' => '',
		'medico_interno' => '',
		'visita_urgente' => '',
		'indirizzo' => '',
		'paziente_asa' => '',
		'ptda' => '',
		'data_segnalazione_pdta' => '',
		'luogo_di_nascita' => '',
		'localita' => '',
		'nro_telefono' => '',
		'riserva1' => '',
		'riserva2' => '',
		'riserva3' => '',
		'riserva4' => '',
		'ultima_modifica' => '',
		'escludi' => '',
		'dimissione_ospedaliera' => '',
		'siglaprodotto' => '',
		'Tipologia' => '' 
	),
	'fieldPlaceholders' => array(
		'id_impegnativa' => '',
		'cognome_e_nome' => '',
		'id_utente' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'et__evolutiva_o_adulto' => '',
		'settore' => '',
		'privato' => '',
		'codice_fim' => '',
		'codice_patologia' => '',
		'data_imp' => '',
		'medico_inviante' => '',
		'sigla_cliente' => '',
		'protocollo' => '',
		'anno' => '',
		'idprodotto' => '',
		'quantita' => '',
		'scadenza_impegnativa' => '',
		'attesa' => '',
		'trattamento' => '',
		'dimesso' => '',
		'data_inizio_trattamento' => '',
		'data_dimissione' => '',
		'terapista' => '',
		'data_sospensione' => '',
		'data_riattivazione' => '',
		'motivo_sospensione' => '',
		'note' => '',
		'valutazione' => '',
		'trattamento1' => '',
		'diagnosi' => '',
		'medico_interno' => '',
		'visita_urgente' => '',
		'indirizzo' => '',
		'paziente_asa' => '',
		'ptda' => '',
		'data_segnalazione_pdta' => '',
		'luogo_di_nascita' => '',
		'localita' => '',
		'nro_telefono' => '',
		'riserva1' => '',
		'riserva2' => '',
		'riserva3' => '',
		'riserva4' => '',
		'ultima_modifica' => '',
		'escludi' => '',
		'dimissione_ospedaliera' => '',
		'siglaprodotto' => '',
		'Tipologia' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>