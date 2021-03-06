<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema boletería Cooperativa de transportes "Unión Cariamanga"',
         'theme'=>'personalizado',
         'language'=>'es',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.controllers.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'boleteria',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            'Smtpmail'=>array(
                    'class'=>'application.extensions.smtpmail.PHPMailer',
                    'Host'=>"smtp.gmail.com",
                    'Username'=>'frsisalimao@gmail.com',
                    'Password'=>'1105012866',
                    'Mailer'=>'smtp',
                    'Port'=>587,
                    'SMTPAuth'=>true, 
                    'SMTPSecure' => 'tls',
              ),
          //  http://www.yiiframework.com/extension/smtp-mail
          //http://stackoverflow.com/questions/17227532/gmail-530-5-5-1-authentication-required-learn-more-at
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'urlSuffix'=>'.html',
                    
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                            
			),
		),
	
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=boleteria_cariamanga',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'fabricio',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
	'adminEmail'=>'frsisalimao@gmail.com',
             'encryptionKey'=>'lvkj23mn5j25KJE5r',
	),
);