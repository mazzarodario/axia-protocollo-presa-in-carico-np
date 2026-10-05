<?php
global $runnerTableSettings;
$runnerTableSettings['utenti'] = array(
	'name' => 'utenti',
	'shortName' => 'utenti',
	'afterEditDetails' => 'utenti',
	'afterAddDetail' => 'utenti',
	'detailsBadgeColor' => '4169e1',
	'sql' => 'SELECT
	ID,
	NOME,
	`USER`,
	PASS,
	settore,
	LIVELLO,
	ext_security_id,
	mail
FROM
	utenti',
	'keyFields' => array( 
		'ID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ID' => array(
			'name' => 'ID',
			'goodName' => 'ID',
			'strField' => 'ID',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'NOME' => array(
			'name' => 'NOME',
			'goodName' => 'NOME',
			'strField' => 'NOME',
			'index' => 2,
			'sqlExpression' => 'NOME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'USER' => array(
			'name' => 'USER',
			'goodName' => 'USER',
			'strField' => 'USER',
			'index' => 3,
			'sqlExpression' => '`USER`',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'PASS' => array(
			'name' => 'PASS',
			'goodName' => 'PASS',
			'strField' => 'PASS',
			'index' => 4,
			'sqlExpression' => 'PASS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'settore' => array(
			'name' => 'settore',
			'goodName' => 'settore',
			'strField' => 'settore',
			'index' => 5,
			'sqlExpression' => 'settore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'LIVELLO' => array(
			'name' => 'LIVELLO',
			'goodName' => 'LIVELLO',
			'strField' => 'LIVELLO',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'LIVELLO',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'ext_security_id' => array(
			'name' => 'ext_security_id',
			'goodName' => 'ext_security_id',
			'strField' => 'ext_security_id',
			'index' => 7,
			'sqlExpression' => 'ext_security_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		),
		'mail' => array(
			'name' => 'mail',
			'goodName' => 'mail',
			'strField' => 'mail',
			'index' => 8,
			'sqlExpression' => 'mail',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'utenti' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ID,
	NOME,
	`USER`,
	PASS,
	settore,
	LIVELLO,
	ext_security_id,
	mail
FROM
	utenti',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'NOME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'NOME' 
				),
				'encrypted' => false,
				'columnName' => 'NOME' 
			),
			array(
				'sql' => '`USER`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'USER' 
				),
				'encrypted' => false,
				'columnName' => 'USER' 
			),
			array(
				'sql' => 'PASS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'PASS' 
				),
				'encrypted' => false,
				'columnName' => 'PASS' 
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
					'table' => 'utenti',
					'name' => 'settore' 
				),
				'encrypted' => false,
				'columnName' => 'settore' 
			),
			array(
				'sql' => 'LIVELLO',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'LIVELLO' 
				),
				'encrypted' => false,
				'columnName' => 'LIVELLO' 
			),
			array(
				'sql' => 'ext_security_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'ext_security_id' 
				),
				'encrypted' => false,
				'columnName' => 'ext_security_id' 
			),
			array(
				'sql' => 'mail',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'utenti',
					'name' => 'mail' 
				),
				'encrypted' => false,
				'columnName' => 'mail' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'utenti',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'utenti',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'NOME',
						'USER',
						'PASS',
						'settore',
						'LIVELLO',
						'ext_security_id',
						'mail' 
					),
					'name' => 'utenti' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ID,
	NOME,
	`USER`,
	PASS,
	settore,
	LIVELLO,
	ext_security_id,
	mail',
		'fromListSql' => 'FROM
	utenti',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'utenti',
	'originalPagesByType' => array(
		 
	),
	'originalPageTypes' => array(
		 
	),
	'originalDefaultPages' => array(
		 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'ID',
			'NOME',
			'USER',
			'PASS',
			'settore',
			'LIVELLO',
			'ext_security_id',
			'mail' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ID',
			'NOME',
			'USER',
			'PASS',
			'settore',
			'LIVELLO',
			'ext_security_id',
			'mail' 
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
	$runnerTableLabels['utenti'] = array(
	'tableCaption' => 'Utenti',
	'fieldLabels' => array(
		'ID' => 'ID',
		'NOME' => 'NOME',
		'USER' => 'USER',
		'PASS' => 'PASS',
		'settore' => 'Settore',
		'LIVELLO' => 'LIVELLO',
		'ext_security_id' => 'Ext Security Id',
		'mail' => 'Mail' 
	),
	'fieldTooltips' => array(
		'ID' => '',
		'NOME' => '',
		'USER' => '',
		'PASS' => '',
		'settore' => '',
		'LIVELLO' => '',
		'ext_security_id' => '',
		'mail' => '' 
	),
	'fieldPlaceholders' => array(
		'ID' => '',
		'NOME' => '',
		'USER' => '',
		'PASS' => '',
		'settore' => '',
		'LIVELLO' => '',
		'ext_security_id' => '',
		'mail' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>