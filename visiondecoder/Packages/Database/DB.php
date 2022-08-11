<?php

namespace visiondecoder\Packages\Database;

/**
 *
 */
class DB {

	private $Mysqli;
	private $tableName;

	function __construct() {
		// $this->Mysqli = new \mysqli("localhost", "root", "wowslab0492", "localhost");
		$this->Mysqli = new \mysqli("localhost", "toot", "", "db_name");
		return $this->Mysqli;
	}

	public function SelectTable($tableName) {
		$this->tableName = $tableName;
	}

	// execute query
	public function query($query) {
		$queryResult = $this->Mysqli->query($query) or die($this->Mysqli->error);
		return $queryResult;
	}

	// insert 1 record with any no. of columname
	public function Insert($columnData) {
		$columns = implode(',', array_keys($columnData));
		$values = array_values($columnData);

		$strValues = "";
		foreach ($values as $key => $value) {
			$strValues .= "'$value',";
		}

		$strValues = rtrim($strValues, ",");

		foreach ($columnData as $key => $value) {
			$query = "INSERT INTO $this->tableName ($columns) VALUES ($strValues)";
		}

		$this->query($query);
		return $this->Mysqli->insert_id;
	}

	// select * from table
	// return result object
	public function SelectAll() {
		$query = "SELECT * FROM $this->tableName";
		$queryResult = $this->query($query);
		return $queryResult;
	}

	// select * from table where, 1 condition
	// return 1 record
	public function SelectAllWhere($condition) {
		foreach ($condition as $key => $value) {
			$query = "SELECT * FROM $this->tableName WHERE $key = '$value'";
		}
		$queryResult = $this->query($query);
		return $queryResult;
	}

	// select columnname from table where, 1 condition
	// return 1 column value
	public function SelectColumn($columnName) {
		$columnData = "";
		$query = "SELECT $columnName FROM $this->tableName";
		$queryResult = $this->query($query);
		while ($records = $queryResult->fetch_assoc()) {
			$columnData = $records[$columnName];
		}
		return $columnData;
	}

	// select columnname from table where, 1 condition
	// return 1 column value
	public function SelectColumnWhere($columnName, $condition) {
		$columnData = "";
		foreach ($condition as $key => $value) {
			$query = "SELECT $columnName FROM $this->tableName WHERE $key = '$value'";
		}
		$queryResult = $this->query($query);
		while ($records = $queryResult->fetch_assoc()) {
			$columnData = $records[$columnName];
		}
		return $columnData;
	}

	// upate table set 1 columname where, 1 condition
	public function Update($columnData, $condition) {
		$conditionKey = array_keys($condition)[0];
		$conditionValue = array_values($condition)[0];

		$setValues = "";

		foreach ($columnData as $key => $value) {
			$setValues .= "$key = '$value',";
		}

		$setValues = rtrim($setValues, ",");
		$query = "UPDATE $this->tableName SET $setValues WHERE $conditionKey = '$conditionValue'";
		$this->query($query);
		return true;
	}

	// delete record from table where, 1 condition
	public function Delete($condition) {
		$conditionKey = array_keys($condition)[0];
		$conditionValue = array_values($condition)[0];

		$query = "DELETE FROM $this->tableName WHERE $conditionKey = '$conditionValue'";
		$this->query($query);
		return true;
	}

	// select * columname from table where, 1 condition
	// return all columname value array
	public function getOnlyColumnWhere($tableName, $columnName, $condition) {
		$columnData = [];
		foreach ($condition as $key => $value) {
			$query = "SELECT $columnName FROM $tableName WHERE $key = '$value'";
		}
		$queryResult = $this->query($query);
		while ($records = $queryResult->fetch_assoc()) {
			$columnData[] = $records[$columnName];
		}
		return $columnData;
	}

	// select * from table where-And, multiple condition
	// return all records as object
	public function getRecordsWhere($tableName, $conditions) {
		$conditionString = "WHERE ";
		$index = 1;
		foreach ($conditions as $key => $value) {
			if ($index > 1) {
				$conditionString .= " AND $key = '$value' ";
			} else {
				$conditionString .= "$key = '$value'";
			}

			$query = "SELECT * FROM $tableName $conditionString";

			$index++;
		}

		$resultResult = $this->query($query);
		return $resultResult;
	}

	// update only column names value where, 1 condition, multiple colum names
	public function updateSingleRecordColumn($tableName, $columnData, $condition) {
		$conditionKey = array_keys($condition)[0];
		$conditionValue = array_values($condition)[0];

		foreach ($columnData as $key => $value) {
			$query = "UPDATE $tableName SET $key = '$value' WHERE $conditionKey = '$conditionValue'";
		}

		$this->query($query);
		return true;
	}

	// return total records count from table
	public function countRecords($tableName) {
		$query = "SELECT * FROM $tableName";
		$queryResult = $this->query($query);
		$counts = $queryResult->num_rows;
		return $counts;
	}

	// return total records count from table where, 1 condition
	public function countRecordsWhere($tableName, $condition) {
		$conditionKey = array_keys($condition)[0];
		$conditionValue = array_values($condition)[0];

		$query = "SELECT * FROM $tableName WHERE $conditionKey = '$conditionValue'";
		$queryResult = $this->query($query);
		$counts = $queryResult->num_rows;
		return $counts;
	}

	// return table colum names as array
	public function fetchTableFields($tableName) {
		$query = "SHOW COLUMNS FROM $tableName";
		$queryResult = $this->query($query);
		$fields = [];
		while ($records = $queryResult->fetch_assoc()) {
			if ($records['Field'] == "id") {
				continue;
			}
			$fields[] = $records['Field'];
		}
		return $fields;
	}

	// add 1 column in table
	public function addTableColumn($tableName, $columnName) {
		$this->query("ALTER TABLE $tableName ADD $columnName VARCHAR(255) NOT NULL");
	}

	/**
	 * Check if MySqli extension is loaded and accessible
	 */
	public function CheckMysqli() {
		if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
			echo 'We don\'t have mysqli!!!';
		} else {
			echo 'Phew we have it!';
		}
	}

}
