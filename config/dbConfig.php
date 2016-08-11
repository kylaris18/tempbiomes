<?php
	#Connecting to the database
	$db = mysqli_connect("localhost","root","cjay","db_biodiversity");

		if($db -> connect_errno > 0){
			die("Unable to connect.");
		}
?>