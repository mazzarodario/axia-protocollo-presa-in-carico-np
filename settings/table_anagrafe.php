<?php
global $runnerTableSettings;
$runnerTableSettings['anagrafe'] = array(
	'name' => 'anagrafe',
	'shortName' => 'anagrafe',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
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
		'edit' => 'edit',
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
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'afterEditDetails' => 'anagrafe',
	'afterAddDetail' => 'anagrafe',
	'detailsBadgeColor' => '9acd32',
	'strOrderBy' => 'ORDER BY
	anagrafe.id_utente DESC',
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id_utente' 
		) 
	),
	'sql' => 'SELECT
	anagrafe.id_utente,
	anagrafe.cognome_e_nome,
	anagrafe.privato,
	anagrafe.data_di_nascita,
	anagrafe.sesso,
	anagrafe.settore,
	anagrafe.eta_evolutiva_o_adulta,
	anagrafe.codice_fim,
	anagrafe.codice_patologia_np,
	anagrafe.patologia,
	anagrafe.luogo_di_nascita_intestatario,
	anagrafe.distretto,
	anagrafe.indirizzo,
	anagrafe.nro_telefono,
	anagrafe.altri_recapiti,
	anagrafe.localita,
	anagrafe.codice_fiscale,
	anagrafe.intestatario_fattura,
	anagrafe.luogo_di_nascita_paziente,
	anagrafe.data_nascita_intestatario,
	anagrafe.indirizzo_int,
	anagrafe.localita_int,
	anagrafe.telefono_int,
	anagrafe.codice_fiscale_int,
	anagrafe.e_mail,
	anagrafe.paziente_asa,
	anagrafe.anno,
	anagrafe.riserva1,
	anagrafe.riserva2,
	anagrafe.riserva3,
	anagrafe.riserva4,
	anagrafe.ultima_modifica,
	primocolloqio.Operatore
FROM
	anagrafe
	INNER JOIN primocolloqio ON primocolloqio.Paziente = anagrafe.cognome_e_nome
WHERE
anagrafe.id_utente >43510
ORDER BY
	anagrafe.id_utente DESC
',
	'keyFields' => array( 
		'id_utente' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id_utente' => array(
			'name' => 'id_utente',
			'goodName' => 'id_utente',
			'strField' => 'id_utente',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'anagrafe.id_utente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'cognome_e_nome' => array(
			'name' => 'cognome_e_nome',
			'goodName' => 'cognome_e_nome',
			'strField' => 'cognome_e_nome',
			'index' => 2,
			'sqlExpression' => 'anagrafe.cognome_e_nome',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'anagrafe',
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
			'tableName' => 'anagrafe',
			'viewLinkTable' => 'anagrafe',
			'viewLinkLookup' => true 
		),
		'privato' => array(
			'name' => 'privato',
			'goodName' => 'privato',
			'strField' => 'privato',
			'index' => 3,
			'sqlExpression' => 'anagrafe.privato',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'data_di_nascita' => array(
			'name' => 'data_di_nascita',
			'goodName' => 'data_di_nascita',
			'strField' => 'data_di_nascita',
			'index' => 4,
			'type' => 135,
			'sqlExpression' => 'anagrafe.data_di_nascita',
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
			'tableName' => 'anagrafe' 
		),
		'sesso' => array(
			'name' => 'sesso',
			'goodName' => 'sesso',
			'strField' => 'sesso',
			'index' => 5,
			'type' => 129,
			'sqlExpression' => 'anagrafe.sesso',
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
			'tableName' => 'anagrafe' 
		),
		'settore' => array(
			'name' => 'settore',
			'goodName' => 'settore',
			'strField' => 'settore',
			'index' => 6,
			'type' => 129,
			'sqlExpression' => 'anagrafe.settore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'NM',
						'NP',
						'PM' 
					) 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'eta_evolutiva_o_adulta' => array(
			'name' => 'eta_evolutiva_o_adulta',
			'goodName' => 'eta_evolutiva_o_adulta',
			'strField' => 'eta_evolutiva_o_adulta',
			'index' => 7,
			'type' => 129,
			'sqlExpression' => 'anagrafe.eta_evolutiva_o_adulta',
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
			'tableName' => 'anagrafe' 
		),
		'codice_fim' => array(
			'name' => 'codice_fim',
			'goodName' => 'codice_fim',
			'strField' => 'codice_fim',
			'index' => 8,
			'sqlExpression' => 'anagrafe.codice_fim',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'codice_patologia_np' => array(
			'name' => 'codice_patologia_np',
			'goodName' => 'codice_patologia_np',
			'strField' => 'codice_patologia_np',
			'index' => 9,
			'sqlExpression' => 'anagrafe.codice_patologia_np',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'patologia' => array(
			'name' => 'patologia',
			'goodName' => 'patologia',
			'strField' => 'patologia',
			'index' => 10,
			'sqlExpression' => 'anagrafe.patologia',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'luogo_di_nascita_intestatario' => array(
			'name' => 'luogo_di_nascita_intestatario',
			'goodName' => 'luogo_di_nascita_intestatario',
			'strField' => 'luogo_di_nascita_intestatario',
			'index' => 11,
			'sqlExpression' => 'anagrafe.luogo_di_nascita_intestatario',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'distretto' => array(
			'name' => 'distretto',
			'goodName' => 'distretto',
			'strField' => 'distretto',
			'index' => 12,
			'sqlExpression' => 'anagrafe.distretto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'indirizzo' => array(
			'name' => 'indirizzo',
			'goodName' => 'indirizzo',
			'strField' => 'indirizzo',
			'index' => 13,
			'sqlExpression' => 'anagrafe.indirizzo',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'nro_telefono' => array(
			'name' => 'nro_telefono',
			'goodName' => 'nro_telefono',
			'strField' => 'nro_telefono',
			'index' => 14,
			'sqlExpression' => 'anagrafe.nro_telefono',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'altri_recapiti' => array(
			'name' => 'altri_recapiti',
			'goodName' => 'altri_recapiti',
			'strField' => 'altri_recapiti',
			'index' => 15,
			'sqlExpression' => 'anagrafe.altri_recapiti',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'localita' => array(
			'name' => 'localita',
			'goodName' => 'localita',
			'strField' => 'localita',
			'index' => 16,
			'sqlExpression' => 'anagrafe.localita',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'codice_fiscale' => array(
			'name' => 'codice_fiscale',
			'goodName' => 'codice_fiscale',
			'strField' => 'codice_fiscale',
			'index' => 17,
			'sqlExpression' => 'anagrafe.codice_fiscale',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'intestatario_fattura' => array(
			'name' => 'intestatario_fattura',
			'goodName' => 'intestatario_fattura',
			'strField' => 'intestatario_fattura',
			'index' => 18,
			'sqlExpression' => 'anagrafe.intestatario_fattura',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'luogo_di_nascita_paziente' => array(
			'name' => 'luogo_di_nascita_paziente',
			'goodName' => 'luogo_di_nascita_paziente',
			'strField' => 'luogo_di_nascita_paziente',
			'index' => 19,
			'sqlExpression' => 'anagrafe.luogo_di_nascita_paziente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'data_nascita_intestatario' => array(
			'name' => 'data_nascita_intestatario',
			'goodName' => 'data_nascita_intestatario',
			'strField' => 'data_nascita_intestatario',
			'index' => 20,
			'type' => 135,
			'sqlExpression' => 'anagrafe.data_nascita_intestatario',
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
			'tableName' => 'anagrafe' 
		),
		'indirizzo_int' => array(
			'name' => 'indirizzo_int',
			'goodName' => 'indirizzo_int',
			'strField' => 'indirizzo_int',
			'index' => 21,
			'sqlExpression' => 'anagrafe.indirizzo_int',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'localita_int' => array(
			'name' => 'localita_int',
			'goodName' => 'localita_int',
			'strField' => 'localita_int',
			'index' => 22,
			'sqlExpression' => 'anagrafe.localita_int',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'telefono_int' => array(
			'name' => 'telefono_int',
			'goodName' => 'telefono_int',
			'strField' => 'telefono_int',
			'index' => 23,
			'sqlExpression' => 'anagrafe.telefono_int',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'codice_fiscale_int' => array(
			'name' => 'codice_fiscale_int',
			'goodName' => 'codice_fiscale_int',
			'strField' => 'codice_fiscale_int',
			'index' => 24,
			'sqlExpression' => 'anagrafe.codice_fiscale_int',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'e_mail' => array(
			'name' => 'e_mail',
			'goodName' => 'e_mail',
			'strField' => 'e_mail',
			'index' => 25,
			'sqlExpression' => 'anagrafe.e_mail',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'paziente_asa' => array(
			'name' => 'paziente_asa',
			'goodName' => 'paziente_asa',
			'strField' => 'paziente_asa',
			'index' => 26,
			'sqlExpression' => 'anagrafe.paziente_asa',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'anno' => array(
			'name' => 'anno',
			'goodName' => 'anno',
			'strField' => 'anno',
			'index' => 27,
			'type' => 3,
			'sqlExpression' => 'anagrafe.anno',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'riserva1' => array(
			'name' => 'riserva1',
			'goodName' => 'riserva1',
			'strField' => 'riserva1',
			'index' => 28,
			'type' => 201,
			'sqlExpression' => 'anagrafe.riserva1',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'riserva2' => array(
			'name' => 'riserva2',
			'goodName' => 'riserva2',
			'strField' => 'riserva2',
			'index' => 29,
			'sqlExpression' => 'anagrafe.riserva2',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'riserva3' => array(
			'name' => 'riserva3',
			'goodName' => 'riserva3',
			'strField' => 'riserva3',
			'index' => 30,
			'type' => 135,
			'sqlExpression' => 'anagrafe.riserva3',
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
			'tableName' => 'anagrafe' 
		),
		'riserva4' => array(
			'name' => 'riserva4',
			'goodName' => 'riserva4',
			'strField' => 'riserva4',
			'index' => 31,
			'type' => 3,
			'sqlExpression' => 'anagrafe.riserva4',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'anagrafe' 
		),
		'ultima_modifica' => array(
			'name' => 'ultima_modifica',
			'goodName' => 'ultima_modifica',
			'strField' => 'ultima_modifica',
			'index' => 32,
			'type' => 135,
			'sqlExpression' => 'anagrafe.ultima_modifica',
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
			'tableName' => 'anagrafe' 
		),
		'Operatore' => array(
			'name' => 'Operatore',
			'goodName' => 'Operatore',
			'strField' => 'Operatore',
			'index' => 33,
			'sqlExpression' => 'primocolloqio.Operatore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'primocolloqio' 
		) 
	),
	'detailsTables' => array( 
		'impegnative',
		'privacy_adulto',
		'privacy_bambino',
		'primocolloqio' 
	),
	'query' => array(
		'sql' => 'SELECT
	anagrafe.id_utente,
	anagrafe.cognome_e_nome,
	anagrafe.privato,
	anagrafe.data_di_nascita,
	anagrafe.sesso,
	anagrafe.settore,
	anagrafe.eta_evolutiva_o_adulta,
	anagrafe.codice_fim,
	anagrafe.codice_patologia_np,
	anagrafe.patologia,
	anagrafe.luogo_di_nascita_intestatario,
	anagrafe.distretto,
	anagrafe.indirizzo,
	anagrafe.nro_telefono,
	anagrafe.altri_recapiti,
	anagrafe.localita,
	anagrafe.codice_fiscale,
	anagrafe.intestatario_fattura,
	anagrafe.luogo_di_nascita_paziente,
	anagrafe.data_nascita_intestatario,
	anagrafe.indirizzo_int,
	anagrafe.localita_int,
	anagrafe.telefono_int,
	anagrafe.codice_fiscale_int,
	anagrafe.e_mail,
	anagrafe.paziente_asa,
	anagrafe.anno,
	anagrafe.riserva1,
	anagrafe.riserva2,
	anagrafe.riserva3,
	anagrafe.riserva4,
	anagrafe.ultima_modifica,
	primocolloqio.Operatore
FROM
	anagrafe
	INNER JOIN primocolloqio ON primocolloqio.Paziente = anagrafe.cognome_e_nome
WHERE
anagrafe.id_utente >43510
ORDER BY
	anagrafe.id_utente DESC
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'anagrafe.id_utente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'id_utente' 
				),
				'encrypted' => false,
				'columnName' => 'id_utente' 
			),
			array(
				'sql' => 'anagrafe.cognome_e_nome',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'cognome_e_nome' 
				),
				'encrypted' => false,
				'columnName' => 'cognome_e_nome' 
			),
			array(
				'sql' => 'anagrafe.privato',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'privato' 
				),
				'encrypted' => false,
				'columnName' => 'privato' 
			),
			array(
				'sql' => 'anagrafe.data_di_nascita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'data_di_nascita' 
				),
				'encrypted' => false,
				'columnName' => 'data_di_nascita' 
			),
			array(
				'sql' => 'anagrafe.sesso',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'sesso' 
				),
				'encrypted' => false,
				'columnName' => 'sesso' 
			),
			array(
				'sql' => 'anagrafe.settore',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'settore' 
				),
				'encrypted' => false,
				'columnName' => 'settore' 
			),
			array(
				'sql' => 'anagrafe.eta_evolutiva_o_adulta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'eta_evolutiva_o_adulta' 
				),
				'encrypted' => false,
				'columnName' => 'eta_evolutiva_o_adulta' 
			),
			array(
				'sql' => 'anagrafe.codice_fim',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'codice_fim' 
				),
				'encrypted' => false,
				'columnName' => 'codice_fim' 
			),
			array(
				'sql' => 'anagrafe.codice_patologia_np',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'codice_patologia_np' 
				),
				'encrypted' => false,
				'columnName' => 'codice_patologia_np' 
			),
			array(
				'sql' => 'anagrafe.patologia',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'patologia' 
				),
				'encrypted' => false,
				'columnName' => 'patologia' 
			),
			array(
				'sql' => 'anagrafe.luogo_di_nascita_intestatario',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'luogo_di_nascita_intestatario' 
				),
				'encrypted' => false,
				'columnName' => 'luogo_di_nascita_intestatario' 
			),
			array(
				'sql' => 'anagrafe.distretto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'distretto' 
				),
				'encrypted' => false,
				'columnName' => 'distretto' 
			),
			array(
				'sql' => 'anagrafe.indirizzo',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'indirizzo' 
				),
				'encrypted' => false,
				'columnName' => 'indirizzo' 
			),
			array(
				'sql' => 'anagrafe.nro_telefono',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'nro_telefono' 
				),
				'encrypted' => false,
				'columnName' => 'nro_telefono' 
			),
			array(
				'sql' => 'anagrafe.altri_recapiti',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'altri_recapiti' 
				),
				'encrypted' => false,
				'columnName' => 'altri_recapiti' 
			),
			array(
				'sql' => 'anagrafe.localita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'localita' 
				),
				'encrypted' => false,
				'columnName' => 'localita' 
			),
			array(
				'sql' => 'anagrafe.codice_fiscale',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'codice_fiscale' 
				),
				'encrypted' => false,
				'columnName' => 'codice_fiscale' 
			),
			array(
				'sql' => 'anagrafe.intestatario_fattura',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'intestatario_fattura' 
				),
				'encrypted' => false,
				'columnName' => 'intestatario_fattura' 
			),
			array(
				'sql' => 'anagrafe.luogo_di_nascita_paziente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'luogo_di_nascita_paziente' 
				),
				'encrypted' => false,
				'columnName' => 'luogo_di_nascita_paziente' 
			),
			array(
				'sql' => 'anagrafe.data_nascita_intestatario',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'data_nascita_intestatario' 
				),
				'encrypted' => false,
				'columnName' => 'data_nascita_intestatario' 
			),
			array(
				'sql' => 'anagrafe.indirizzo_int',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'indirizzo_int' 
				),
				'encrypted' => false,
				'columnName' => 'indirizzo_int' 
			),
			array(
				'sql' => 'anagrafe.localita_int',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'localita_int' 
				),
				'encrypted' => false,
				'columnName' => 'localita_int' 
			),
			array(
				'sql' => 'anagrafe.telefono_int',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'telefono_int' 
				),
				'encrypted' => false,
				'columnName' => 'telefono_int' 
			),
			array(
				'sql' => 'anagrafe.codice_fiscale_int',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'codice_fiscale_int' 
				),
				'encrypted' => false,
				'columnName' => 'codice_fiscale_int' 
			),
			array(
				'sql' => 'anagrafe.e_mail',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'e_mail' 
				),
				'encrypted' => false,
				'columnName' => 'e_mail' 
			),
			array(
				'sql' => 'anagrafe.paziente_asa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'paziente_asa' 
				),
				'encrypted' => false,
				'columnName' => 'paziente_asa' 
			),
			array(
				'sql' => 'anagrafe.anno',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'anno' 
				),
				'encrypted' => false,
				'columnName' => 'anno' 
			),
			array(
				'sql' => 'anagrafe.riserva1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'riserva1' 
				),
				'encrypted' => false,
				'columnName' => 'riserva1' 
			),
			array(
				'sql' => 'anagrafe.riserva2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'riserva2' 
				),
				'encrypted' => false,
				'columnName' => 'riserva2' 
			),
			array(
				'sql' => 'anagrafe.riserva3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'riserva3' 
				),
				'encrypted' => false,
				'columnName' => 'riserva3' 
			),
			array(
				'sql' => 'anagrafe.riserva4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'riserva4' 
				),
				'encrypted' => false,
				'columnName' => 'riserva4' 
			),
			array(
				'sql' => 'anagrafe.ultima_modifica',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'ultima_modifica' 
				),
				'encrypted' => false,
				'columnName' => 'ultima_modifica' 
			),
			array(
				'sql' => 'primocolloqio.Operatore',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Operatore' 
				),
				'encrypted' => false,
				'columnName' => 'Operatore' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'anagrafe',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'anagrafe',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id_utente',
						'cognome_e_nome',
						'privato',
						'data_di_nascita',
						'sesso',
						'settore',
						'eta_evolutiva_o_adulta',
						'codice_fim',
						'codice_patologia_np',
						'patologia',
						'luogo_di_nascita_intestatario',
						'distretto',
						'indirizzo',
						'nro_telefono',
						'altri_recapiti',
						'localita',
						'codice_fiscale',
						'intestatario_fattura',
						'luogo_di_nascita_paziente',
						'data_nascita_intestatario',
						'indirizzo_int',
						'localita_int',
						'telefono_int',
						'codice_fiscale_int',
						'e_mail',
						'paziente_asa',
						'anno',
						'riserva1',
						'riserva2',
						'riserva3',
						'riserva4',
						'ultima_modifica' 
					),
					'name' => 'anagrafe' 
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
				'sql' => 'INNER JOIN primocolloqio ON primocolloqio.Paziente = anagrafe.cognome_e_nome',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'primocolloqio',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'Operatore',
						'Data Primo Colloquio',
						'Paziente',
						'Data Nascita',
						'Eta',
						'Inviante',
						'Motivi_Invio',
						'FRATRIA',
						'ADOZIONE',
						'ETA ADOZIONE',
						'GRAVIDANZA',
						'PESO_PARTO',
						'APGAR',
						'PROBLEMATICHE ALLA NASCITA',
						'ALLATTAMENTO',
						'RIENTRO A DOMICILIO',
						'CONDIZIONI EMOTIVE DELLA MADRE',
						'RETE FAMILIARE',
						'CAREGIVER SIGNIFICATIO',
						'CRESCITA PONDERALE',
						'ALIMENTAZIONE',
						'RITMO SONNO_VEGLIA',
						'LALLAZIONE',
						'COMUNICAZIONE NON VERBALE',
						'GATTONAMENTO',
						'DEAMBULAZIONE',
						'PRIME PAROLE',
						'LINGUAGGIO',
						'SVILUPPO PSICOMOTORIO',
						'COMPETENZE RELAZIONALI',
						'CONTROLLO DEGLI SFINTERI',
						'ROUTINE DI ADDORMENTAMENTO',
						'NIDO',
						'MATERNA',
						'ELEMENTARI',
						'ALTRO',
						'ESITI ESAMI STRUMENTALI',
						'INTERVENTI RIABILITATIVI PREGRESSI',
						'ANAMNESI FAMILIARE',
						'DINAMICHE RELAZIONALI SIGNIFICATIVE',
						'NOTE' 
					),
					'name' => 'primocolloqio' 
				),
				'joinOn' => array(
					'sql' => 'primocolloqio.Paziente = anagrafe.cognome_e_nome',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'primocolloqio',
						'name' => 'Paziente' 
					),
					'case' => '= anagrafe.cognome_e_nome',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'primocolloqio.Paziente = anagrafe.cognome_e_nome',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'primocolloqio',
							'name' => 'Paziente' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'anagrafe',
							'name' => 'cognome_e_nome' 
						) 
					) 
				),
				'link' => 1 
			) 
		),
		'where' => array(
			'sql' => 'anagrafe.id_utente >43510',
			'parsed' => true,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => array(
				'sql' => '',
				'parsed' => true,
				'type' => 'SQLField',
				'table' => 'anagrafe',
				'name' => 'id_utente' 
			),
			'case' => '>43510',
			'useAlias' => false 
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
				'sql' => 'anagrafe.id_utente DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'anagrafe',
					'name' => 'id_utente' 
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
				'whereIndex' => -1,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'anagrafe.id_utente,
	anagrafe.cognome_e_nome,
	anagrafe.privato,
	anagrafe.data_di_nascita,
	anagrafe.sesso,
	anagrafe.settore,
	anagrafe.eta_evolutiva_o_adulta,
	anagrafe.codice_fim,
	anagrafe.codice_patologia_np,
	anagrafe.patologia,
	anagrafe.luogo_di_nascita_intestatario,
	anagrafe.distretto,
	anagrafe.indirizzo,
	anagrafe.nro_telefono,
	anagrafe.altri_recapiti,
	anagrafe.localita,
	anagrafe.codice_fiscale,
	anagrafe.intestatario_fattura,
	anagrafe.luogo_di_nascita_paziente,
	anagrafe.data_nascita_intestatario,
	anagrafe.indirizzo_int,
	anagrafe.localita_int,
	anagrafe.telefono_int,
	anagrafe.codice_fiscale_int,
	anagrafe.e_mail,
	anagrafe.paziente_asa,
	anagrafe.anno,
	anagrafe.riserva1,
	anagrafe.riserva2,
	anagrafe.riserva3,
	anagrafe.riserva4,
	anagrafe.ultima_modifica,
	primocolloqio.Operatore',
		'fromListSql' => 'FROM
	anagrafe
	INNER JOIN primocolloqio ON primocolloqio.Paziente = anagrafe.cognome_e_nome',
		'whereSql' => 'anagrafe.id_utente >43510',
		'orderBySql' => 'ORDER BY
	anagrafe.id_utente DESC',
		'tailSql' => '' 
	),
	'originalTable' => 'anagrafe',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
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
		'edit' => 'edit',
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
		'edit' => 'edit',
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
			'id_utente',
			'cognome_e_nome',
			'privato',
			'data_di_nascita',
			'sesso',
			'settore',
			'eta_evolutiva_o_adulta',
			'codice_fim',
			'codice_patologia_np',
			'patologia',
			'luogo_di_nascita_intestatario',
			'distretto',
			'indirizzo',
			'nro_telefono',
			'altri_recapiti',
			'localita',
			'codice_fiscale',
			'intestatario_fattura',
			'luogo_di_nascita_paziente',
			'data_nascita_intestatario',
			'indirizzo_int',
			'localita_int',
			'telefono_int',
			'codice_fiscale_int',
			'e_mail',
			'paziente_asa',
			'anno',
			'riserva1',
			'riserva2',
			'riserva3',
			'riserva4',
			'ultima_modifica',
			'Operatore' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'Operatore' 
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
	$runnerTableLabels['anagrafe'] = array(
	'tableCaption' => 'Anagrafe',
	'fieldLabels' => array(
		'id_utente' => 'Id Utente',
		'cognome_e_nome' => 'Cognome E Nome',
		'privato' => 'Privato',
		'data_di_nascita' => 'Data Di Nascita',
		'sesso' => 'Sesso',
		'settore' => 'Settore',
		'eta_evolutiva_o_adulta' => 'Eta Evolutiva O Adulta',
		'codice_fim' => 'Codice Fim',
		'codice_patologia_np' => 'Codice Patologia Np',
		'patologia' => 'Patologia',
		'luogo_di_nascita_intestatario' => 'Luogo Di Nascita Intestatario',
		'distretto' => 'Distretto',
		'indirizzo' => 'Indirizzo',
		'nro_telefono' => 'Nro Telefono',
		'altri_recapiti' => 'Altri Recapiti',
		'localita' => 'Localita',
		'codice_fiscale' => 'Codice Fiscale',
		'intestatario_fattura' => 'Intestatario Fattura',
		'luogo_di_nascita_paziente' => 'Luogo Di Nascita Paziente',
		'data_nascita_intestatario' => 'Data Nascita Intestatario',
		'indirizzo_int' => 'Indirizzo Int',
		'localita_int' => 'Localita Int',
		'telefono_int' => 'Telefono Int',
		'codice_fiscale_int' => 'Codice Fiscale Int',
		'e_mail' => 'E Mail',
		'paziente_asa' => 'Paziente Asa',
		'anno' => 'Anno',
		'riserva1' => 'Riserva1',
		'riserva2' => 'Riserva2',
		'riserva3' => 'Riserva3',
		'riserva4' => 'Riserva4',
		'ultima_modifica' => 'Ultima Modifica',
		'Operatore' => 'Operatore' 
	),
	'fieldTooltips' => array(
		'id_utente' => '',
		'cognome_e_nome' => '',
		'privato' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'settore' => '',
		'eta_evolutiva_o_adulta' => '',
		'codice_fim' => '',
		'codice_patologia_np' => '',
		'patologia' => '',
		'luogo_di_nascita_intestatario' => '',
		'distretto' => '',
		'indirizzo' => '',
		'nro_telefono' => '',
		'altri_recapiti' => '',
		'localita' => '',
		'codice_fiscale' => '',
		'intestatario_fattura' => '',
		'luogo_di_nascita_paziente' => '',
		'data_nascita_intestatario' => '',
		'indirizzo_int' => '',
		'localita_int' => '',
		'telefono_int' => '',
		'codice_fiscale_int' => '',
		'e_mail' => '',
		'paziente_asa' => '',
		'anno' => '',
		'riserva1' => '',
		'riserva2' => '',
		'riserva3' => '',
		'riserva4' => '',
		'ultima_modifica' => '',
		'Operatore' => '' 
	),
	'fieldPlaceholders' => array(
		'id_utente' => '',
		'cognome_e_nome' => '',
		'privato' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'settore' => '',
		'eta_evolutiva_o_adulta' => '',
		'codice_fim' => '',
		'codice_patologia_np' => '',
		'patologia' => '',
		'luogo_di_nascita_intestatario' => '',
		'distretto' => '',
		'indirizzo' => '',
		'nro_telefono' => '',
		'altri_recapiti' => '',
		'localita' => '',
		'codice_fiscale' => '',
		'intestatario_fattura' => '',
		'luogo_di_nascita_paziente' => '',
		'data_nascita_intestatario' => '',
		'indirizzo_int' => '',
		'localita_int' => '',
		'telefono_int' => '',
		'codice_fiscale_int' => '',
		'e_mail' => '',
		'paziente_asa' => '',
		'anno' => '',
		'riserva1' => '',
		'riserva2' => '',
		'riserva3' => '',
		'riserva4' => '',
		'ultima_modifica' => '',
		'Operatore' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>