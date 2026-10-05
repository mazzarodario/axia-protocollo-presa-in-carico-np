<?php
global $runnerTableSettings;
$runnerTableSettings['primocolloqio'] = array(
	'name' => 'primocolloqio',
	'shortName' => 'primocolloqio',
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
	'afterEditDetails' => 'primocolloqio',
	'afterAddDetail' => 'primocolloqio',
	'detailsBadgeColor' => 'cd5c5c',
	'strOrderBy' => 'ORDER BY
	ID DESC',
	'orderInfo' => array( 
		array(
			'index' => 1,
			'dir' => 'DESC',
			'field' => 'ID' 
		) 
	),
	'sql' => 'SELECT
	ID,
	Operatore,
	`Data Primo Colloquio`,
	Paziente,
	`Data Nascita`,
	Eta,
	Inviante,
	Motivi_Invio
FROM
	primocolloqio
ORDER BY
	ID DESC
',
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
			'tableName' => 'primocolloqio' 
		),
		'Operatore' => array(
			'name' => 'Operatore',
			'goodName' => 'Operatore',
			'strField' => 'Operatore',
			'index' => 2,
			'sqlExpression' => 'Operatore',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupTable' => 'dipendenti',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'cognome_e_nome',
					'lookupDisplayField' => 'cognome_e_nome',
					'lookupOrderBy' => 'cognome_e_nome' 
				) 
			),
			'searchOptions' => array( 
				'Equals' 
			),
			'tableName' => 'primocolloqio' 
		),
		'Data Primo Colloquio' => array(
			'name' => 'Data Primo Colloquio',
			'goodName' => 'Data_Primo_Colloquio',
			'strField' => 'Data Primo Colloquio',
			'index' => 3,
			'type' => 135,
			'sqlExpression' => '`Data Primo Colloquio`',
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
			'tableName' => 'primocolloqio' 
		),
		'Paziente' => array(
			'name' => 'Paziente',
			'goodName' => 'Paziente',
			'strField' => 'Paziente',
			'index' => 4,
			'sqlExpression' => 'Paziente',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'primocolloqio',
			'viewLinkTable' => 'anagrafe',
			'viewLinkLookup' => false 
		),
		'Data Nascita' => array(
			'name' => 'Data Nascita',
			'goodName' => 'Data_Nascita',
			'strField' => 'Data Nascita',
			'index' => 5,
			'type' => 135,
			'sqlExpression' => '`Data Nascita`',
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
			'tableName' => 'primocolloqio' 
		),
		'Eta' => array(
			'name' => 'Eta',
			'goodName' => 'Eta',
			'strField' => 'Eta',
			'index' => 6,
			'type' => 5,
			'sqlExpression' => 'Eta',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'primocolloqio' 
		),
		'Inviante' => array(
			'name' => 'Inviante',
			'goodName' => 'Inviante',
			'strField' => 'Inviante',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'Inviante',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'primocolloqio' 
		),
		'Motivi_Invio' => array(
			'name' => 'Motivi_Invio',
			'goodName' => 'Motivi_Invio',
			'strField' => 'Motivi_Invio',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'Motivi_Invio',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'primocolloqio' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'anagrafe',
			'detailsKeys' => array( 
				'Paziente' 
			),
			'masterKeys' => array( 
				'cognome_e_nome' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ID,
	Operatore,
	`Data Primo Colloquio`,
	Paziente,
	`Data Nascita`,
	Eta,
	Inviante,
	Motivi_Invio
FROM
	primocolloqio
ORDER BY
	ID DESC
',
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
					'table' => 'primocolloqio',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'Operatore',
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
			),
			array(
				'sql' => '`Data Primo Colloquio`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Data Primo Colloquio' 
				),
				'encrypted' => false,
				'columnName' => 'Data Primo Colloquio' 
			),
			array(
				'sql' => 'Paziente',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Paziente' 
				),
				'encrypted' => false,
				'columnName' => 'Paziente' 
			),
			array(
				'sql' => '`Data Nascita`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Data Nascita' 
				),
				'encrypted' => false,
				'columnName' => 'Data Nascita' 
			),
			array(
				'sql' => 'Eta',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Eta' 
				),
				'encrypted' => false,
				'columnName' => 'Eta' 
			),
			array(
				'sql' => 'Inviante',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Inviante' 
				),
				'encrypted' => false,
				'columnName' => 'Inviante' 
			),
			array(
				'sql' => 'Motivi_Invio',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'Motivi_Invio' 
				),
				'encrypted' => false,
				'columnName' => 'Motivi_Invio' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'primocolloqio',
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
				'sql' => 'ID DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'primocolloqio',
					'name' => 'ID' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ID,
	Operatore,
	`Data Primo Colloquio`,
	Paziente,
	`Data Nascita`,
	Eta,
	Inviante,
	Motivi_Invio',
		'fromListSql' => 'FROM
	primocolloqio',
		'orderBySql' => 'ORDER BY
	ID DESC',
		'tailSql' => '' 
	),
	'originalTable' => 'primocolloqio',
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
			'ID',
			'Operatore',
			'Data Primo Colloquio',
			'Paziente',
			'Data Nascita',
			'Eta',
			'Inviante',
			'Motivi_Invio' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ID',
			'Operatore',
			'Data Primo Colloquio',
			'Paziente',
			'Data Nascita',
			'Eta',
			'Inviante',
			'Motivi_Invio' 
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
	$runnerTableLabels['primocolloqio'] = array(
	'tableCaption' => 'Primocolloqio',
	'fieldLabels' => array(
		'ID' => 'ID',
		'Operatore' => 'Operatore',
		'Data_Primo_Colloquio' => 'Data Primo Colloquio',
		'Paziente' => 'Paziente',
		'Data_Nascita' => 'Data Nascita',
		'Eta' => 'Eta',
		'Inviante' => 'Inviante',
		'Motivi_Invio' => 'Motivi Invio' 
	),
	'fieldTooltips' => array(
		'ID' => '',
		'Operatore' => '',
		'Data_Primo_Colloquio' => '',
		'Paziente' => '',
		'Data_Nascita' => '',
		'Eta' => '',
		'Inviante' => '',
		'Motivi_Invio' => '' 
	),
	'fieldPlaceholders' => array(
		'ID' => '',
		'Operatore' => '',
		'Data_Primo_Colloquio' => '',
		'Paziente' => '',
		'Data_Nascita' => '',
		'Eta' => '',
		'Inviante' => '',
		'Motivi_Invio' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>