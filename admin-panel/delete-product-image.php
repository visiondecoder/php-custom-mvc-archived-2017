<?php

require_once '../config/bootstrap.php';

// delete product image
if (isset($_GET['del'])) {
	$condition = ['id' => $_GET['del']];
	$DB->SelectTable('product_images');
	$imageName = $DB->SelectColumnWhere('image_name', $condition);
	if (unlink("../uploads/$imageName")) {
		if ($DB->Delete($condition)) {
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}

	}
}
