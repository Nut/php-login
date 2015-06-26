<?php

return [
	'app' => [
		'url' => 'http://localhost',
		'hash' => [
			'algo' => PASSWORD_BCRYPT,
			'cost' => 10
		]
	],

	'db' => [
		'driver' => 'mysql',
		'host' => '127.0.0.1',
		'name' => 'site',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => ''
	],

	'auth' => [
		'session' => 'user_id',
		'remember' => 'user_r'
	],

	'mail' => [
		'smpt_auth' => true,
		'smpt_secure' => 'tls',
		'host' => '',
		'username' => '',
		'password' => '',
		'port' => 25,
		'html' => true
	],

	'twig' => [
		'debug' => true
	],

	'csrf' => [
		'session' => 'csrf_token'
	]
];