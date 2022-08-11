<?php

require_once '../config/bootstrap.php';

$portId = $_GET['id'];

$DB->SelectTable('ports');
$DB->Delete(['id' => $portId]);
header('Location: '.$_SERVER['HTTP_REFERER'])
exit;