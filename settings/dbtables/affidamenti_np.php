<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['affidamenti_np'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id_affidamento',
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
			'name' => 'data_richiesta',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'utente_richiesta',
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
			'name' => 'cognome_e_nome',
			'type' => 200,
			'size' => 50,
			'scale' => 0,
			'typeName' => 'varchar(50)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'data_di_nascita',
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
			'name' => 'sesso',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'M\',\'F\')',
			'enumValues' => array( 
				'M',
				'F' 
			),
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'eta_evolutiva_o_adulta',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'A\',\'B\')',
			'enumValues' => array( 
				'A',
				'B' 
			),
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'settore',
			'type' => 129,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'enum(\'NP\',\'PM\')',
			'enumValues' => array( 
				'NP',
				'PM' 
			),
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'distretto',
			'type' => 200,
			'size' => 8,
			'scale' => 0,
			'typeName' => 'varchar(8)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => 'P',
			'defaultValue' => '' 
		),
		array(
			'name' => 'recapito',
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
			'name' => 'idprodotto',
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
			'name' => 'tipo_valutazione',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'terapista',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'mail_terapista',
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
			'name' => 'note',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'text',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'mail_inviata_il',
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
			'name' => 'id_utente',
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
			'name' => 'data_abbinamento',
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
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => 'current_timestamp()',
			'defaultValue' => 'CURRENT_TIMESTAMP' 
		) 
	),
	'primaryKeys' => array( 
		'id_affidamento' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'affidamenti_np' 
);
?>