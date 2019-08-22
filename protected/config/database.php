<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql:host=localhost;dbname=ytaborda_site', // DSN
	// 'username'         => 'ytaborda_site',
	// 'password'         => '!8Zn!v=ZTXCv',
	'username'         => 'root',
	'password'         => '123456',
	'class'            => 'CDbConnection',
	'emulatePrepare'   => true,
	'charset'          => 'utf8',
);