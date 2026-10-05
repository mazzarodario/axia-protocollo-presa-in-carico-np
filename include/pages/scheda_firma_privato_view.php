<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'master' => array(
		'impegnative' => array(
			'preview' => false 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'integrated_edit_field' 
			),
			'progressivo' => array( 
				'integrated_edit_field1' 
			),
			'id_impegnativa' => array( 
				'integrated_edit_field2' 
			),
			'cognome_e_nome' => array( 
				'integrated_edit_field3' 
			),
			'anno' => array( 
				'integrated_edit_field4' 
			),
			'et__evolutiva_o_adulto' => array( 
				'integrated_edit_field5' 
			),
			'settore' => array( 
				'integrated_edit_field6' 
			),
			'sigla_cliente' => array( 
				'integrated_edit_field7' 
			),
			'privato' => array( 
				'integrated_edit_field8' 
			),
			'data_imp' => array( 
				'integrated_edit_field9' 
			),
			'data_firma' => array( 
				'integrated_edit_field10' 
			),
			'firma_paziente' => array( 
				'integrated_edit_field11' 
			),
			'idprodotto' => array( 
				'integrated_edit_field12' 
			),
			'quantita' => array( 
				'integrated_edit_field13' 
			),
			'terapista' => array( 
				'integrated_edit_field14' 
			),
			'concluso' => array( 
				'integrated_edit_field15' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'integrated_edit_field',
					'integrated_edit_field1',
					'integrated_edit_field2',
					'integrated_edit_field3',
					'integrated_edit_field4',
					'integrated_edit_field5',
					'integrated_edit_field6',
					'integrated_edit_field7',
					'integrated_edit_field8',
					'integrated_edit_field9',
					'integrated_edit_field10',
					'integrated_edit_field11',
					'integrated_edit_field12',
					'integrated_edit_field13',
					'integrated_edit_field14',
					'integrated_edit_field15' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field7' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field11' => 'grid',
				'integrated_edit_field12' => 'grid',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field14' => 'grid',
				'integrated_edit_field15' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field7' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field11' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field12' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field14' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field15' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'view_header' => array( 
				'view_header' 
			),
			'view_back_list' => array( 
				'view_back_list' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field7',
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10',
				'integrated_edit_field11',
				'integrated_edit_field12',
				'integrated_edit_field13',
				'integrated_edit_field14',
				'integrated_edit_field15' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'view_edit' => array( 
				'view_edit' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field',
							'integrated_edit_field1',
							'integrated_edit_field2',
							'integrated_edit_field3',
							'integrated_edit_field4',
							'integrated_edit_field5',
							'integrated_edit_field6',
							'integrated_edit_field7',
							'integrated_edit_field8',
							'integrated_edit_field9',
							'integrated_edit_field10',
							'integrated_edit_field11',
							'integrated_edit_field12',
							'integrated_edit_field13',
							'integrated_edit_field14',
							'integrated_edit_field15' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
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
	'misc' => array(
		'type' => 'view',
		'breadcrumb' => false,
		'nextPrev' => false 
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
	'id' => 'view',
	'type' => 'view',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'view-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
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
		'below-grid' => array(
			'modelId' => 'view-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_back_list',
						'view_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'view-header',
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
						'view_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field',
						'integrated_edit_field1',
						'integrated_edit_field2',
						'integrated_edit_field3',
						'integrated_edit_field4',
						'integrated_edit_field5',
						'integrated_edit_field6',
						'integrated_edit_field7',
						'integrated_edit_field8',
						'integrated_edit_field9',
						'integrated_edit_field10',
						'integrated_edit_field11',
						'integrated_edit_field12',
						'integrated_edit_field13',
						'integrated_edit_field14',
						'integrated_edit_field15' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'integrated_edit_field' => array(
			'field' => 'id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'progressivo',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'id_impegnativa',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'cognome_e_nome',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'anno',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'et__evolutiva_o_adulto',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'settore',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field7' => array(
			'field' => 'sigla_cliente',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'privato',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field9' => array(
			'field' => 'data_imp',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field10' => array(
			'field' => 'data_firma',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field11' => array(
			'field' => 'firma_paziente',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field12' => array(
			'field' => 'idprodotto',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field13' => array(
			'field' => 'quantita',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field14' => array(
			'field' => 'terapista',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field15' => array(
			'field' => 'concluso',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'view_edit' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
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