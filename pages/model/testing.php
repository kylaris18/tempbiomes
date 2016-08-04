<?php

// This is just an example data. Data can also come from the database.

$data = array();

$mode = 'format1';
require '../database/database.php';
if ($mode == "format1") {
	$value = 1;

	function getData($value){
		$pdo = Database::connect();
		$sql = 'SELECT *
				FROM tbl_fgd_format1
				WHERE fgd_id = '. $value;
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
		//var_dump($result.size());
		//$result = $row ->fetchAll();
		Database::disconnect();
		return $result;
	}
	$data[] = getData($value);
	//var_dump($data);
}

//echo json_encode($data);
//var_dump($data);


/*if ($mode == "format1")
{
	

echo json_encode($data);*/

?>