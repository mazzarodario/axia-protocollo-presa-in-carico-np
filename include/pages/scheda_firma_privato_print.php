<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'master' => array(
		'impegnative' => array(
			'preview' => true 
		) 
	),
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'progressivo' => array(
			'totalsType' => '' 
		),
		'id_impegnativa' => array(
			'totalsType' => '' 
		),
		'cognome_e_nome' => array(
			'totalsType' => '' 
		),
		'anno' => array(
			'totalsType' => '' 
		),
		'et__evolutiva_o_adulto' => array(
			'totalsType' => '' 
		),
		'settore' => array(
			'totalsType' => '' 
		),
		'sigla_cliente' => array(
			'totalsType' => '' 
		),
		'privato' => array(
			'totalsType' => '' 
		),
		'data_imp' => array(
			'totalsType' => '' 
		),
		'data_firma' => array(
			'totalsType' => '' 
		),
		'firma_paziente' => array(
			'totalsType' => '' 
		),
		'idprodotto' => array(
			'totalsType' => '' 
		),
		'quantita' => array(
			'totalsType' => '' 
		),
		'terapista' => array(
			'totalsType' => '' 
		),
		'concluso' => array(
			'totalsType' => '' 
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
				'simple_grid_field',
				'simple_grid_field16' 
			),
			'progressivo' => array( 
				'simple_grid_field1',
				'simple_grid_field17' 
			),
			'id_impegnativa' => array( 
				'simple_grid_field2',
				'simple_grid_field18' 
			),
			'cognome_e_nome' => array( 
				'simple_grid_field3',
				'simple_grid_field19' 
			),
			'anno' => array( 
				'simple_grid_field4',
				'simple_grid_field20' 
			),
			'et__evolutiva_o_adulto' => array( 
				'simple_grid_field5',
				'simple_grid_field21' 
			),
			'settore' => array( 
				'simple_grid_field6',
				'simple_grid_field22' 
			),
			'sigla_cliente' => array( 
				'simple_grid_field7',
				'simple_grid_field23' 
			),
			'privato' => array( 
				'simple_grid_field8',
				'simple_grid_field24' 
			),
			'data_imp' => array( 
				'simple_grid_field9',
				'simple_grid_field25' 
			),
			'data_firma' => array( 
				'simple_grid_field10',
				'simple_grid_field26' 
			),
			'firma_paziente' => array( 
				'simple_grid_field11',
				'simple_grid_field27' 
			),
			'idprodotto' => array( 
				'simple_grid_field12',
				'simple_grid_field28' 
			),
			'quantita' => array( 
				'simple_grid_field13',
				'simple_grid_field29' 
			),
			'terapista' => array( 
				'simple_grid_field14',
				'simple_grid_field30' 
			),
			'concluso' => array( 
				'simple_grid_field15',
				'simple_grid_field31' 
			) 
		),
		'hideEmptyFields' => array( 
			 
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
				'above-grid' => array( 
					'print_pages',
					'grid_inline_cancel',
					'inline_add' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'print_header',
					'print_subheader',
					'master_info' 
				),
				'grid' => array( 
					'simple_grid_field16',
					'simple_grid_field',
					'simple_grid_field17',
					'simple_grid_field1',
					'simple_grid_field18',
					'simple_grid_field2',
					'simple_grid_field19',
					'simple_grid_field3',
					'simple_grid_field20',
					'simple_grid_field4',
					'simple_grid_field21',
					'simple_grid_field5',
					'simple_grid_field22',
					'simple_grid_field6',
					'simple_grid_field23',
					'simple_grid_field7',
					'simple_grid_field24',
					'simple_grid_field8',
					'simple_grid_field25',
					'simple_grid_field9',
					'simple_grid_field26',
					'simple_grid_field10',
					'simple_grid_field27',
					'simple_grid_field11',
					'simple_grid_field28',
					'simple_grid_field12',
					'simple_grid_field29',
					'simple_grid_field13',
					'simple_grid_field30',
					'simple_grid_field14',
					'simple_grid_field31',
					'simple_grid_field15' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'print_pages',
					'inline_cancel',
					'inlineadd_link' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'print_pages' => 'above-grid',
				'grid_inline_cancel' => 'above-grid',
				'inline_add' => 'above-grid',
				'print_header' => 'top',
				'print_subheader' => 'top',
				'master_info' => 'top',
				'simple_grid_field16' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field26' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field27' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field28' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field29' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field30' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field31' => 'grid',
				'simple_grid_field15' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field28' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field29' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field13' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'simple_grid_field30' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field14' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field14' 
				),
				'simple_grid_field31' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'print_header' => array( 
				'print_header' 
			),
			'print_subheader' => array( 
				'print_subheader' 
			),
			'print_pages' => array( 
				'print_pages' 
			),
			'master_info' => array( 
				'master_info' 
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
				'simple_grid_field15' 
			),
			'grid_field_label' => array( 
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18',
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
				'simple_grid_field31' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'progressivo_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'id_impegnativa_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'cognome_e_nome_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'anno_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'et__evolutiva_o_adulto_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'settore_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'sigla_cliente_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'privato_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'data_imp_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'data_firma_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'firma_paziente_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
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
							'simple_grid_field28' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field13' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'quantita_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field29' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field14' => array(
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
							'simple_grid_field30' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'concluso_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field31' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'progressivo_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'id_impegnativa_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							3 
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
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'anno_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'et__evolutiva_o_adulto_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'settore_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'sigla_cliente_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'privato_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'data_imp_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'data_firma_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'firma_paziente_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
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
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'quantita_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
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
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'concluso_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
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
					'footcell_field3' => array(
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
					'footcell_field4' => array(
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
					'footcell_field5' => array(
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
					'footcell_field6' => array(
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
					'footcell_field7' => array(
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
					'footcell_field8' => array(
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
					'footcell_field9' => array(
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
					'footcell_field10' => array(
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
					'footcell_field11' => array(
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
					'footcell_field12' => array(
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
					'footcell_field13' => array(
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
					'footcell_field14' => array(
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
					'footcell_field15' => array(
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
					) 
				),
				'width' => 16,
				'height' => 3 
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
				'print_pages' => array(
					'tag' => 'PRINT_PAGES',
					'type' => 2 
				) 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
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
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'print',
		'breadcrumb' => false 
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
	'id' => 'print',
	'type' => 'print',
	'layoutId' => 'basic',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'print-above-grid',
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
						'print_pages',
						'grid_inline_cancel',
						'inline_add' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'print-below-grid',
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
			'modelId' => 'print-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c4' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'print_header',
						'print_subheader' 
					) 
				),
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'master_info' 
					) 
				) 
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
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
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
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
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
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'id',
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
						'simple_grid_field17' 
					),
					'field' => 'progressivo',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'progressivo',
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
						'simple_grid_field18' 
					),
					'field' => 'id_impegnativa',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'id_impegnativa',
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
						'simple_grid_field19' 
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
						'simple_grid_field20' 
					),
					'field' => 'anno',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'anno',
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
						'simple_grid_field21' 
					),
					'field' => 'et__evolutiva_o_adulto',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'et__evolutiva_o_adulto',
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
						'simple_grid_field22' 
					),
					'field' => 'settore',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'settore',
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
						'simple_grid_field23' 
					),
					'field' => 'sigla_cliente',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'sigla_cliente',
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
						'simple_grid_field24' 
					),
					'field' => 'privato',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'privato',
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
						'simple_grid_field25' 
					),
					'field' => 'data_imp',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'data_imp',
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
						'simple_grid_field26' 
					),
					'field' => 'data_firma',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'data_firma',
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
						'simple_grid_field27' 
					),
					'field' => 'firma_paziente',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'firma_paziente',
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
						'simple_grid_field28' 
					),
					'field' => 'idprodotto',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'idprodotto',
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
						'simple_grid_field29' 
					),
					'field' => 'quantita',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'quantita',
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
						'simple_grid_field30' 
					),
					'field' => 'terapista',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'terapista',
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
						'simple_grid_field31' 
					),
					'field' => 'concluso',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'concluso',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
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
		'print_header' => array(
			'type' => 'print_header' 
		),
		'print_subheader' => array(
			'type' => 'print_subheader' 
		),
		'print_pages' => array(
			'type' => 'print_pages' 
		),
		'master_info' => array(
			'type' => 'master_info',
			'tables' => array(
				'29135' => 'true' 
			) 
		),
		'simple_grid_field' => array(
			'field' => 'id',
			'type' => 'grid_field' 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'id' 
		),
		'simple_grid_field1' => array(
			'field' => 'progressivo',
			'type' => 'grid_field' 
		),
		'simple_grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'progressivo' 
		),
		'simple_grid_field2' => array(
			'field' => 'id_impegnativa',
			'type' => 'grid_field' 
		),
		'simple_grid_field18' => array(
			'type' => 'grid_field_label',
			'field' => 'id_impegnativa' 
		),
		'simple_grid_field3' => array(
			'field' => 'cognome_e_nome',
			'type' => 'grid_field' 
		),
		'simple_grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'cognome_e_nome' 
		),
		'simple_grid_field4' => array(
			'field' => 'anno',
			'type' => 'grid_field' 
		),
		'simple_grid_field20' => array(
			'type' => 'grid_field_label',
			'field' => 'anno' 
		),
		'simple_grid_field5' => array(
			'field' => 'et__evolutiva_o_adulto',
			'type' => 'grid_field' 
		),
		'simple_grid_field21' => array(
			'type' => 'grid_field_label',
			'field' => 'et__evolutiva_o_adulto' 
		),
		'simple_grid_field6' => array(
			'field' => 'settore',
			'type' => 'grid_field' 
		),
		'simple_grid_field22' => array(
			'type' => 'grid_field_label',
			'field' => 'settore' 
		),
		'simple_grid_field7' => array(
			'field' => 'sigla_cliente',
			'type' => 'grid_field' 
		),
		'simple_grid_field23' => array(
			'type' => 'grid_field_label',
			'field' => 'sigla_cliente' 
		),
		'simple_grid_field8' => array(
			'field' => 'privato',
			'type' => 'grid_field' 
		),
		'simple_grid_field24' => array(
			'type' => 'grid_field_label',
			'field' => 'privato' 
		),
		'simple_grid_field9' => array(
			'field' => 'data_imp',
			'type' => 'grid_field' 
		),
		'simple_grid_field25' => array(
			'type' => 'grid_field_label',
			'field' => 'data_imp' 
		),
		'simple_grid_field10' => array(
			'field' => 'data_firma',
			'type' => 'grid_field' 
		),
		'simple_grid_field26' => array(
			'type' => 'grid_field_label',
			'field' => 'data_firma' 
		),
		'simple_grid_field11' => array(
			'field' => 'firma_paziente',
			'type' => 'grid_field' 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'firma_paziente' 
		),
		'simple_grid_field12' => array(
			'field' => 'idprodotto',
			'type' => 'grid_field' 
		),
		'simple_grid_field28' => array(
			'type' => 'grid_field_label',
			'field' => 'idprodotto' 
		),
		'simple_grid_field13' => array(
			'field' => 'quantita',
			'type' => 'grid_field' 
		),
		'simple_grid_field29' => array(
			'type' => 'grid_field_label',
			'field' => 'quantita' 
		),
		'simple_grid_field14' => array(
			'field' => 'terapista',
			'type' => 'grid_field' 
		),
		'simple_grid_field30' => array(
			'type' => 'grid_field_label',
			'field' => 'terapista' 
		),
		'simple_grid_field15' => array(
			'field' => 'concluso',
			'type' => 'grid_field' 
		),
		'simple_grid_field31' => array(
			'type' => 'grid_field_label',
			'field' => 'concluso' 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'detailsOnly' => true 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
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