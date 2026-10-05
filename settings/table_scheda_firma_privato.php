<?php
global $runnerTableSettings;
$runnerTableSettings['scheda_firma_privato'] = array(
	'name' => 'scheda_firma_privato',
	'shortName' => 'scheda_firma_privato',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
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
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'scheda_firma_privato',
	'afterAddDetail' => 'scheda_firma_privato',
	'detailsBadgeColor' => 'cd853f',
	'sql' => 'SELECT
	id,
	progressivo,
	id_impegnativa,
	cognome_e_nome,
	anno,
	et__evolutiva_o_adulto,
	settore,
	sigla_cliente,
	privato,
	data_imp,
	data_firma,
	firma_paziente,
	idprodotto,
	quantita,
	terapista,
	concluso
FROM
	scheda_firma_privato
',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'progressivo' => array(
			'name' => 'progressivo',
			'goodName' => 'progressivo',
			'strField' => 'progressivo',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'progressivo',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'id_impegnativa' => array(
			'name' => 'id_impegnativa',
			'goodName' => 'id_impegnativa',
			'strField' => 'id_impegnativa',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'id_impegnativa',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato',
			'viewLinkTable' => 'impegnative',
			'viewLinkLookup' => false 
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
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'scheda_firma_privato',
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
			'tableName' => 'scheda_firma_privato',
			'viewLinkTable' => 'scheda_firma_privato',
			'viewLinkLookup' => true 
		),
		'anno' => array(
			'name' => 'anno',
			'goodName' => 'anno',
			'strField' => 'anno',
			'index' => 5,
			'sqlExpression' => 'anno',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'et__evolutiva_o_adulto' => array(
			'name' => 'et__evolutiva_o_adulto',
			'goodName' => 'et__evolutiva_o_adulto',
			'strField' => 'et__evolutiva_o_adulto',
			'index' => 6,
			'sqlExpression' => 'et__evolutiva_o_adulto',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'settore' => array(
			'name' => 'settore',
			'goodName' => 'settore',
			'strField' => 'settore',
			'index' => 7,
			'sqlExpression' => 'settore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'sigla_cliente' => array(
			'name' => 'sigla_cliente',
			'goodName' => 'sigla_cliente',
			'strField' => 'sigla_cliente',
			'index' => 8,
			'sqlExpression' => 'sigla_cliente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'privato' => array(
			'name' => 'privato',
			'goodName' => 'privato',
			'strField' => 'privato',
			'index' => 9,
			'sqlExpression' => 'privato',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'data_imp' => array(
			'name' => 'data_imp',
			'goodName' => 'data_imp',
			'strField' => 'data_imp',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'data_imp',
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
			'tableName' => 'scheda_firma_privato' 
		),
		'data_firma' => array(
			'name' => 'data_firma',
			'goodName' => 'data_firma',
			'strField' => 'data_firma',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'data_firma',
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
			'tableName' => 'scheda_firma_privato' 
		),
		'firma_paziente' => array(
			'name' => 'firma_paziente',
			'goodName' => 'firma_paziente',
			'strField' => 'firma_paziente',
			'index' => 12,
			'type' => 128,
			'sqlExpression' => 'firma_paziente',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Database Image' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Database image' 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'idprodotto' => array(
			'name' => 'idprodotto',
			'goodName' => 'idprodotto',
			'strField' => 'idprodotto',
			'index' => 13,
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
			'tableName' => 'scheda_firma_privato' 
		),
		'quantita' => array(
			'name' => 'quantita',
			'goodName' => 'quantita',
			'strField' => 'quantita',
			'index' => 14,
			'type' => 3,
			'sqlExpression' => 'quantita',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'terapista' => array(
			'name' => 'terapista',
			'goodName' => 'terapista',
			'strField' => 'terapista',
			'index' => 15,
			'sqlExpression' => 'terapista',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		),
		'concluso' => array(
			'name' => 'concluso',
			'goodName' => 'concluso',
			'strField' => 'concluso',
			'index' => 16,
			'sqlExpression' => 'concluso',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'scheda_firma_privato' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'impegnative',
			'detailsKeys' => array( 
				'id_impegnativa' 
			),
			'masterKeys' => array( 
				'id_impegnativa' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	progressivo,
	id_impegnativa,
	cognome_e_nome,
	anno,
	et__evolutiva_o_adulto,
	settore,
	sigla_cliente,
	privato,
	data_imp,
	data_firma,
	firma_paziente,
	idprodotto,
	quantita,
	terapista,
	concluso
FROM
	scheda_firma_privato
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'progressivo',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'progressivo' 
				),
				'encrypted' => false,
				'columnName' => 'progressivo' 
			),
			array(
				'sql' => 'id_impegnativa',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'id_impegnativa' 
				),
				'encrypted' => false,
				'columnName' => 'id_impegnativa' 
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
					'table' => 'scheda_firma_privato',
					'name' => 'cognome_e_nome' 
				),
				'encrypted' => false,
				'columnName' => 'cognome_e_nome' 
			),
			array(
				'sql' => 'anno',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'anno' 
				),
				'encrypted' => false,
				'columnName' => 'anno' 
			),
			array(
				'sql' => 'et__evolutiva_o_adulto',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'et__evolutiva_o_adulto' 
				),
				'encrypted' => false,
				'columnName' => 'et__evolutiva_o_adulto' 
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
					'table' => 'scheda_firma_privato',
					'name' => 'settore' 
				),
				'encrypted' => false,
				'columnName' => 'settore' 
			),
			array(
				'sql' => 'sigla_cliente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'sigla_cliente' 
				),
				'encrypted' => false,
				'columnName' => 'sigla_cliente' 
			),
			array(
				'sql' => 'privato',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'privato' 
				),
				'encrypted' => false,
				'columnName' => 'privato' 
			),
			array(
				'sql' => 'data_imp',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'data_imp' 
				),
				'encrypted' => false,
				'columnName' => 'data_imp' 
			),
			array(
				'sql' => 'data_firma',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'data_firma' 
				),
				'encrypted' => false,
				'columnName' => 'data_firma' 
			),
			array(
				'sql' => 'firma_paziente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'firma_paziente' 
				),
				'encrypted' => false,
				'columnName' => 'firma_paziente' 
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
					'table' => 'scheda_firma_privato',
					'name' => 'idprodotto' 
				),
				'encrypted' => false,
				'columnName' => 'idprodotto' 
			),
			array(
				'sql' => 'quantita',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'quantita' 
				),
				'encrypted' => false,
				'columnName' => 'quantita' 
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
					'table' => 'scheda_firma_privato',
					'name' => 'terapista' 
				),
				'encrypted' => false,
				'columnName' => 'terapista' 
			),
			array(
				'sql' => 'concluso',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'scheda_firma_privato',
					'name' => 'concluso' 
				),
				'encrypted' => false,
				'columnName' => 'concluso' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'scheda_firma_privato',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'scheda_firma_privato',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'progressivo',
						'id_impegnativa',
						'cognome_e_nome',
						'anno',
						'et__evolutiva_o_adulto',
						'settore',
						'sigla_cliente',
						'privato',
						'data_imp',
						'data_firma',
						'firma_paziente',
						'idprodotto',
						'quantita',
						'terapista',
						'concluso' 
					),
					'name' => 'scheda_firma_privato' 
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
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	progressivo,
	id_impegnativa,
	cognome_e_nome,
	anno,
	et__evolutiva_o_adulto,
	settore,
	sigla_cliente,
	privato,
	data_imp,
	data_firma,
	firma_paziente,
	idprodotto,
	quantita,
	terapista,
	concluso',
		'fromListSql' => 'FROM
	scheda_firma_privato',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'scheda_firma_privato',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
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
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'progressivo',
			'id_impegnativa',
			'cognome_e_nome',
			'anno',
			'et__evolutiva_o_adulto',
			'settore',
			'sigla_cliente',
			'privato',
			'data_imp',
			'data_firma',
			'idprodotto',
			'quantita',
			'terapista',
			'concluso' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'progressivo',
			'id_impegnativa',
			'cognome_e_nome',
			'anno',
			'et__evolutiva_o_adulto',
			'settore',
			'sigla_cliente',
			'privato',
			'data_imp',
			'data_firma',
			'idprodotto',
			'quantita',
			'terapista',
			'concluso' 
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
	$runnerTableLabels['scheda_firma_privato'] = array(
	'tableCaption' => 'Scheda Firma Privato',
	'fieldLabels' => array(
		'id' => 'Id',
		'progressivo' => 'Progressivo',
		'id_impegnativa' => 'Id Impegnativa',
		'cognome_e_nome' => 'Cognome E Nome',
		'anno' => 'Anno',
		'et__evolutiva_o_adulto' => 'Et Evolutiva O Adulto',
		'settore' => 'Settore',
		'sigla_cliente' => 'Sigla Cliente',
		'privato' => 'Privato',
		'data_imp' => 'Data Imp',
		'data_firma' => 'Data Firma',
		'firma_paziente' => 'Firma Paziente',
		'idprodotto' => 'Idprodotto',
		'quantita' => 'Quantita',
		'terapista' => 'Terapista',
		'concluso' => 'Concluso' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'progressivo' => '',
		'id_impegnativa' => '',
		'cognome_e_nome' => '',
		'anno' => '',
		'et__evolutiva_o_adulto' => '',
		'settore' => '',
		'sigla_cliente' => '',
		'privato' => '',
		'data_imp' => '',
		'data_firma' => '',
		'firma_paziente' => '',
		'idprodotto' => '',
		'quantita' => '',
		'terapista' => '',
		'concluso' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'progressivo' => '',
		'id_impegnativa' => '',
		'cognome_e_nome' => '',
		'anno' => '',
		'et__evolutiva_o_adulto' => '',
		'settore' => '',
		'sigla_cliente' => '',
		'privato' => '',
		'data_imp' => '',
		'data_firma' => '',
		'firma_paziente' => '',
		'idprodotto' => '',
		'quantita' => '',
		'terapista' => '',
		'concluso' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>