<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['codici_patologia'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'codice',
			'type' => 200,
			'size' => 10,
			'scale' => 0,
			'typeName' => 'varchar(10)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'descrizione',
			'type' => 200,
			'size' => 80,
			'scale' => 0,
			'typeName' => 'varchar(80)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'descrizione2',
			'type' => 200,
			'size' => 150,
			'scale' => 0,
			'typeName' => 'varchar(150)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ulteriore_descrizione',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'codici patologia' 
);
?>