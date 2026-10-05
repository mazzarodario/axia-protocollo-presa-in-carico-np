<?php
global $runnerTableSettings;
$runnerTableSettings['privacy_adulto'] = array(
	'name' => 'privacy_adulto',
	'shortName' => 'privacy_adulto',
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
	'afterEditDetails' => 'privacy_adulto',
	'afterAddDetail' => 'privacy_adulto',
	'detailsBadgeColor' => '4169e1',
	'sql' => 'SELECT
	id,
	paziente,
	firmatario,
	clausola1,
	clausola2,
	clausola3,
	clausola4,
	data_firma,
	firma_paziente
FROM
	privacy_adulto',
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
			'tableName' => 'privacy_adulto' 
		),
		'paziente' => array(
			'name' => 'paziente',
			'goodName' => 'paziente',
			'strField' => 'paziente',
			'index' => 2,
			'sqlExpression' => 'paziente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto',
			'viewLinkTable' => 'anagrafe',
			'viewLinkLookup' => false 
		),
		'firmatario' => array(
			'name' => 'firmatario',
			'goodName' => 'firmatario',
			'strField' => 'firmatario',
			'index' => 3,
			'sqlExpression' => 'firmatario',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto' 
		),
		'clausola1' => array(
			'name' => 'clausola1',
			'goodName' => 'clausola1',
			'strField' => 'clausola1',
			'index' => 4,
			'sqlExpression' => 'clausola1',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto' 
		),
		'clausola2' => array(
			'name' => 'clausola2',
			'goodName' => 'clausola2',
			'strField' => 'clausola2',
			'index' => 5,
			'sqlExpression' => 'clausola2',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto' 
		),
		'clausola3' => array(
			'name' => 'clausola3',
			'goodName' => 'clausola3',
			'strField' => 'clausola3',
			'index' => 6,
			'sqlExpression' => 'clausola3',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto' 
		),
		'clausola4' => array(
			'name' => 'clausola4',
			'goodName' => 'clausola4',
			'strField' => 'clausola4',
			'index' => 7,
			'sqlExpression' => 'clausola4',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'privacy_adulto' 
		),
		'data_firma' => array(
			'name' => 'data_firma',
			'goodName' => 'data_firma',
			'strField' => 'data_firma',
			'index' => 8,
			'type' => 7,
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
			'tableName' => 'privacy_adulto' 
		),
		'firma_paziente' => array(
			'name' => 'firma_paziente',
			'goodName' => 'firma_paziente',
			'strField' => 'firma_paziente',
			'index' => 9,
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
			'tableName' => 'privacy_adulto' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'anagrafe',
			'detailsKeys' => array( 
				'paziente' 
			),
			'masterKeys' => array( 
				'cognome_e_nome' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	paziente,
	firmatario,
	clausola1,
	clausola2,
	clausola3,
	clausola4,
	data_firma,
	firma_paziente
FROM
	privacy_adulto',
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
					'table' => 'privacy_adulto',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'paziente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'paziente' 
				),
				'encrypted' => false,
				'columnName' => 'paziente' 
			),
			array(
				'sql' => 'firmatario',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'firmatario' 
				),
				'encrypted' => false,
				'columnName' => 'firmatario' 
			),
			array(
				'sql' => 'clausola1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'clausola1' 
				),
				'encrypted' => false,
				'columnName' => 'clausola1' 
			),
			array(
				'sql' => 'clausola2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'clausola2' 
				),
				'encrypted' => false,
				'columnName' => 'clausola2' 
			),
			array(
				'sql' => 'clausola3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'clausola3' 
				),
				'encrypted' => false,
				'columnName' => 'clausola3' 
			),
			array(
				'sql' => 'clausola4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'privacy_adulto',
					'name' => 'clausola4' 
				),
				'encrypted' => false,
				'columnName' => 'clausola4' 
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
					'table' => 'privacy_adulto',
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
					'table' => 'privacy_adulto',
					'name' => 'firma_paziente' 
				),
				'encrypted' => false,
				'columnName' => 'firma_paziente' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'privacy_adulto',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'privacy_adulto',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'paziente',
						'firmatario',
						'clausola1',
						'clausola2',
						'clausola3',
						'clausola4',
						'data_firma',
						'firma_paziente' 
					),
					'name' => 'privacy_adulto' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	paziente,
	firmatario,
	clausola1,
	clausola2,
	clausola3,
	clausola4,
	data_firma,
	firma_paziente',
		'fromListSql' => 'FROM
	privacy_adulto',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'privacy_adulto',
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
			'id',
			'paziente',
			'firmatario',
			'clausola1',
			'clausola2',
			'clausola3',
			'clausola4',
			'data_firma' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'paziente',
			'firmatario',
			'clausola1',
			'clausola2',
			'clausola3',
			'clausola4',
			'data_firma' 
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
	$runnerTableLabels['privacy_adulto'] = array(
	'tableCaption' => 'Privacy Adulto',
	'fieldLabels' => array(
		'id' => 'Id',
		'paziente' => 'Paziente',
		'firmatario' => 'Firmatario',
		'clausola1' => 'Clausola1',
		'clausola2' => 'Clausola2',
		'clausola3' => 'Clausola3',
		'clausola4' => 'Clausola4',
		'data_firma' => 'Data Firma',
		'firma_paziente' => 'Firma Paziente' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'paziente' => '',
		'firmatario' => '',
		'clausola1' => '',
		'clausola2' => '',
		'clausola3' => '',
		'clausola4' => '',
		'data_firma' => '',
		'firma_paziente' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'paziente' => '',
		'firmatario' => '',
		'clausola1' => '',
		'clausola2' => '',
		'clausola3' => '',
		'clausola4' => '',
		'data_firma' => '',
		'firma_paziente' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>