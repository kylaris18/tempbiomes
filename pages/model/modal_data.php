<?php

// This is just an example data. Data can also come from the database.

$data = array();

$mode = $_POST['mode'];
require '../database/database.php';
if ($mode == "format1")
{
	$value = $_POST['value'];
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_fgd_format1
				WHERE fgd_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['fgd1_id'][] = $row['fgd1_id'];
		    $result['fgd_id'][] = $row['fgd_id'] ;
		    $result['fgd1_locality'][] = $row['fgd1_locality'] ;
		    $result['fgd1_main_issue'][] = $row['fgd1_main_issue'] ;
		    $result['fgd1_description'][] = $row['fgd1_description'] ;
		    $result['fgd1_pasu_solution'][] = $row['fgd1_pasu_solution'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "format2")
{
	$value = $_POST['value'];
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_fgd_format2
				WHERE fgd_id = '. $value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['fgd2_id'][] = $row['fgd2_id'];
		    $result['fgd_id'][] = $row['fgd_id'] ;
		    $result['fgd2_resource'][] = $row['fgd2_resource'] ;
		    $result['fgd2_extraction_place'][] = $row['fgd2_extraction_place'] ;
		    $result['fgd2_extraction_method'][] = $row['fgd2_extraction_method'] ;
		    $result['fgd2_quantity_cmg'][] = $row['fgd2_quantity_cmg'] ;
		    $result['fgd2_quantity_brgy'][] = $row['fgd2_quantity_brgy'] ;
		    $result['fgd2_days_hrs'][] = $row['fgd2_days_hrs'] ;
		    $result['fgd2_remarks'][] = $row['fgd2_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}
elseif ($mode == "format3")
{
	$value = $_POST['value'];
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_fgd_format3
				WHERE fgd_id = '. $value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['fgd3_id'][] = $row['fgd3_id'];
		    $result['fgd_id'][] = $row['fgd_id'] ;
		    $result['fgd3_species'][] = $row['fgd3_species'] ;
		    $result['fgd3_place'][] = $row['fgd3_place'] ;
		    $result['fgd3_quantity'][] = $row['fgd3_quantity'] ;
		    $result['fgd3_how_observed'][] = $row['fgd3_how_observed'] ;
		    $result['fgd3_date'][] = $row['fgd3_date'] ;
		    $result['fgd3_observer'][] = $row['fgd3_observer'] ;
		    $result['fgd3_remarks'][] = $row['fgd3_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
}


echo json_encode($data);

?>