<?php

// set error reporting
require 'error_report.php';

// app
require 'app.php';

// load packages
require_once __DIR__ . '/../vendor/autoload.php';

// composer packages

// initialize classes
// custom packages
$DB = new visiondecoder\Packages\Database\DB();
$CMS = new visiondecoder\Packages\CMS\CMS($DB);
$ImageUpload = new visiondecoder\Packages\FileUpload\Image();

// controllers
$ProductController = new app\Controller\ProductController($DB);
$PortController = new app\Controller\PortController($DB);
$TestimonialController = new app\Controller\TestimonialController($DB);

// get cms common data
// $CMS->setDbConnection($DB);
// $DB->SelectTable('cms_contents');
// $website = $CMS->getWebsiteUrl();
// $CMS->setWebsiteUrl($domainName);
// $website = $CMS->getWebsiteUrl();

// echo $website;
