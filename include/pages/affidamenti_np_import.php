<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id_affidamento' => array( 
				'import_field' 
			),
			'data_richiesta' => array( 
				'import_field1' 
			),
			'utente_richiesta' => array( 
				'import_field2' 
			),
			'cognome_e_nome' => array( 
				'import_field3' 
			),
			'data_di_nascita' => array( 
				'import_field4' 
			),
			'sesso' => array( 
				'import_field5' 
			),
			'eta_evolutiva_o_adulta' => array( 
				'import_field6' 
			),
			'settore' => array( 
				'import_field7' 
			),
			'distretto' => array( 
				'import_field8' 
			),
			'recapito' => array( 
				'import_field9' 
			),
			'idprodotto' => array( 
				'import_field10' 
			),
			'tipo_valutazione' => array( 
				'import_field11' 
			),
			'terapista' => array( 
				'import_field12' 
			),
			'mail_terapista' => array( 
				'import_field13' 
			),
			'note' => array( 
				'import_field14' 
			),
			'mail_inviata_il' => array( 
				'import_field15' 
			),
			'id_utente' => array( 
				'import_field16' 
			),
			'data_abbinamento' => array( 
				'import_field17' 
			),
			'ultima_modifica' => array( 
				'import_field18' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field14',
					'import_field15',
					'import_field16',
					'import_field17',
					'import_field18' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field14' => 'grid',
				'import_field15' => 'grid',
				'import_field16' => 'grid',
				'import_field17' => 'grid',
				'import_field18' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field14',
				'import_field15',
				'import_field16',
				'import_field17',
				'import_field18' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'import-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field14',
						'import_field15',
						'import_field16',
						'import_field17',
						'import_field18' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'id_affidamento',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'data_richiesta',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'utente_richiesta',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'cognome_e_nome',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'data_di_nascita',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'sesso',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'eta_evolutiva_o_adulta',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'settore',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'distretto',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'recapito',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'idprodotto',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'tipo_valutazione',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'terapista',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'mail_terapista',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'note',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'mail_inviata_il',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'id_utente',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'data_abbinamento',
			'type' => 'import_field' 
		),
		'import_field18' => array(
			'field' => 'ultima_modifica',
			'type' => 'import_field' 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'transparent',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	),
	'cardStyle' => array(
		 
	) 
);
		?>