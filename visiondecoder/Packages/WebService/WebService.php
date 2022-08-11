<?php

namespace visiondecoder\Packages\WebService;

/**
 *
 */
class WebService {

	private $dbConnect;
	private $appModels;
	private $tableName;

	public function setDbConnection($dbConnection) {
		$this->dbConnect = $dbConnection;
		$this->appModels = APP_MODELS;
	}

	public function checkModelExists($model) {
		if (!array_key_exists($model, $this->appModels)) {
			echo 'app model does not exists';
			exit;
		} else {
			$this->tableName = $this->appModels[$model];
		}
	}

	public function get($model, $params = []) {
		// check if model exists in app
		$this->checkModelExists($model);

		// check if conditions pass in args
		$numArgs = func_num_args();
		if ($numArgs > 1) {
			$modelData = $this->dbConnect->getSingleRecord($this->tableName, $params);
			return $modelData;
		} else {
			// get all records
			$modelData = $this->dbConnect->getAllRecords($this->tableName);
			return $modelData;
		}

	}

	public function post($model, $params = []) {
		// check if model exists in app
		$this->checkModelExists($model);

		// check if conditions pass in args
		$numArgs = func_num_args();
		if ($numArgs > 1) {
			$modelData = $this->dbConnect->addSingleRecord($this->tableName, $params);
			return $modelData;
		} else {
			echo "Please provide data";
		}
	}

	public function update($model, $data, $conditions = []) {

		// check if model exists in app
		$this->checkModelExists($model);

		// check if conditions pass in args
		$numArgs = func_num_args();
		if ($numArgs < 3) {
			echo "Please provide data with request";
		} else {
			$modelData = $this->dbConnect->updateSingleRecord($this->tableName, $data, $conditions);

		}
	}

	public function delete($model, $conditions) {
		// check if model exists in app
		$this->checkModelExists($model);

		// check if conditions pass in args
		$numArgs = func_num_args();
		if ($numArgs < 2) {
			echo "Please provide data with request";
		} else {
			$modelData = $this->dbConnect->deleteRecord($this->tableName, $conditions);
		}

	}
}
