<?php

// This is just an example data. Data can also come from the database.

$data = array();

$mode = $_POST['mode'];
//$mode = 'walk';
require '../database/database.php';
if ($mode == "walk")
{
	$value = $_POST['value'];
	//$value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_walk
				WHERE tsect_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['twalk_id'][] = $row['twalk_id'];
		    $result['tsect_id'][] = $row['tsect_id'] ;
		    $result['twalk_location'][] = $row['twalk_location'] ;
		    $result['twalk_observer'][] = $row['twalk_observer'] ;
		    $result['twalk_lenght'][] = $row['twalk_lenght'] ;
		    $result['twalk_date'][] = $row['twalk_date'] ;
		    $result['twalk_time'][] = $row['twalk_time'] ;
		    $result['twalk_comment'][] = $row['twalk_comment'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "swim")
{
	$value = $_POST['value'];
	// $value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_swim
				WHERE tsect_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['tswim_id'][] = $row['tswim_id'];
		    $result['tsect_id'][] = $row['tsect_id'] ;
		    $result['tswim_location'][] = $row['tswim_location'] ;
		    $result['tswim_observer'][] = $row['tswim_observer'] ;
		    $result['tswim_lenght'][] = $row['tswim_lenght'] ;
		    $result['tswim_date'][] = $row['tswim_date'] ;
		    $result['tswim_time'][] = $row['tswim_time'] ;
		    $result['tswim_comment'][] = $row['tswim_comment'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "cruise")
{
	$value = $_POST['value'];
	//$value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_transect_cruise
				WHERE tsect_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['tcruise_id'][] = $row['tcruise_id'];
		    $result['tsect_id'][] = $row['tsect_id'] ;
		    $result['tcruise_location'][] = $row['tcruise_location'] ;
		    $result['tcruise_observer'][] = $row['tcruise_observer'] ;
		    $result['tcruise_lenght'][] = $row['tcruise_lenght'] ;
		    $result['tcruise_date'][] = $row['tcruise_date'] ;
		    $result['tcruise_time'][] = $row['tcruise_time'] ;
		    $result['tcruise_comment'][] = $row['tcruise_comment'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}


echo json_encode($data);

?>