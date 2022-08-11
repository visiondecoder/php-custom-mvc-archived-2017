<?php

namespace app\Controller;

require '../../config/bootstrap.php';

/**
 *
 */
class AdminController {

	private $DB;
	private $userTable = "admins";
	private $responseMessage;

	function __construct($DB) {
		$this->DB = $DB;
		$this->DB->selectTable($this->userTable);
	}

	public function UserAlreadyRegister($email) {
		$condition = ['email' => $email];
		$emailResult = $this->DB->SelectAllWhere($condition);
		if ($emailResult->num_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function VerifyPassword($userData) {
		$userSecret = $this->DB->SelectColumnWhere('secret', ['email' => $userData['email']]);
		// $hashSecret = sha1($userData['secret']);
		if ($userSecret == $userData['secret']) {
			return true;
		} else {
			return false;
		}
	}

	public function Login($userData) {
		$isUserExists = $this->UserAlreadyRegister($userData['email']);
		if ($isUserExists) {
			$secretMatch = $this->VerifyPassword($userData);
			if ($secretMatch) {
				// start user session
				session_start();
				$_SESSION['userEmail'] = $userData['email'];
				$_SESSION['loginStatus'] = true;
				header("Location: ../../admin-panel/index.php");
				exit;
			} else {
				return $this->responseMessage = "Invalid Credential";
			}
		} else {
			return $this->responseMessage = "Email not registered";
		}
	}

}

$ADMIN = new AdminController($DB);

// get form data
$requestAction = $_REQUEST['formAction'];
$userData = array_slice($_REQUEST, 1, count($_REQUEST) - 2);

if (empty($userData['email']) || empty($userData['secret'])) {
	header("Location:" . $domainName . "admin-login.php?res=0");
	exit;
} else {
	// hash password
	foreach ($userData as $key => $value) {
		if ($key == "secret") {
			$userData[$key] = sha1($value);
		}
	}

	// call action as per request
	switch ($requestAction) {
	case $requestAction == "login":
		$response = $ADMIN->Login($userData);
		$response = urlencode($response);
		header("Location: " . $domainName . "admin-login.php?res=$response");
		break;
	default:
		echo "Invalid Request";
		break;
	}

}
