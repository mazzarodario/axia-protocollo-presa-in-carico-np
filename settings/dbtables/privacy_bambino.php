<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['privacy_bambino'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'paziente',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'firmatario',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'clausola1',
			'type' => 200,
			'size' => 1,
			'scale' => 0,
			'typeName' => 'varchar(1)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '' 
		),
		array(
			'name' => 'clausola2',
			'type' => 200,
			'size' => 1,
			'scale' => 0,
			'typeName' => 'varchar(1)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '' 
		),
		array(
			'name' => 'clausola3',
			'type' => 200,
			'size' => 1,
			'scale' => 0,
			'typeName' => 'varchar(1)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '' 
		),
		array(
			'name' => 'clausola4',
			'type' => 200,
			'size' => 1,
			'scale' => 0,
			'typeName' => 'varchar(1)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '' 
		),
		array(
			'name' => 'data_firma',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'firma_paziente',
			'type' => 205,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'mediumblob',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'privacy_bambino' 
);
?>