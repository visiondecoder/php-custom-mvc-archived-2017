<?php

// routes & paths

// app models, values are table name
$appModels = [
	'test' => 'test_table',
	'products' => 'products',
];

define('ROOT_DOMAIN', 'http://localhost/');
// define('APP_MODELS', $appModels);
define('VIEWS', 'views/');

// var
define('APP_TIMESTAMP', date("Y-m-d H:i:s"));

//
$productImageTable = 'product_images';

//
$domainName = 'http://localhost/';
$viewLogin = 'login';

$uploadPath = $domainName . 'uploads/';