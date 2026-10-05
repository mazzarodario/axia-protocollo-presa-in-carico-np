<?php
global $runnerTableSettings;
$runnerTableSettings['affidamenti_np'] = array(
	'name' => 'affidamenti_np',
	'shortName' => 'affidamenti_np',
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
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'affidamenti_np',
	'afterAddDetail' => 'affidamenti_np',
	'detailsBadgeColor' => 'e8926f',
	'strOrderBy' => 'ORDER BY
	id_affidamento DESC',
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'id_affidamento' 
		) 
	),
	'sql' => 'SELECT
	id_affidamento,
	data_richiesta,
	utente_richiesta,
	cognome_e_nome,
	data_di_nascita,
	sesso,
	eta_evolutiva_o_adulta,
	settore,
	distretto,
	recapito,
	idprodotto,
	tipo_valutazione,
	terapista,
	mail_terapista,
	note,
	mail_inviata_il,
	id_utente,
	data_abbinamento,
	ultima_modifica
FROM
	affidamenti_np
ORDER BY
	id_affidamento DESC
',
	'keyFields' => array( 
		'id_affidamento' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id_affidamento' => array(
			'name' => 'id_affidamento',
			'goodName' => 'id_affidamento',
			'strField' => 'id_affidamento',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id_affidamento',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'data_richiesta' => array(
			'name' => 'data_richiesta',
			'goodName' => 'data_richiesta',
			'strField' => 'data_richiesta',
			'index' => 2,
			'type' => 135,
			'sqlExpression' => 'data_richiesta',
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
			'tableName' => 'affidamenti_np' 
		),
		'utente_richiesta' => array(
			'name' => 'utente_richiesta',
			'goodName' => 'utente_richiesta',
			'strField' => 'utente_richiesta',
			'index' => 3,
			'sqlExpression' => 'utente_richiesta',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'cognome_e_nome' => array(
			'name' => 'cognome_e_nome',
			'goodName' => 'cognome_e_nome',
			'strField' => 'cognome_e_nome',
			'index' => 4,
			'sqlExpression' => 'cognome_e_nome',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'data_di_nascita' => array(
			'name' => 'data_di_nascita',
			'goodName' => 'data_di_nascita',
			'strField' => 'data_di_nascita',
			'index' => 5,
			'type' => 7,
			'sqlExpression' => 'data_di_nascita',
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
			'tableName' => 'affidamenti_np' 
		),
		'sesso' => array(
			'name' => 'sesso',
			'goodName' => 'sesso',
			'strField' => 'sesso',
			'index' => 6,
			'type' => 129,
			'sqlExpression' => 'sesso',
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
			'tableName' => 'affidamenti_np' 
		),
		'eta_evolutiva_o_adulta' => array(
			'name' => 'eta_evolutiva_o_adulta',
			'goodName' => 'eta_evolutiva_o_adulta',
			'strField' => 'eta_evolutiva_o_adulta',
			'index' => 7,
			'type' => 129,
			'sqlExpression' => 'eta_evolutiva_o_adulta',
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
			'tableName' => 'affidamenti_np' 
		),
		'settore' => array(
			'name' => 'settore',
			'goodName' => 'settore',
			'strField' => 'settore',
			'index' => 8,
			'type' => 129,
			'sqlExpression' => 'settore',
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
			'tableName' => 'affidamenti_np' 
		),
		'distretto' => array(
			'name' => 'distretto',
			'goodName' => 'distretto',
			'strField' => 'distretto',
			'index' => 9,
			'sqlExpression' => 'distretto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'recapito' => array(
			'name' => 'recapito',
			'goodName' => 'recapito',
			'strField' => 'recapito',
			'index' => 10,
			'sqlExpression' => 'recapito',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'idprodotto' => array(
			'name' => 'idprodotto',
			'goodName' => 'idprodotto',
			'strField' => 'idprodotto',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'idprodotto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'tipo_valutazione' => array(
			'name' => 'tipo_valutazione',
			'goodName' => 'tipo_valutazione',
			'strField' => 'tipo_valutazione',
			'index' => 12,
			'sqlExpression' => 'tipo_valutazione',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'terapista' => array(
			'name' => 'terapista',
			'goodName' => 'terapista',
			'strField' => 'terapista',
			'index' => 13,
			'sqlExpression' => 'terapista',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'mail_terapista' => array(
			'name' => 'mail_terapista',
			'goodName' => 'mail_terapista',
			'strField' => 'mail_terapista',
			'index' => 14,
			'sqlExpression' => 'mail_terapista',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'note' => array(
			'name' => 'note',
			'goodName' => 'note',
			'strField' => 'note',
			'index' => 15,
			'type' => 201,
			'sqlExpression' => 'note',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'mail_inviata_il' => array(
			'name' => 'mail_inviata_il',
			'goodName' => 'mail_inviata_il',
			'strField' => 'mail_inviata_il',
			'index' => 16,
			'type' => 135,
			'sqlExpression' => 'mail_inviata_il',
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
			'tableName' => 'affidamenti_np' 
		),
		'id_utente' => array(
			'name' => 'id_utente',
			'goodName' => 'id_utente',
			'strField' => 'id_utente',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'id_utente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'affidamenti_np' 
		),
		'data_abbinamento' => array(
			'name' => 'data_abbinamento',
			'goodName' => 'data_abbinamento',
			'strField' => 'data_abbinamento',
			'index' => 18,
			'type' => 135,
			'sqlExpression' => 'data_abbinamento',
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
			'tableName' => 'affidamenti_np' 
		),
		'ultima_modifica' => array(
			'name' => 'ultima_modifica',
			'goodName' => 'ultima_modifica',
			'strField' => 'ultima_modifica',
			'index' => 19,
			'type' => 135,
			'sqlExpression' => 'ultima_modifica',
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
			'tableName' => 'affidamenti_np' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id_affidamento,
	data_richiesta,
	utente_richiesta,
	cognome_e_nome,
	data_di_nascita,
	sesso,
	eta_evolutiva_o_adulta,
	settore,
	distretto,
	recapito,
	idprodotto,
	tipo_valutazione,
	terapista,
	mail_terapista,
	note,
	mail_inviata_il,
	id_utente,
	data_abbinamento,
	ultima_modifica
FROM
	affidamenti_np
ORDER BY
	id_affidamento DESC
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id_affidamento',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'id_affidamento' 
				),
				'encrypted' => false,
				'columnName' => 'id_affidamento' 
			),
			array(
				'sql' => 'data_richiesta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'data_richiesta' 
				),
				'encrypted' => false,
				'columnName' => 'data_richiesta' 
			),
			array(
				'sql' => 'utente_richiesta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'utente_richiesta' 
				),
				'encrypted' => false,
				'columnName' => 'utente_richiesta' 
			),
			array(
				'sql' => 'cognome_e_nome',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'cognome_e_nome' 
				),
				'encrypted' => false,
				'columnName' => 'cognome_e_nome' 
			),
			array(
				'sql' => 'data_di_nascita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'data_di_nascita' 
				),
				'encrypted' => false,
				'columnName' => 'data_di_nascita' 
			),
			array(
				'sql' => 'sesso',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'sesso' 
				),
				'encrypted' => false,
				'columnName' => 'sesso' 
			),
			array(
				'sql' => 'eta_evolutiva_o_adulta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'eta_evolutiva_o_adulta' 
				),
				'encrypted' => false,
				'columnName' => 'eta_evolutiva_o_adulta' 
			),
			array(
				'sql' => 'settore',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'settore' 
				),
				'encrypted' => false,
				'columnName' => 'settore' 
			),
			array(
				'sql' => 'distretto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'distretto' 
				),
				'encrypted' => false,
				'columnName' => 'distretto' 
			),
			array(
				'sql' => 'recapito',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'recapito' 
				),
				'encrypted' => false,
				'columnName' => 'recapito' 
			),
			array(
				'sql' => 'idprodotto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'idprodotto' 
				),
				'encrypted' => false,
				'columnName' => 'idprodotto' 
			),
			array(
				'sql' => 'tipo_valutazione',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'tipo_valutazione' 
				),
				'encrypted' => false,
				'columnName' => 'tipo_valutazione' 
			),
			array(
				'sql' => 'terapista',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'terapista' 
				),
				'encrypted' => false,
				'columnName' => 'terapista' 
			),
			array(
				'sql' => 'mail_terapista',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'mail_terapista' 
				),
				'encrypted' => false,
				'columnName' => 'mail_terapista' 
			),
			array(
				'sql' => 'note',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'note' 
				),
				'encrypted' => false,
				'columnName' => 'note' 
			),
			array(
				'sql' => 'mail_inviata_il',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'mail_inviata_il' 
				),
				'encrypted' => false,
				'columnName' => 'mail_inviata_il' 
			),
			array(
				'sql' => 'id_utente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'id_utente' 
				),
				'encrypted' => false,
				'columnName' => 'id_utente' 
			),
			array(
				'sql' => 'data_abbinamento',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'data_abbinamento' 
				),
				'encrypted' => false,
				'columnName' => 'data_abbinamento' 
			),
			array(
				'sql' => 'ultima_modifica',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'ultima_modifica' 
				),
				'encrypted' => false,
				'columnName' => 'ultima_modifica' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'affidamenti_np',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'affidamenti_np',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id_affidamento',
						'data_richiesta',
						'utente_richiesta',
						'cognome_e_nome',
						'data_di_nascita',
						'sesso',
						'eta_evolutiva_o_adulta',
						'settore',
						'distretto',
						'recapito',
						'idprodotto',
						'tipo_valutazione',
						'terapista',
						'mail_terapista',
						'note',
						'mail_inviata_il',
						'id_utente',
						'data_abbinamento',
						'ultima_modifica' 
					),
					'name' => 'affidamenti_np' 
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
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
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
				'sql' => 'id_affidamento DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'affidamenti_np',
					'name' => 'id_affidamento' 
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
				'whereIndex' => -1,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id_affidamento,
	data_richiesta,
	utente_richiesta,
	cognome_e_nome,
	data_di_nascita,
	sesso,
	eta_evolutiva_o_adulta,
	settore,
	distretto,
	recapito,
	idprodotto,
	tipo_valutazione,
	terapista,
	mail_terapista,
	note,
	mail_inviata_il,
	id_utente,
	data_abbinamento,
	ultima_modifica',
		'fromListSql' => 'FROM
	affidamenti_np',
		'orderBySql' => 'ORDER BY
	id_affidamento DESC',
		'tailSql' => '' 
	),
	'originalTable' => 'affidamenti_np',
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
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id_affidamento',
			'data_richiesta',
			'utente_richiesta',
			'cognome_e_nome',
			'data_di_nascita',
			'sesso',
			'eta_evolutiva_o_adulta',
			'settore',
			'distretto',
			'recapito',
			'idprodotto',
			'tipo_valutazione',
			'terapista',
			'mail_terapista',
			'note',
			'mail_inviata_il',
			'id_utente',
			'data_abbinamento',
			'ultima_modifica' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id_affidamento',
			'data_richiesta',
			'utente_richiesta',
			'cognome_e_nome',
			'data_di_nascita',
			'sesso',
			'eta_evolutiva_o_adulta',
			'settore',
			'distretto',
			'recapito',
			'idprodotto',
			'tipo_valutazione',
			'terapista',
			'mail_terapista',
			'note',
			'mail_inviata_il',
			'id_utente',
			'data_abbinamento',
			'ultima_modifica' 
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
	$runnerTableLabels['affidamenti_np'] = array(
	'tableCaption' => 'Affidamenti Np',
	'fieldLabels' => array(
		'id_affidamento' => 'Id Affidamento',
		'data_richiesta' => 'Data Richiesta',
		'utente_richiesta' => 'Utente Richiesta',
		'cognome_e_nome' => 'Cognome E Nome',
		'data_di_nascita' => 'Data Di Nascita',
		'sesso' => 'Sesso',
		'eta_evolutiva_o_adulta' => 'Eta Evolutiva O Adulta',
		'settore' => 'Settore',
		'distretto' => 'Distretto',
		'recapito' => 'Recapito',
		'idprodotto' => 'Idprodotto',
		'tipo_valutazione' => 'Tipo Valutazione',
		'terapista' => 'Terapista',
		'mail_terapista' => 'Mail Terapista',
		'note' => 'Note',
		'mail_inviata_il' => 'Mail Inviata Il',
		'id_utente' => 'Id Utente',
		'data_abbinamento' => 'Data Abbinamento',
		'ultima_modifica' => 'Ultima Modifica' 
	),
	'fieldTooltips' => array(
		'id_affidamento' => '',
		'data_richiesta' => '',
		'utente_richiesta' => '',
		'cognome_e_nome' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'eta_evolutiva_o_adulta' => '',
		'settore' => '',
		'distretto' => '',
		'recapito' => '',
		'idprodotto' => '',
		'tipo_valutazione' => '',
		'terapista' => '',
		'mail_terapista' => '',
		'note' => '',
		'mail_inviata_il' => '',
		'id_utente' => '',
		'data_abbinamento' => '',
		'ultima_modifica' => '' 
	),
	'fieldPlaceholders' => array(
		'id_affidamento' => '',
		'data_richiesta' => '',
		'utente_richiesta' => '',
		'cognome_e_nome' => '',
		'data_di_nascita' => '',
		'sesso' => '',
		'eta_evolutiva_o_adulta' => '',
		'settore' => '',
		'distretto' => '',
		'recapito' => '',
		'idprodotto' => '',
		'tipo_valutazione' => '',
		'terapista' => '',
		'mail_terapista' => '',
		'note' => '',
		'mail_inviata_il' => '',
		'id_utente' => '',
		'data_abbinamento' => '',
		'ultima_modifica' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>