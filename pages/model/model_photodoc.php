<?php

// This is just an example data. Data can also come from the database.

$data = array();

//$mode = 'walk';
require '../database/database.php';

	$value = $_POST['value'];
	//$value = 1;
	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_pd_entry
				WHERE pd_id = '.$value;
		$STH = $pdo->query($sql);
		$STH->setFetchMode(PDO::FETCH_ASSOC);

		while($row = $STH->fetch()) {
		    $result['pde_id'][] = $row['pde_id'];
		    $result['pd_id'][] = $row['pd_id'] ;
		    $result['pde_locality'][] = $row['pde_locality'] ;
		    $result['pde_gps_position'][] = $row['pde_gps_position'] ;
		    $result['pde_date'][] = $row['pde_date'] ;
		    $result['pde_observer'][] = $row['pde_observer'] ;
		    $result['pde_remarks'][] = $row['pde_remarks'] ;
		}
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);


echo json_encode($data);

?>