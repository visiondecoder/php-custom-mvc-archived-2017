<?php

namespace app\Controller;

/**
 *
 */
class ProductController {
	private $actionArray = ["post", "get", "update", "delete"];
	public $requestAction;
	private $productTable = "products";
	public $DB;
	private $productImageTable = "product_images";

	function __construct($DB) {
		$this->DB = $DB;
		$this->DB->selectTable($this->productTable);
	}

	public function SetAction($requestAction) {
		$this->requestAction = $requestAction;
		$this->ValidateRequest();
	}

	public function ValidateRequest() {
		if (!in_array($this->requestAction, $this->actionArray)) {
			echo "invalid request";
			exit;
		}
		return true;
	}

	public function Add($productData, $fileNames) {
		$id = $this->DB->Insert($productData);
		$productId = ['product_id' => $id];
		foreach ($fileNames as $fileName) {
			$product_images = array_merge($fileName, $productId);
			$this->DB->selectTable($this->productImageTable);
			$this->DB->Insert($product_images);
		}

	}

	public function Delete($productData) {
		$condition = ['id' => $productData['id']];
		$this->DB->Delete($condition);

		$condition = ['product_id' => $productData['id']];
		$this->DB->selectTable($this->productImageTable);
		$this->DB->Delete($condition);
	}

	public function Show($id) {
		$condition = ['id' => $id];
		$products = [];
		$productResult = $this->DB->SelectAllWhere($condition);
		while ($records = $productResult->fetch_assoc()) {
			$product[] = $records;
		}
		return $product;
	}

	public function ShowAll() {
		$productResult = $this->DB->SelectAll();
		while ($records = $productResult->fetch_assoc()) {
			$products[] = $records;
		}
		return $products;
	}

	public function FetchAllImages($productId) {
		$this->DB->SelectTable('product_images');
		$condition = ['product_id' => $productId];
		$imageResult = $this->DB->SelectAllWhere($condition);
		while ($records = $imageResult->fetch_assoc()) {
			$productImages[] = $records;
		}
		return $productImages;
	}

	// public function Update($productData) {
	// 	$condition = ['id' => $productData['id']];
	// 	array_shift($productData);
	// 	$this->DB->Update($productData, $condition);
	// }

	public function Update($productData, $fileNames) {
		$condition = ['id' => $productData['id']];
		// array_shift($productData);
		$this->DB->Update($productData, $condition);
		$productId = ['product_id' => $productData['id']];
		if (!empty($fileNames)) {
			foreach ($fileNames as $fileName) {
				$product_images = array_merge($fileName, $productId);
				// print_r($product_images);
				$this->DB->selectTable($this->productImageTable);
				$this->DB->Insert($product_images);
			}
		}
		return true;
	}

	public function ShowImports() {
		$p = $this->productTable;
		$pi = $this->productImageTable;
		$query = "SELECT $p.id, $p.title, $p.description, $p.type, $pi.image_name FROM $p
      INNER JOIN product_images ON $pi.product_id = $p.id
      WHERE $p.type = 'import'
      GROUP BY $p.id
      ORDER BY $p.id DESC";
		$result = $this->DB->query($query);
		return $result;
	}

	public function ShowExports() {
		$p = $this->productTable;
		$pi = $this->productImageTable;
		$query = "SELECT $p.id, $p.title, $p.description, $p.type, $pi.image_name FROM $p
      INNER JOIN product_images ON $pi.product_id = $p.id
      WHERE $p.type = 'export'
      GROUP BY $p.id
      ORDER BY $p.id DESC";
		$result = $this->DB->query($query);
		return $result;
	}

	public function ShowImportsLimit($limit) {
		$p = $this->productTable;
		$pi = $this->productImageTable;
		$query = "SELECT $p.id, $p.title, $p.description, $p.type, $pi.image_name FROM $p
      INNER JOIN product_images ON $pi.product_id = $p.id
      WHERE $p.type = 'import'
      GROUP BY $p.id
      ORDER BY $p.id DESC LIMIT $limit";
		$result = $this->DB->query($query);
		return $result;
	}

	public function ShowExportsLimit($limit) {
		$p = $this->productTable;
		$pi = $this->productImageTable;
		$query = "SELECT $p.id, $p.title, $p.description, $p.type, $pi.image_name FROM $p
      INNER JOIN product_images ON $pi.product_id = $p.id
      WHERE $p.type = 'export'
      GROUP BY $p.id
      ORDER BY $p.id DESC LIMIT $limit";
		$result = $this->DB->query($query);
		return $result;
	}

}
