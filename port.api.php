<?php

require_once 'config/bootstrap.php';
require 'config/session.php';

$requestAction = $_POST['formAction'];
$portData = array_slice($_POST, 1, count($_POST) - 2);

$DB->SelectTable("ports");

switch ($requestAction) {
case $requestAction == "post":
	$response = $PortController->AddPort($portData);
	print_r($response);
	break;
case $requestAction == "update":
	$PortController->Update($portData);
	$response = $PortController->Update($portData);
	break;
default:
	echo "Invalid Request";
	break;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;