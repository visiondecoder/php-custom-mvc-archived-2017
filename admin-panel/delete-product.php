<?php

require_once '../config/bootstrap.php';

if (isset($_GET['id'])) {

	$condition = ['product_id' => $_GET['id']];

	$DB->SelectTable('product_images');
	$productImg = $DB->SelectAllWhere($condition);

	while ($images = $productImg->fetch_assoc()) {
		if (!empty($images['image_name'])) {
			unlink("../uploads/" . $images['image_name']);
		}

		$condition = ['image_name' => $images['image_name']];
		$DB->SelectTable('product_images');
		$DB->Delete($condition);

	}

	$condition = ['id' => $_GET['id']];
	$DB->SelectTable('products');
	$DB->Delete($condition);

	header('Location: ' . $_SERVER['HTTP_REFERER']);

}