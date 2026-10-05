<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['dipendenti'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id_nominativo',
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
			'name' => 'cognome_e_nome',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'data_di_nascita',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'indirizzo',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'localita',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'telefono',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'mail',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'TelefonoLavoro',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'luogo_di_nascita',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'codice_fiscale',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'partita_iva',
			'type' => 200,
			'size' => 15,
			'scale' => 0,
			'typeName' => 'varchar(15)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'banca',
			'type' => 200,
			'size' => 20,
			'scale' => 0,
			'typeName' => 'varchar(20)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'iban',
			'type' => 200,
			'size' => 27,
			'scale' => 0,
			'typeName' => 'varchar(27)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'data_di_assunzione',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'data_di_licenziamento',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'professione',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'posizione',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'livello_contrattuale',
			'type' => 200,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'varchar(4)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ore_settimanali',
			'type' => 200,
			'size' => 2,
			'scale' => 0,
			'typeName' => 'varchar(2)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'attivo',
			'type' => 16,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'tinyint(4)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'centro_di_costo',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'idfocus',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'riserva',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'riserva2',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'tinytext',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'riserva3',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ultima_modifica',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'timestamp',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => 'current_timestamp()',
			'defaultValue' => 'CURRENT_TIMESTAMP' 
		),
		array(
			'name' => 'socio',
			'type' => 200,
			'size' => 1,
			'scale' => 0,
			'typeName' => 'varchar(1)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'id_nominativo' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'dipendenti' 
);
?>