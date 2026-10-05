<?php
global $runnerTableSettings, $originalGlobalTableSettings;
$runnerTableSettings[ GLOBAL_PAGES ] = array(
	'name' => '<global>',
	'type' => 5,
	'shortName' => '_global',
	'advancedSecurityType' => 0,
	'pagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		),
		'userinfo' => array( 
			'userinfo' 
		) 
	),
	'pageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo' 
	),
	'defaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo' 
	),
	'originalPagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		),
		'userinfo' => array( 
			'userinfo' 
		) 
	),
	'originalPageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo' 
	),
	'originalDefaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo' 
	),
	'hasJsEvents' => false 
);

//	settings will be restored from here in case of logout
$originalGlobalTableSettings = $runnerTableSettings[ GLOBAL_PAGES ];

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'Italian' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		 
	) 
);
}
?>