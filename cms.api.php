<?php

require_once 'config/bootstrap.php';
// print_r($_POST);
$requestAction = $_POST['formAction'];
$Data = array_slice($_POST, 1, count($_POST) - 2);

$fileArray = "";

// website logo
if (!empty($_FILES) && isset($_FILES['website_logo']) && $_FILES['website_logo']['size'][0] != 0) {

// set file upload path
	{
		$uploadPath = "uploads/";
	}

	$ImageUpload->SetUploadPath($uploadPath);

// read files info
	$isError = $ImageUpload->ReadFiles($_FILES['website_logo']);
	if (!$isError) {
		// if no error then uplaod file
		$ImageUpload->UploadFiles("website_logo_");
	}

// check file upload status in array
	$fileNames = $ImageUpload->getFileNames();
	$fileArray = [];
	foreach ($fileNames as $fileName) {
		$fileArray[]['website_logo'] = $fileName;
	}

}

// website logo end

// home slider
if (!empty($_FILES) && isset($_FILES['homesliders']) && $_FILES['homesliders']['size'][0] != 0) {

// set file upload path
	{
		$uploadPath = "uploads/";
	}

	$ImageUpload->SetUploadPath($uploadPath);

// read files info
	$isError = $ImageUpload->ReadFiles($_FILES['homesliders']);
	if (!$isError) {
		// if no error then uplaod file
		$ImageUpload->UploadFiles("homeslider_");
	}

// check file upload status in array
	$fileNames = $ImageUpload->getFileNames();
	$fileArray = [];

	$sliderKey = "";
	foreach ($Data as $key => $value) {
		$sliderKey = $key;
	}

	$sliderNumber = substr($sliderKey, -1);
	foreach ($fileNames as $fileName) {
		$fileArray[]["slider" . $sliderNumber] = $fileName;
	}

}

// about image
if (!empty($_FILES) && isset($_FILES['aboutImage']) && $_FILES['aboutImage']['size'][0] != 0) {

// set file upload path
	{
		$uploadPath = "uploads/";
	}

	$ImageUpload->SetUploadPath($uploadPath);

// read files info
	$isError = $ImageUpload->ReadFiles($_FILES['aboutImage']);
	if (!$isError) {
		// if no error then uplaod file
		$ImageUpload->UploadFiles("aboutimage_");
	}

// check file upload status in array
	$fileNames = $ImageUpload->getFileNames();
	$fileArray = [];
	foreach ($fileNames as $fileName) {
		$fileArray[]['image1'] = $fileName;
	}

}

// about image
// print_r($fileArray);
// die();

switch ($requestAction) {
case $requestAction == "website_logo":
	$CMS->DB->SelectTable('cms_contents');
	$response = $CMS->setWebsiteLogo($fileArray);
	print_r($response);
	break;
case $requestAction == "top_menu":
	$CMS->DB->SelectTable('menus');
	$response = $CMS->UpdateMenu($Data);
	print_r($response);
	break;
case $requestAction == "footer_contact":
	$CMS->DB->SelectTable('cms_contents');
	$response = $CMS->UpdateCMS($Data);
	print_r($response);
	break;
case $requestAction == "social_link":
	$CMS->DB->SelectTable('cms_contents');
	$response = $CMS->UpdateCMS($Data);
	print_r($response);
	break;
case $requestAction == "homeslider":
	$CMS->DB->SelectTable('sliders');
	$response = $CMS->setHomeSlider($Data, $fileArray);
	print_r($response);
	break;
case $requestAction == "homeabout":
	$CMS->DB->SelectTable('cms_pages');
	$CMS->setPage('about');
	$response = $CMS->setHomeAbout($Data, $fileArray);
	print_r($response);
	break;
case $requestAction == "contact":
	$CMS->DB->SelectTable('cms_pages');
	$CMS->setPage('contact');
	$response = $CMS->UpdateContact($Data);
	print_r($response);
	break;
case $requestAction == "get":
default:
	echo "Invalid Request";
	break;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;