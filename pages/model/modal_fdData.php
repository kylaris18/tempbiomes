<?php

// This is just an example data. Data can also come from the database.

$data = array();

$value = $_POST['value'];
require '../database/database.php';
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_fd_data
				WHERE fd_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['fdd_id'][] = $row['fdd_id'];
		    $result['fd_id'][] = $row['fd_id'] ;
		    $result['fdd_locality'][] = $row['fdd_locality'] ;
		    $result['fdd_date'][] = $row['fdd_date'] ;
		    $result['fdd_time'][] = $row['fdd_time'] ;
		    $result['fdd_data'][] = $row['fdd_data'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);

echo json_encode($data);

?>