<?php

require_once 'config/bootstrap.php';
// require 'config/session.php';

print_r($_POST);

$requestAction = $_POST['formAction'];
$FormData = array_slice($_POST, 1, count($_POST) - 2);

$DB->SelectTable("testimonials");

foreach ($FormData as $key => $value) {
	if (empty($value)) {
		unset($FormData[$key]);
	}
}

switch ($requestAction) {
case $requestAction == "post":
	$response = $TestimonialController->Add($FormData);
	print_r($response);
	break;
case $requestAction == "update":
	$TestimonialController->Edit($FormData);
	break;
case $requestAction == "delete":
	$TestimonialController->Delete($FormData);
	break;
default:
	echo "Invalid Request";
	break;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;