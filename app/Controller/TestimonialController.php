<?php

namespace app\Controller;

/**
 *
 */
class TestimonialController {

	public $DB;
	public $TestimonialTablel;

	function __construct($DB) {
		# code...
		$this->DB = $DB;
	}

	public function Add($Data) {
		$this->DB->Insert($Data);
	}

	public function GetAll() {
		$result = $this->DB->SelectAll();
		return $result;
	}

	public function GetOne($id) {
		$result = $this->DB->SelectAllWhere(['id' => $id]);
		return $result;
	}

	public function GetRandom() {
		$result = $this->DB->query("SELECT * from testimonials ORDER BY RAND()");
		return $result;
	}

	public function Delete($Data) {
		$this->DB->Delete(['id' => $Data['id']]);
		return true;
	}

	public function Edit($Data) {
		$columnData = ['client_name' => $Data['client_name'], 'client_message' => $Data['client_message']];
		$condition = ['id' => $Data['id']];
		$this->DB->Update($columnData, $condition);
		return true;
	}

}