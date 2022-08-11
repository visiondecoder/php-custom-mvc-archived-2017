<?php

require 'config/bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST) && isset($_POST['joinus'])) {

	$companyname = $_POST['companyname'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mail = new PHPMailer(true); // Passing `true` enables exceptions
	// try {
	//Server settings
	$mail->SMTPDebug = 2; // Enable verbose debug output
	$mail->isSMTP(); // Set mailer to use SMTP
	// $mail->Host = 'boxmail.in';  // Specify main and backup SMTP servers
	$mail->Host = "smtp.hostinger.in"; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = "info@localhost.com"; // SMTP username
	$mail->Password = ""; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to

//Recipients
	$mail->setFrom("info@localhost.com", 'Orafs');
	$mail->addAddress("info@localhost.com"); // Add a recipient
	// $mail->addAddress('shoaib.qadri92@gmail.com', 'Shoaib Qureshi');               // Name is optional
	// $mail->addReplyTo('info@example.com', 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

//Attachments
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true,
		),
	);

//Content
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = 'Orafs : Join Us Request';
	$mail->Body = "You have request from Website.
Company Name: $companyname,
Name: $name,
Email: $email,
Contact No.: $number,
Subject: $subject,
Message: $message.";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// $mail->send();
	if (!$mail->send()) {
		// echo "Mailer Error: " . $mail->ErrorInfo;
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=f');
	} else {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=s');
	}
//     echo 'Message has been sent';
	// } catch (Exception $e) {
	// echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	// }

}

if (isset($_POST) && isset($_POST['contactus'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mail = new PHPMailer(true); // Passing `true` enables exceptions
	// try {
	//Server settings
	$mail->SMTPDebug = 2; // Enable verbose debug output
	$mail->isSMTP(); // Set mailer to use SMTP
	// $mail->Host = 'boxmail.in';  // Specify main and backup SMTP servers
	$mail->Host = "smtp.hostinger.in"; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = "info@localhost.com"; // SMTP username
	$mail->Password = ""; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587; // TCP port to connect to

//Recipients
	$mail->setFrom("info@localhost.com", 'Orafs');
	$mail->addAddress("info@localhost.com"); // Add a recipient
	// $mail->addAddress('shoaib.qadri92@gmail.com', 'Shoaib Qureshi');               // Name is optional
	// $mail->addReplyTo('info@example.com', 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

//Attachments
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true,
		),
	);

//Content
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = 'Orafs : Contact Us';
	$mail->Body = "You have an enquiry from Website.
Name: $name,
Email: $email,
Subject: $subject,
Message: $message.";
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// $mail->send();
	if (!$mail->send()) {
		// echo "Mailer Error: " . $mail->ErrorInfo;
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=f');
	} else {
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '?r=s');
	}
//     echo 'Message has been sent';
	// } catch (Exception $e) {
	// echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	// }

}
