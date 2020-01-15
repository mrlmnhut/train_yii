<?php /** @noinspection PhpVariableNamingConventionInspection */

use yii\web\Request;

$base_url = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
$params   = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id'                  => 'app-frontend',
	'basePath'            => dirname(__DIR__),
	'bootstrap'           => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components'          => [
		'request'      => [
			'csrfParam' => '_csrf-frontend',
		],
		'user'         => [
			'identityClass'   => 'common\models\User',
			'enableAutoLogin' => TRUE,
			'identityCookie'  => ['name' => '_identity-frontend', 'httpOnly' => TRUE],
		],
		'session'      => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'log'          => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets'    => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'request'      => [
			'baseUrl' => $base_url,
		],
		'urlManager'   => [
			'baseUrl'         => $base_url,
			'enablePrettyUrl' => TRUE,
			'showScriptName'  => FALSE,
			'rules'           => [
				"/" => "/home/",
			],
		],
	],
	'params'              => $params,
];
