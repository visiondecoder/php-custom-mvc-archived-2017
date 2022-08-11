<?php

require_once '../config/bootstrap.php';

$Id = $_GET['id'];

$DB->SelectTable('testimonials');
$DB->Delete(['id' => $Id]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;