<?php

$data = array();

$mode = $_POST['mode'];
//$mode = 'swim';
require '../database/database.php';
if ($mode == "walk")
{
	$value = $_POST['value'];
	// $value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_walk_data
				WHERE twalk_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['twalkdata_id'][] = $row['twalkdata_id'];
		    $result['twalk_id'][] = $row['twalk_id'] ;
		    $result['twalkdata_record'][] = $row['twalkdata_record'] ;
		    $result['twalkdata_quantity'][] = $row['twalkdata_quantity'] ;
		    $result['twalkdata_time'][] = $row['twalkdata_time'] ;
		    $result['twalkdata_remarks'][] = $row['twalkdata_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "swim") {
	$value = $_POST['value'];
	//$value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_swim_data
				WHERE tswim_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['tsdata_id'][] = $row['tsdata_id'];
		    $result['tswim_id'][] = $row['tswim_id'] ;
		    $result['tsdata_record'][] = $row['tsdata_record'] ;
		    $result['tsdata_quantity'][] = $row['tsdata_quantity'] ;
		    $result['tsdata_start_time'][] = $row['tsdata_start_time'] ;
		    $result['tsdata_end_time'][] = $row['tsdata_end_time'] ;
		    $result['tsdata_remarks'][] = $row['tsdata_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "cruise") {
	$value = $_POST['value'];
	//$value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_cruise_data
				WHERE tcruise_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['tcdata_id'][] = $row['tcdata_id'];
		    $result['tcruise_id'][] = $row['tcruise_id'] ;
		    $result['tcdata_record'][] = $row['tcdata_record'] ;
		    $result['tcdata_quantity'][] = $row['tcdata_quantity'] ;
		    $result['tcdata_time'][] = $row['tcdata_time'] ;
		    $result['tcdata_remarks'][] = $row['tcdata_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}

echo json_encode($data);

?>