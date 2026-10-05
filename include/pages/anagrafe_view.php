<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'details' => array(
		'impegnative' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'privacy_adulto' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'privacy_bambino' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'primocolloqio' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
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
			'ultima_modifica',
			'Operatore' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id_utente' => array( 
				'integrated_edit_field' 
			),
			'cognome_e_nome' => array( 
				'integrated_edit_field1' 
			),
			'privato' => array( 
				'integrated_edit_field2' 
			),
			'data_di_nascita' => array( 
				'integrated_edit_field3' 
			),
			'sesso' => array( 
				'integrated_edit_field4' 
			),
			'settore' => array( 
				'integrated_edit_field5' 
			),
			'eta_evolutiva_o_adulta' => array( 
				'integrated_edit_field6' 
			),
			'codice_fim' => array( 
				'integrated_edit_field7' 
			),
			'codice_patologia_np' => array( 
				'integrated_edit_field8' 
			),
			'patologia' => array( 
				'integrated_edit_field9' 
			),
			'luogo_di_nascita_intestatario' => array( 
				'integrated_edit_field10' 
			),
			'distretto' => array( 
				'integrated_edit_field11' 
			),
			'indirizzo' => array( 
				'integrated_edit_field12' 
			),
			'nro_telefono' => array( 
				'integrated_edit_field13' 
			),
			'altri_recapiti' => array( 
				'integrated_edit_field14' 
			),
			'localita' => array( 
				'integrated_edit_field15' 
			),
			'codice_fiscale' => array( 
				'integrated_edit_field16' 
			),
			'intestatario_fattura' => array( 
				'integrated_edit_field17' 
			),
			'luogo_di_nascita_paziente' => array( 
				'integrated_edit_field18' 
			),
			'data_nascita_intestatario' => array( 
				'integrated_edit_field19' 
			),
			'indirizzo_int' => array( 
				'integrated_edit_field20' 
			),
			'localita_int' => array( 
				'integrated_edit_field21' 
			),
			'telefono_int' => array( 
				'integrated_edit_field22' 
			),
			'codice_fiscale_int' => array( 
				'integrated_edit_field23' 
			),
			'e_mail' => array( 
				'integrated_edit_field24' 
			),
			'paziente_asa' => array( 
				'integrated_edit_field25' 
			),
			'anno' => array( 
				'integrated_edit_field26' 
			),
			'ultima_modifica' => array( 
				'integrated_edit_field31' 
			),
			'Operatore' => array( 
				'integrated_edit_field27' 
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
					'integrated_edit_field15',
					'integrated_edit_field16',
					'integrated_edit_field17',
					'integrated_edit_field18',
					'integrated_edit_field19',
					'integrated_edit_field20',
					'integrated_edit_field21',
					'integrated_edit_field22',
					'integrated_edit_field23',
					'integrated_edit_field24',
					'integrated_edit_field25',
					'integrated_edit_field26',
					'integrated_edit_field31',
					'integrated_edit_field27' 
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
				'integrated_edit_field15' => 'grid',
				'integrated_edit_field16' => 'grid',
				'integrated_edit_field17' => 'grid',
				'integrated_edit_field18' => 'grid',
				'integrated_edit_field19' => 'grid',
				'integrated_edit_field20' => 'grid',
				'integrated_edit_field21' => 'grid',
				'integrated_edit_field22' => 'grid',
				'integrated_edit_field23' => 'grid',
				'integrated_edit_field24' => 'grid',
				'integrated_edit_field25' => 'grid',
				'integrated_edit_field26' => 'grid',
				'integrated_edit_field31' => 'grid',
				'integrated_edit_field27' => 'grid' 
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
				),
				'integrated_edit_field16' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field17' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field18' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field19' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field20' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field21' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field22' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field23' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field24' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field25' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field26' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field31' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field27' => array(
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
				'integrated_edit_field15',
				'integrated_edit_field16',
				'integrated_edit_field17',
				'integrated_edit_field18',
				'integrated_edit_field19',
				'integrated_edit_field20',
				'integrated_edit_field21',
				'integrated_edit_field22',
				'integrated_edit_field23',
				'integrated_edit_field24',
				'integrated_edit_field25',
				'integrated_edit_field26',
				'integrated_edit_field31',
				'integrated_edit_field27' 
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
							'integrated_edit_field15',
							'integrated_edit_field16',
							'integrated_edit_field17',
							'integrated_edit_field18',
							'integrated_edit_field19',
							'integrated_edit_field20',
							'integrated_edit_field21',
							'integrated_edit_field22',
							'integrated_edit_field23',
							'integrated_edit_field24',
							'integrated_edit_field25',
							'integrated_edit_field26',
							'integrated_edit_field31',
							'integrated_edit_field27' 
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
						'integrated_edit_field15',
						'integrated_edit_field16',
						'integrated_edit_field17',
						'integrated_edit_field18',
						'integrated_edit_field19',
						'integrated_edit_field20',
						'integrated_edit_field21',
						'integrated_edit_field22',
						'integrated_edit_field23',
						'integrated_edit_field24',
						'integrated_edit_field25',
						'integrated_edit_field26',
						'integrated_edit_field31',
						'integrated_edit_field27' 
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
			'field' => 'id_utente',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'cognome_e_nome',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'privato',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'data_di_nascita',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'sesso',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'settore',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'eta_evolutiva_o_adulta',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field7' => array(
			'field' => 'codice_fim',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'codice_patologia_np',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field9' => array(
			'field' => 'patologia',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field10' => array(
			'field' => 'luogo_di_nascita_intestatario',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field11' => array(
			'field' => 'distretto',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field12' => array(
			'field' => 'indirizzo',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field13' => array(
			'field' => 'nro_telefono',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field14' => array(
			'field' => 'altri_recapiti',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field15' => array(
			'field' => 'localita',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field16' => array(
			'field' => 'codice_fiscale',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field17' => array(
			'field' => 'intestatario_fattura',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field18' => array(
			'field' => 'luogo_di_nascita_paziente',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field19' => array(
			'field' => 'data_nascita_intestatario',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field20' => array(
			'field' => 'indirizzo_int',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field21' => array(
			'field' => 'localita_int',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field22' => array(
			'field' => 'telefono_int',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field23' => array(
			'field' => 'codice_fiscale_int',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field24' => array(
			'field' => 'e_mail',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field25' => array(
			'field' => 'paziente_asa',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field26' => array(
			'field' => 'anno',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field31' => array(
			'field' => 'ultima_modifica',
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
		),
		'integrated_edit_field27' => array(
			'field' => 'Operatore',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
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