<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'id_affidamento' => array(
			'totalsType' => '' 
		),
		'data_richiesta' => array(
			'totalsType' => '' 
		),
		'utente_richiesta' => array(
			'totalsType' => '' 
		),
		'cognome_e_nome' => array(
			'totalsType' => '' 
		),
		'data_di_nascita' => array(
			'totalsType' => '' 
		),
		'sesso' => array(
			'totalsType' => '' 
		),
		'eta_evolutiva_o_adulta' => array(
			'totalsType' => '' 
		),
		'settore' => array(
			'totalsType' => '' 
		),
		'distretto' => array(
			'totalsType' => '' 
		),
		'recapito' => array(
			'totalsType' => '' 
		),
		'idprodotto' => array(
			'totalsType' => '' 
		),
		'tipo_valutazione' => array(
			'totalsType' => '' 
		),
		'terapista' => array(
			'totalsType' => '' 
		),
		'mail_terapista' => array(
			'totalsType' => '' 
		),
		'note' => array(
			'totalsType' => '' 
		),
		'mail_inviata_il' => array(
			'totalsType' => '' 
		),
		'id_utente' => array(
			'totalsType' => '' 
		),
		'data_abbinamento' => array(
			'totalsType' => '' 
		),
		'ultima_modifica' => array(
			'totalsType' => '' 
		) 
	),
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
			'id_affidamento',
			'ultima_modifica',
			'data_abbinamento',
			'id_utente',
			'mail_inviata_il',
			'note',
			'mail_terapista',
			'terapista',
			'tipo_valutazione',
			'idprodotto',
			'recapito',
			'distretto',
			'settore',
			'eta_evolutiva_o_adulta',
			'sesso',
			'data_di_nascita',
			'cognome_e_nome',
			'utente_richiesta',
			'data_richiesta' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'id_affidamento' => array( 
				'simple_grid_field',
				'simple_grid_field19' 
			),
			'data_richiesta' => array( 
				'simple_grid_field1',
				'simple_grid_field20' 
			),
			'utente_richiesta' => array( 
				'simple_grid_field2',
				'simple_grid_field21' 
			),
			'cognome_e_nome' => array( 
				'simple_grid_field3',
				'simple_grid_field22' 
			),
			'data_di_nascita' => array( 
				'simple_grid_field4',
				'simple_grid_field23' 
			),
			'sesso' => array( 
				'simple_grid_field5',
				'simple_grid_field24' 
			),
			'eta_evolutiva_o_adulta' => array( 
				'simple_grid_field6',
				'simple_grid_field25' 
			),
			'settore' => array( 
				'simple_grid_field7',
				'simple_grid_field26' 
			),
			'distretto' => array( 
				'simple_grid_field8',
				'simple_grid_field27' 
			),
			'recapito' => array( 
				'simple_grid_field9',
				'simple_grid_field28' 
			),
			'idprodotto' => array( 
				'simple_grid_field10',
				'simple_grid_field29' 
			),
			'tipo_valutazione' => array( 
				'simple_grid_field11',
				'simple_grid_field30' 
			),
			'terapista' => array( 
				'simple_grid_field12',
				'simple_grid_field31' 
			),
			'mail_terapista' => array( 
				'simple_grid_field13',
				'simple_grid_field32' 
			),
			'note' => array( 
				'simple_grid_field14',
				'simple_grid_field33' 
			),
			'mail_inviata_il' => array( 
				'simple_grid_field15',
				'simple_grid_field34' 
			),
			'id_utente' => array( 
				'simple_grid_field16',
				'simple_grid_field35' 
			),
			'data_abbinamento' => array( 
				'simple_grid_field17',
				'simple_grid_field36' 
			),
			'ultima_modifica' => array( 
				'simple_grid_field18',
				'simple_grid_field37' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'details_found',
					'page_size',
					'print_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu',
					'search_panel' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'breadcrumb',
					'simple_search',
					'list_options',
					'loginform_login',
					'username_button' 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'simple_grid_field19',
					'simple_grid_field',
					'simple_grid_field20',
					'simple_grid_field1',
					'simple_grid_field21',
					'simple_grid_field2',
					'simple_grid_field22',
					'simple_grid_field3',
					'simple_grid_field23',
					'simple_grid_field4',
					'simple_grid_field24',
					'simple_grid_field5',
					'simple_grid_field25',
					'simple_grid_field6',
					'simple_grid_field26',
					'simple_grid_field7',
					'simple_grid_field27',
					'simple_grid_field8',
					'simple_grid_field28',
					'simple_grid_field9',
					'simple_grid_field29',
					'simple_grid_field10',
					'simple_grid_field30',
					'simple_grid_field11',
					'simple_grid_field31',
					'simple_grid_field12',
					'simple_grid_field32',
					'simple_grid_field13',
					'simple_grid_field33',
					'simple_grid_field14',
					'simple_grid_field34',
					'simple_grid_field15',
					'simple_grid_field35',
					'simple_grid_field16',
					'simple_grid_field36',
					'simple_grid_field17',
					'simple_grid_field37',
					'simple_grid_field18',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_view' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'details_found',
					'recsPerPage',
					'print_friendly' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'search_panel' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'simple_grid_field19' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field26' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field27' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field28' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field29' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field30' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field31' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field32' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field33' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field34' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field35' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field36' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field37' => 'grid',
				'simple_grid_field18' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_view' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field28' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field29' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field30' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field31' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field32' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field13' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'simple_grid_field33' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field14' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field14' 
				),
				'simple_grid_field34' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'simple_grid_field35' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field16' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'cell_field16' 
				),
				'simple_grid_field36' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field17' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'simple_grid_field37' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field18' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				) 
			),
			'itemVisiblity' => array(
				'breadcrumb' => 5,
				'expand_menu_button' => 2,
				'print_panel' => 5,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field10',
				'search_panel_field11',
				'search_panel_field12',
				'search_panel_field13',
				'search_panel_field14',
				'search_panel_field15',
				'search_panel_field16',
				'search_panel_field17',
				'search_panel_field18' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18' 
			),
			'grid_field_label' => array( 
				'simple_grid_field19',
				'simple_grid_field20',
				'simple_grid_field21',
				'simple_grid_field22',
				'simple_grid_field23',
				'simple_grid_field24',
				'simple_grid_field25',
				'simple_grid_field26',
				'simple_grid_field27',
				'simple_grid_field28',
				'simple_grid_field29',
				'simple_grid_field30',
				'simple_grid_field31',
				'simple_grid_field32',
				'simple_grid_field33',
				'simple_grid_field34',
				'simple_grid_field35',
				'simple_grid_field36',
				'simple_grid_field37' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'id_affidamento_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'data_richiesta_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'utente_richiesta_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'cognome_e_nome_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'data_di_nascita_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'sesso_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'eta_evolutiva_o_adulta_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'settore_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'distretto_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'recapito_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field28' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'idprodotto_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field29' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'tipo_valutazione_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field30' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'terapista_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field31' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field13' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'mail_terapista_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field32' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field14' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'note_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field33' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'mail_inviata_il_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field34' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field16' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'id_utente_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field35' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field17' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'data_abbinamento_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field36' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field18' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'ultima_modifica_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field37' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'view_column' 
						),
						'items' => array( 
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'id_affidamento_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'data_richiesta_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'utente_richiesta_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'cognome_e_nome_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'data_di_nascita_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'sesso_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'eta_evolutiva_o_adulta_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'settore_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'distretto_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'recapito_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'idprodotto_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'tipo_valutazione_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'terapista_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mail_terapista_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'note_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'mail_inviata_il_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field16' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'id_utente_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field17' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'data_abbinamento_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field18' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'ultima_modifica_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field11' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field12' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field13' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field14' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field15' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field16' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field17' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field18' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 21,
				'height' => 3 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
			) 
		),
		'gridType' => 0,
		'recsPerRow' => 1,
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'list',
		'breadcrumb' => true 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
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
						 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu',
						'search_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top',
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
						'expand_menu_button',
						'collapse_button',
						'breadcrumb' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_checkbox' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
						),
						array(
							'cell' => 'headcell_field9' 
						),
						array(
							'cell' => 'headcell_field10' 
						),
						array(
							'cell' => 'headcell_field11' 
						),
						array(
							'cell' => 'headcell_field12' 
						),
						array(
							'cell' => 'headcell_field13' 
						),
						array(
							'cell' => 'headcell_field14' 
						),
						array(
							'cell' => 'headcell_field15' 
						),
						array(
							'cell' => 'headcell_field16' 
						),
						array(
							'cell' => 'headcell_field17' 
						),
						array(
							'cell' => 'headcell_field18' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'cell_checkbox' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
						),
						array(
							'cell' => 'cell_field9' 
						),
						array(
							'cell' => 'cell_field10' 
						),
						array(
							'cell' => 'cell_field11' 
						),
						array(
							'cell' => 'cell_field12' 
						),
						array(
							'cell' => 'cell_field13' 
						),
						array(
							'cell' => 'cell_field14' 
						),
						array(
							'cell' => 'cell_field15' 
						),
						array(
							'cell' => 'cell_field16' 
						),
						array(
							'cell' => 'cell_field17' 
						),
						array(
							'cell' => 'cell_field18' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						),
						array(
							'cell' => 'footcell_field9' 
						),
						array(
							'cell' => 'footcell_field10' 
						),
						array(
							'cell' => 'footcell_field11' 
						),
						array(
							'cell' => 'footcell_field12' 
						),
						array(
							'cell' => 'footcell_field13' 
						),
						array(
							'cell' => 'footcell_field14' 
						),
						array(
							'cell' => 'footcell_field15' 
						),
						array(
							'cell' => 'footcell_field16' 
						),
						array(
							'cell' => 'footcell_field17' 
						),
						array(
							'cell' => 'footcell_field18' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'id_affidamento',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'id_affidamento',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field20' 
					),
					'field' => 'data_richiesta',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'data_richiesta',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field21' 
					),
					'field' => 'utente_richiesta',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'utente_richiesta',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field22' 
					),
					'field' => 'cognome_e_nome',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'cognome_e_nome',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field23' 
					),
					'field' => 'data_di_nascita',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'data_di_nascita',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field24' 
					),
					'field' => 'sesso',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'sesso',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field25' 
					),
					'field' => 'eta_evolutiva_o_adulta',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'eta_evolutiva_o_adulta',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field26' 
					),
					'field' => 'settore',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'settore',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field27' 
					),
					'field' => 'distretto',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'distretto',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field9' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field28' 
					),
					'field' => 'recapito',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'recapito',
					'columnName' => 'field' 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field10' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field29' 
					),
					'field' => 'idprodotto',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'idprodotto',
					'columnName' => 'field' 
				),
				'footcell_field10' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field11' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field30' 
					),
					'field' => 'tipo_valutazione',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'tipo_valutazione',
					'columnName' => 'field' 
				),
				'footcell_field11' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field12' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field31' 
					),
					'field' => 'terapista',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'terapista',
					'columnName' => 'field' 
				),
				'footcell_field12' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field13' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field32' 
					),
					'field' => 'mail_terapista',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'mail_terapista',
					'columnName' => 'field' 
				),
				'footcell_field13' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field14' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field33' 
					),
					'field' => 'note',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'note',
					'columnName' => 'field' 
				),
				'footcell_field14' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field15' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field34' 
					),
					'field' => 'mail_inviata_il',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'mail_inviata_il',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field16' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field35' 
					),
					'field' => 'id_utente',
					'columnName' => 'field' 
				),
				'cell_field16' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'id_utente',
					'columnName' => 'field' 
				),
				'footcell_field16' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field17' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field36' 
					),
					'field' => 'data_abbinamento',
					'columnName' => 'field' 
				),
				'cell_field17' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'data_abbinamento',
					'columnName' => 'field' 
				),
				'footcell_field17' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field18' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field37' 
					),
					'field' => 'ultima_modifica',
					'columnName' => 'field' 
				),
				'cell_field18' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'ultima_modifica',
					'columnName' => 'field' 
				),
				'footcell_field18' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'page_size' => array(
			'type' => 'page_size' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field18',
				'search_panel_field17',
				'search_panel_field16',
				'search_panel_field15',
				'search_panel_field14',
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export',
				'-2',
				'import' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'id_affidamento',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'data_richiesta',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'utente_richiesta',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'cognome_e_nome',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'data_di_nascita',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'sesso',
			'type' => 'search_panel_field' 
		),
		'search_panel_field6' => array(
			'field' => 'eta_evolutiva_o_adulta',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'settore',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
			'field' => 'distretto',
			'type' => 'search_panel_field' 
		),
		'search_panel_field9' => array(
			'field' => 'recapito',
			'type' => 'search_panel_field' 
		),
		'search_panel_field10' => array(
			'field' => 'idprodotto',
			'type' => 'search_panel_field' 
		),
		'search_panel_field11' => array(
			'field' => 'tipo_valutazione',
			'type' => 'search_panel_field' 
		),
		'search_panel_field12' => array(
			'field' => 'terapista',
			'type' => 'search_panel_field' 
		),
		'search_panel_field13' => array(
			'field' => 'mail_terapista',
			'type' => 'search_panel_field' 
		),
		'search_panel_field14' => array(
			'field' => 'note',
			'type' => 'search_panel_field' 
		),
		'search_panel_field15' => array(
			'field' => 'mail_inviata_il',
			'type' => 'search_panel_field' 
		),
		'search_panel_field16' => array(
			'field' => 'id_utente',
			'type' => 'search_panel_field' 
		),
		'search_panel_field17' => array(
			'field' => 'data_abbinamento',
			'type' => 'search_panel_field' 
		),
		'search_panel_field18' => array(
			'field' => 'ultima_modifica',
			'type' => 'search_panel_field' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'simple_grid_field' => array(
			'field' => 'id_affidamento',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'id_affidamento' 
		),
		'simple_grid_field1' => array(
			'field' => 'data_richiesta',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field20' => array(
			'type' => 'grid_field_label',
			'field' => 'data_richiesta' 
		),
		'simple_grid_field2' => array(
			'field' => 'utente_richiesta',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field21' => array(
			'type' => 'grid_field_label',
			'field' => 'utente_richiesta' 
		),
		'simple_grid_field3' => array(
			'field' => 'cognome_e_nome',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field22' => array(
			'type' => 'grid_field_label',
			'field' => 'cognome_e_nome' 
		),
		'simple_grid_field4' => array(
			'field' => 'data_di_nascita',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field23' => array(
			'type' => 'grid_field_label',
			'field' => 'data_di_nascita' 
		),
		'simple_grid_field5' => array(
			'field' => 'sesso',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field24' => array(
			'type' => 'grid_field_label',
			'field' => 'sesso' 
		),
		'simple_grid_field6' => array(
			'field' => 'eta_evolutiva_o_adulta',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field25' => array(
			'type' => 'grid_field_label',
			'field' => 'eta_evolutiva_o_adulta' 
		),
		'simple_grid_field7' => array(
			'field' => 'settore',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field26' => array(
			'type' => 'grid_field_label',
			'field' => 'settore' 
		),
		'simple_grid_field8' => array(
			'field' => 'distretto',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'distretto' 
		),
		'simple_grid_field9' => array(
			'field' => 'recapito',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field28' => array(
			'type' => 'grid_field_label',
			'field' => 'recapito' 
		),
		'simple_grid_field10' => array(
			'field' => 'idprodotto',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field29' => array(
			'type' => 'grid_field_label',
			'field' => 'idprodotto' 
		),
		'simple_grid_field11' => array(
			'field' => 'tipo_valutazione',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field30' => array(
			'type' => 'grid_field_label',
			'field' => 'tipo_valutazione' 
		),
		'simple_grid_field12' => array(
			'field' => 'terapista',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field31' => array(
			'type' => 'grid_field_label',
			'field' => 'terapista' 
		),
		'simple_grid_field13' => array(
			'field' => 'mail_terapista',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field32' => array(
			'type' => 'grid_field_label',
			'field' => 'mail_terapista' 
		),
		'simple_grid_field14' => array(
			'field' => 'note',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field33' => array(
			'type' => 'grid_field_label',
			'field' => 'note' 
		),
		'simple_grid_field15' => array(
			'field' => 'mail_inviata_il',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field34' => array(
			'type' => 'grid_field_label',
			'field' => 'mail_inviata_il' 
		),
		'simple_grid_field16' => array(
			'field' => 'id_utente',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field35' => array(
			'type' => 'grid_field_label',
			'field' => 'id_utente' 
		),
		'simple_grid_field17' => array(
			'field' => 'data_abbinamento',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field36' => array(
			'type' => 'grid_field_label',
			'field' => 'data_abbinamento' 
		),
		'simple_grid_field18' => array(
			'field' => 'ultima_modifica',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field37' => array(
			'type' => 'grid_field_label',
			'field' => 'ultima_modifica' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_view' => array(
			'type' => 'grid_view' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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