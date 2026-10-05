<?php
$runnerProjectSettings = array(
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'anagrafe' => array(
			'table' => 29019 
		),
		'impegnative' => array(
			'table' => 29135 
		),
		'scheda_firma_privato' => array(
			'table' => 29297 
		),
		'primocolloqio' => array(
			'table' => 29368 
		),
		'utenti' => array(
			'table' => 29543 
		),
		'privacy_adulto' => array(
			'table' => 29623 
		),
		'privacy_bambino' => array(
			'table' => 29666 
		),
		'affidamenti_np' => array(
			'table' => 29903 
		) 
	),
	'customTemplates' => array( 
		'header' 
	),
	'userTableKeys' => array( 
		'ID' 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => 'utenti',
		'loginForm' => 0,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			array(
				'type' => '%db',
				'name' => 'db',
				'active' => true,
				'label' => array(
					'text' => 'Database',
					'type' => 0 
				),
				'code' => '00',
				'table' => array(
					'connId' => 'conn',
					'table' => 'utenti' 
				),
				'usernameField' => 'USER',
				'passwordField' => 'PASS',
				'emailField' => null,
				'extUserIdField' => 'ext_security_id',
				'fullnameField' => 'NOME',
				'userpicField' => '',
				'userGroupField' => 'NOME' 
			) 
		),
		'enabled' => true,
		'advancedSecurityAvailable' => true,
		'userGroupsAvailable' => true,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '00',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'ZTbWDUFYaUMS3xC9aQoG',
			'JWTSecret' => 'JYlYMM0tGwjcuLLjHH3c' 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			),
			'registerPage' => false 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => 'denj@riabonline.net',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'smtp.gmail.com',
			'SMTPPort' => 465,
			'SMTPUser' => 'denj@riabonline.net',
			'SMTPPassword' => 'Denj2026!',
			'securityProtocol' => 1,
			'provider' => 0,
			'oauthUserEmail' => '',
			'oauthSettingsJson' => '',
			'oauthClientId' => '',
			'oauthClientSecret' => '',
			'oauthTenantId' => '' 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 0,
			'loggingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'tables' => array(
				 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				'<Default>' => array(
					'permissions' => array(
						'anagrafe' => array(
							'mask' => 'SP',
							'table' => 'anagrafe',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'impegnative' => array(
							'mask' => 'SP',
							'table' => 'impegnative',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'scheda_firma_privato' => array(
							'mask' => 'SP',
							'table' => 'scheda_firma_privato',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'primocolloqio' => array(
							'mask' => 'SP',
							'table' => 'primocolloqio',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'<global>' => array(
							'mask' => '',
							'table' => '<global>',
							'restrictedPages' => array(
								'menu' => true 
							) 
						),
						'privacy_adulto' => array(
							'mask' => 'SP',
							'table' => 'privacy_adulto',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'privacy_bambino' => array(
							'mask' => 'SP',
							'table' => 'privacy_bambino',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						),
						'affidamenti_np' => array(
							'mask' => 'SP',
							'table' => 'affidamenti_np',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => true 
							) 
						) 
					),
					'admin' => false,
					'username' => '<Default>' 
				),
				'MAZZARO DARIO' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'anagrafe' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'import' => false 
							) 
						),
						'impegnative' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'import' => false 
							) 
						),
						'primocolloqio' => array(
							'mask' => 'SPI',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'import' => false 
							) 
						),
						'scheda_firma_privato' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'import' => false 
							) 
						),
						'utenti' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'privacy_adulto' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'privacy_bambino' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'affidamenti_np' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						) 
					) 
				),
				'Segreteria' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'anagrafe' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'impegnative' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'primocolloqio' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true,
								'edit' => true 
							) 
						),
						'scheda_firma_privato' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'utenti' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'privacy_adulto' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'privacy_bambino' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'affidamenti_np' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						) 
					) 
				),
				'Paolino Erika' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'anagrafe' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'impegnative' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'primocolloqio' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true,
								'edit' => true 
							) 
						),
						'scheda_firma_privato' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'utenti' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'privacy_adulto' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'privacy_bambino' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'affidamenti_np' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						) 
					) 
				),
				'Rossi Desiree' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'anagrafe' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'impegnative' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'primocolloqio' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true,
								'edit' => true 
							) 
						),
						'scheda_firma_privato' => array(
							'mask' => 'ESP',
							'table' => '',
							'restrictedPages' => array(
								'import' => true,
								'add' => true 
							) 
						),
						'utenti' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'privacy_adulto' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'privacy_bambino' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						),
						'affidamenti_np' => array(
							'mask' => 'SP',
							'table' => '',
							'restrictedPages' => array(
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false 
							) 
						) 
					) 
				) 
			) 
		),
		'dbProvider' => array(
			'type' => '%db',
			'name' => 'db',
			'active' => true,
			'label' => array(
				'text' => 'Database',
				'type' => 0 
			),
			'code' => '00',
			'table' => array(
				'connId' => 'conn',
				'table' => 'utenti' 
			),
			'usernameField' => 'USER',
			'passwordField' => 'PASS',
			'emailField' => null,
			'extUserIdField' => 'ext_security_id',
			'fullnameField' => 'NOME',
			'userpicField' => '',
			'userGroupField' => 'NOME' 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			'00' 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'anagrafe' => array(
			'gid' => 29019,
			'name' => 'anagrafe',
			'shortName' => 'anagrafe',
			'type' => 0,
			'caption' => array(
				'English' => 'Anagrafe' 
			),
			'connId' => 'conn',
			'color' => '9acd32',
			'originalTable' => 'anagrafe' 
		),
		'impegnative' => array(
			'gid' => 29135,
			'name' => 'impegnative',
			'shortName' => 'impegnative',
			'type' => 0,
			'caption' => array(
				'English' => 'Impegnative' 
			),
			'connId' => 'conn',
			'color' => 'e07878',
			'originalTable' => 'impegnative' 
		),
		'scheda_firma_privato' => array(
			'gid' => 29297,
			'name' => 'scheda_firma_privato',
			'shortName' => 'scheda_firma_privato',
			'type' => 0,
			'caption' => array(
				'English' => 'Scheda Firma Privato' 
			),
			'connId' => 'conn',
			'color' => 'cd853f',
			'originalTable' => 'scheda_firma_privato' 
		),
		'primocolloqio' => array(
			'gid' => 29368,
			'name' => 'primocolloqio',
			'shortName' => 'primocolloqio',
			'type' => 0,
			'caption' => array(
				'English' => 'Primocolloqio' 
			),
			'connId' => 'conn',
			'color' => 'cd5c5c',
			'originalTable' => 'primocolloqio' 
		),
		'utenti' => array(
			'gid' => 29543,
			'name' => 'utenti',
			'shortName' => 'utenti',
			'type' => 0,
			'caption' => array(
				'Italian' => 'Utenti' 
			),
			'connId' => 'conn',
			'color' => '4169e1',
			'originalTable' => 'utenti' 
		),
		'privacy_adulto' => array(
			'gid' => 29623,
			'name' => 'privacy_adulto',
			'shortName' => 'privacy_adulto',
			'type' => 0,
			'caption' => array(
				'Italian' => 'Privacy Adulto' 
			),
			'connId' => 'conn',
			'color' => '4169e1',
			'originalTable' => 'privacy_adulto' 
		),
		'privacy_bambino' => array(
			'gid' => 29666,
			'name' => 'privacy_bambino',
			'shortName' => 'privacy_bambino',
			'type' => 0,
			'caption' => array(
				'Italian' => 'Privacy Bambino' 
			),
			'connId' => 'conn',
			'color' => 'b22222',
			'originalTable' => 'privacy_bambino' 
		),
		'affidamenti_np' => array(
			'gid' => 29903,
			'name' => 'affidamenti_np',
			'shortName' => 'affidamenti_np',
			'type' => 0,
			'caption' => array(
				'Italian' => 'Affidamenti Np' 
			),
			'connId' => 'conn',
			'color' => 'e8926f',
			'originalTable' => 'affidamenti_np' 
		) 
	),
	'tablesByShort' => array(
		'anagrafe' => 'anagrafe',
		'impegnative' => 'impegnative',
		'scheda_firma_privato' => 'scheda_firma_privato',
		'primocolloqio' => 'primocolloqio',
		'utenti' => 'utenti',
		'privacy_adulto' => 'privacy_adulto',
		'privacy_bambino' => 'privacy_bambino',
		'affidamenti_np' => 'affidamenti_np' 
	),
	'tablesByGood' => array(
		'anagrafe' => 'anagrafe',
		'impegnative' => 'impegnative',
		'scheda_firma_privato' => 'scheda_firma_privato',
		'primocolloqio' => 'primocolloqio',
		'utenti' => 'utenti',
		'privacy_adulto' => 'privacy_adulto',
		'privacy_bambino' => 'privacy_bambino',
		'affidamenti_np' => 'affidamenti_np' 
	),
	'events' => array( 
		 
	),
	'languages' => array( 
		array(
			'name' => 'Italian',
			'nativeName' => 'Italiano',
			'rtl' => false,
			'filename' => 'Italian.lng' 
		) 
	),
	'languageNames' => array( 
		'Italian' 
	),
	'defaultLanguage' => 'Italian',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'settingsTable' => array(
		'connId' => '',
		'table' => '' 
	),
	'wizardBuild' => '44456',
	'projectBuild' => 'Ct5UtQzEEVxc',
	'projectTheme' => 'futuro',
	'projectSize' => 'small',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '',
		'cloudGoogleCloudAccessKey' => '',
		'cloudGoogleCloudSecret' => '',
		'cloudGoogleCloudBucket' => '',
		'cloudAzureAccountName' => '',
		'cloudAzureAccountKey' => '',
		'cloudAzureContainer' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'Italian' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>