<?php

require_once 'config/bootstrap.php';

$requestAction = $_POST['formAction'];
$productData = array_slice($_POST, 1, count($_POST) - 2);

$Product = new app\Controller\ProductController($DB);
$Product->SetAction($requestAction);

// add timestamp
$productData['created_at'] = APP_TIMESTAMP;

// -------------------- //
// initialize image upload class
// user id prefix for unique file name
$DB->SelectTable("products");
$lastProductId = $DB->SelectColumn('id');
$lastProudctId = (!$lastProductId) ? 0 : $DB->SelectColumn('id');
$prefix = $lastProudctId + 1 . "_";

// set file upload path
$uploadPath = "uploads/";
$ImageUpload->SetUploadPath($uploadPath);

$fileArray = [];

// add products
if ($requestAction == "post" && !empty($_FILES) && isset($_FILES['productImages']) && $_FILES['productImages']['size'][0] != 0) {

	$prefix = $lastProudctId + 1 . "_";

// read files info
	$isError = $ImageUpload->ReadFiles($_FILES['productImages']);
	if (!$isError) {
		// if no error then uplaod file
		$ImageUpload->UploadFiles($prefix);
	}

// check file upload status in array
	$fileNames = $ImageUpload->getFileNames();
	$fileArray = [];
	foreach ($fileNames as $fileName) {
		$fileArray[]['image_name'] = $fileName;
	}
// print_r($fileArray);
	// $lastFile = end($fileNames);

// delete file
	// $ImageUpload->DeleteFile($lastFile);
	// -------------------- //
}

// updat product
// add products
if ($requestAction == "update" && !empty($_FILES) && isset($_FILES['productImages']) && $_FILES['productImages']['size'][0] != 0) {

	$prefix = $productData['id'] + 0 . "_";

// read files info
	$isError = $ImageUpload->ReadFiles($_FILES['productImages']);
	if (!$isError) {
		// if no error then uplaod file
		$ImageUpload->UploadFiles($prefix);
	}

// check file upload status in array
	$fileNames = $ImageUpload->getFileNames();
	$fileArray = [];
	foreach ($fileNames as $fileName) {
		$fileArray[]['image_name'] = $fileName;
	}
// print_r($fileArray);
	// $lastFile = end($fileNames);

// delete file
	// $ImageUpload->DeleteFile($lastFile);
	// -------------------- //
}

// print_r($fileArray);
// $lastFile = end($fileNames);

// delete file
// $ImageUpload->DeleteFile($lastFile);
// -------------------- //

if ($Product->ValidateRequest()) {
	switch ($requestAction) {
	case $requestAction == "get":
		$products = $Product->ShowAll();
		echo $products;
		break;
	case $requestAction == "post":
		$Product->Add($productData, $fileArray);
		break;
	case $requestAction == "delete":
		$Product->Delete($productData);
		break;
	case $requestAction == "update":
		// $Product->Update($productData);
		$response = $Product->Update($productData, $fileArray);
		break;
	default:
		echo "Invalid Request";
		break;
	}

}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;