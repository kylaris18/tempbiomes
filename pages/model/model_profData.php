<?php

	#connecting to the database by calling the dbconfig file
	require '../database/database.php';

	function updateData(){
		try {
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$contactno = $_POST['contactno'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$id = $_POST['id'];

			$pdo = Database::connect();

			$sql = "UPDATE tbl_head SET head_email = '".$email."',head_fname = '".$firstName."', head_lname = '".$lastName."', head_gender = '".$gender."', head_address = '".$address."', head_contactno = '".$contactno."'  WHERE head_id = '".$id."'";
			$stmt = $pdo->prepare($sql);
			$stat = $stmt->execute();

			Database::disconnect();
			return 'successful';
			
		} catch (Exception $e) {
			return $e;
		}	
	}

	$status = updateData();
?>