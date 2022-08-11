<?php

require_once 'bootstrap.php';

session_start();
//
// // true when user logged in
// $_SESSION['loginStatus'] = false;
//
if ($_SESSION['loginStatus'] !== true || empty($_SESSION['loginStatus'])) {
	// redirect to login
	header("Location: $domainName");
	exit;
}
