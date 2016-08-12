<?php  
require '../database/database.php';

function insertData(){
	try {

		$quarter = $_POST['quarter'];
		$year = $_POST['year'];
		$uname = $_POST['id'];

		$status = 0;

		$pdo = Database::connect();

		$sql = "INSERT INTO tbl_pasu_status (pasu_uname, ps_quarter,ps_year,ps_status)VALUE ('".$uname."','".$quarter."','".$year."',".$status.")";
		$pdo->exec($sql);

		if($sql){
			return 'success';
		}
		else{
			return "error";
		}
		Database::disconnect();

	} catch (PDOException $e) {
		return $e->getMessage();
	}
}

$stat = insertData();
?>