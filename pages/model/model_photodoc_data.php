<?php

$data = array();

require '../database/database.php';

	$value = $_POST['value'];
	// $value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_pd_data
				WHERE pde_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['pdd_id'][] = $row['pdd_id'];
		    $result['pde_id'][] = $row['pde_id'] ;
		    $result['pdd_photo'][] = $row['pdd_photo'] ;
		    $result['pdd_name'][] = $row['pdd_name'] ;
		    $result['pdd_angle_pos'][] = $row['pdd_angle_pos'] ;
		    $result['pdd_description'][] = $row['pdd_description'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);

echo json_encode($data);

?>