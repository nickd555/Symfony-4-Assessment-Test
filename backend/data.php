<?php

class dataHandler
{
	function insertData($date, $infections, $fatalities) {
		$root = $_SERVER['DOCUMENT_ROOT'];
		$db = new SQLite3($root . '/backend/CoronaData.db');
		$fatalityRatio = $fatalities/$infections*100;
		$sql = "INSERT INTO CoronaData(Date, Infections, Fatalities, FatalityRatio) VALUES('$date', '$infections', '$fatalities', '$fatalityRatio')";

		try {
			$db->exec($sql);
			echo 'The data has been succesfully inserted!';
		} catch (Exception $e) {
			echo 'There was a problem inserting the data, please check your formatting. Caught exception: ', $e->getMessage(), '\n';
		}
	}

	function removeData($entry) {
		$root = $_SERVER['DOCUMENT_ROOT'];
		$db = new SQLite3($root . '/backend/CoronaData.db');
		$sql = "DELETE FROM CoronaData WHERE entry = '$entry'";

		try {
			$db->exec($sql);
			echo 'The data has been succesfully removed!';
		} catch (Exception $e) {
			echo 'There was a problem removing the data, please check your formatting. Caught exception: ', $e->getMessage(), '\n';
		}
	}

	function collectData() {
		$root = $_SERVER['DOCUMENT_ROOT'];
		$db = new SQLite3($root . '/backend/CoronaData.db');
		$result = $db->query('SELECT * FROM CoronaData');
		$row = array();
		
		while ($res = $result->fetchArray()){
			array_push($row, $res);
		}

		return $row;

	}
}
?>