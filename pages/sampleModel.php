<?php
require 'database/database.php';
function setData(){
	$username = $_POST['email'];
	$password = $_POST['passcode'];
	$pdo = Database::connect();
	$sql = "INSERT INTO tbl_testing (username, passcode) VALUES ('".$username."', '".$password."')";
	// use exec() because no results are returned
	$result = $pdo->query($sql);
	if ($result) {
		return "success";
	}
	Database::disconnect();	
}
$success = setData();
echo $success;

//echo $success;
?>