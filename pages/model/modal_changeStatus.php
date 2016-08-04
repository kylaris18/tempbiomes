<?php
require '../database/database.php';


function updateData(){
	$id = $_POST['ID'];
	$method = $_POST['mode'];
	$type = $_POST['type'];

	if ($method == 0) {
		try {
		$pdo = Database::connect();
		$sql = '';
		if ($type == 0) {
			$sql = 'UPDATE tbl_fgd SET fgd_status=3 WHERE fgd_id='. $id;
		} else {
			$sql = 'UPDATE tbl_fgd SET fgd_status=4 WHERE fgd_id='. $id;
		}
		// use exec() because no results are returned
		$result = $pdo->query($sql);
		Database::disconnect();
		return 'success';

		} catch (Exception $e) {
			return 'failed';
		}
	}
	elseif ($method == 1) {
		try {
		$pdo = Database::connect();
		$sql = '';
		if ($type == 0) {
			$sql = 'UPDATE tbl_field_diary SET fd_status=3 WHERE fd_id='. $id;
		} else {
			$sql = 'UPDATE tbl_field_diary SET fd_status=4 WHERE fd_id='. $id;
		}
		// use exec() because no results are returned
		$result = $pdo->query($sql);
		Database::disconnect();
		return 'success';

		} catch (Exception $e) {
			return 'failed';
		}
	} 
	elseif ($method == 2) {
		try {
		$pdo = Database::connect();
		$sql = '';
		if ($type == 0) {
			$sql = 'UPDATE tbl_field_diary SET fd_status=3 WHERE fd_id='. $id;
		} else {
			$sql = 'UPDATE tbl_field_diary SET fd_status=4 WHERE fd_id='. $id;
		}
		// use exec() because no results are returned
		$result = $pdo->query($sql);
		Database::disconnect();
		return 'success';

		} catch (Exception $e) {
			return 'failed';
		}
	}
	elseif ($method == 3) {
		try {
		$pdo = Database::connect();
		$sql = '';
		if ($type == 0) {
			$sql = 'UPDATE tbl_transect SET tsect_status=3 WHERE tsect_id='. $id;
		} else {
			$sql = 'UPDATE tbl_transect SET tsect_status=4 WHERE tsect_id='. $id;
		}
		// use exec() because no results are returned
		$result = $pdo->query($sql);
		Database::disconnect();
		return 'success';

		} catch (Exception $e) {
			return 'failed';
		}
	}
}
$success = updateData();
echo $success;

//echo $success;
?>