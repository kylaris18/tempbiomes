<?php
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	$ses_name = $_SESSION['id'];
	$ses_sql = mysqli_query($db,"SELECT admin_gender, admin_bday, admin_address, admin_contactno FROM tbl_admin WHERE admin_id='$ses_name' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$gender = $row['admin_gender'];
	$bday = $row['admin_bday'];
	$address = $row['admin_address'];
	$contact = $row['admin_contactno'];

	echo $gender;
	echo $bday;
	echo $address;
	echo $contact;
?>