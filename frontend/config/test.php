<?php
return [
	'id'         => 'app-frontend-tests',
	'components' => [
		'assetManager' => [
			'basePath' => __DIR__ . '/../web/assets',
		],
		'urlManager'   => [
			'showScriptName' => TRUE,
		],
		'request'      => [
			'cookieValidationKey' => 'test',
		],
	],
];
