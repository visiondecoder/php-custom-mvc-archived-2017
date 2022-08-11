<?php

namespace app\Controller;

/**
 *
 */
class PortController {

	private $portTable = 'ports';
	private $DB;

	function __construct($DB) {
		$this->DB = $DB;
		$this->DB->SelectTable($this->portTable);
	}

	public function AddPort($portData) {
		$this->DB->Insert($portData);
	}

	public function FetchPorts() {
		$portResult = $this->DB->SelectAll();
		return $portResult;
	}

	public function GetPort($portId) {
		$portResult = $this->DB->SelectAllWhere(['id' => $portId]);
		return $portResult;
	}

	public function Update($portData) {
		$columnData = ['port_name' => $portData['port_name']];
		$condition = ['id' => $portData['id']];
		$this->DB->Update($columnData, $condition);
		return true;
	}
}