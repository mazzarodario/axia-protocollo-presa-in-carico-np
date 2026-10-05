<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => false,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'loginform_login' => array(
				'menutItem' => false 
			),
			'username_button' => array(
				'menutItem' => false 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 1,
				'items' => null,
				'url' => 'protocollo_np.php' 
			),
			'welcome_group' => array(
				'menutItem' => true,
				'group' => true,
				'items' => array(
					'welcome_item1' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'anagrafe',
						'page' => 'list' 
					),
					'welcome_item2' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'primocolloqio',
						'page' => 'list' 
					),
					'welcome_item3' => array(
						'menutItem' => true,
						'group' => false,
						'linkType' => 0,
						'items' => null,
						'table' => 'affidamenti_np',
						'page' => 'list' 
					) 
				) 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'loginform_login',
					'username_button' 
				),
				'grid' => array( 
					'welcome_item',
					'welcome_group' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'welcome_item' => 'grid',
				'welcome_group' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'welcome_item' => array( 
				'welcome_item1',
				'welcome_item',
				'welcome_item2',
				'welcome_item3' 
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
			'welcome_group' => array( 
				'welcome_group' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
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
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
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
	'id' => 'menu',
	'type' => 'menu',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
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
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'welcome',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
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
						'welcome_item' 
					) 
				),
				'c' => array(
					'model' => 'c1',
					'items' => array( 
						'welcome_group' 
					) 
				),
				'c2' => array(
					'model' => 'c1',
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
		'logo' => array(
			'type' => 'logo',
			'logo' => array(
				'type' => 8 
			) 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'welcome_item1' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'anagrafe',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'anagrafe',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'heart-empty',
				'style' => 0 
			),
			'linkComments' => array(
				'type' => 0,
				'text' => 'Riepilogo dati protocollo' 
			),
			'background' => '#9acd32',
			'linkType' => 0 
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
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => 'protocollo_np.php',
			'linkText' => array(
				'type' => 0,
				'text' => 'Procedura presa in carico' 
			),
			'linkIcon' => array(
				'style' => 0 
			),
			'linkType' => 1,
			'bold' => true,
			'font-size' => '24px',
			'linkNewTab' => true 
		),
		'welcome_group' => array(
			'type' => 'welcome_group',
			'linkText' => array(
				'type' => 0,
				'text' => 'Amministrazione' 
			),
			'linkIcon' => array(
				'style' => 0 
			),
			'items' => array( 
				'welcome_item1',
				'welcome_item2',
				'welcome_item3' 
			) 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkTable' => 'primocolloqio',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'primocolloqio',
				'type' => 6 
			),
			'linkIcon' => array(
				'style' => 0 
			),
			'linkType' => 0,
			'linkNewTab' => true 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'affidamenti_np',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'affidamenti_np',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'calendar',
				'style' => 0 
			),
			'linkComments' => array(
				'type' => 0,
				'text' => '' 
			),
			'background' => '#e8926f',
			'linkType' => 0,
			'linkNewTab' => true 
		) 
	),
	'version' => 13,
	'pageWidth' => 'full',
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'transparent',
	'imagePosition' => 'right',
	'welcomePageStay' => true,
	'listTotals' => 1,
	'title' => array(
		 
	),
	'cardStyle' => array(
		 
	),
	'welcomeStyle' => 3 
);
		?>