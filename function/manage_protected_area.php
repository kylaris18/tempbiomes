<?php 
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	if(isset($_POST["btnSubmit"])) 
	{
		
		$protected_area = $_POST['txtPA'];
		$location = $_POST['txtLocation'];
		$date = $_POST['txtDate'];
		$legislation = $_POST['txtLegislation'];
		$desc = $_POST['txtContent'];
		$area = $_POST['txtArea'];

		$protected_area = mysqli_real_escape_string($db,$protected_area);
		$location = mysqli_real_escape_string($db, $location);
		$legislation = mysqli_real_escape_string($db, $legislation);
		$desc = mysqli_real_escape_string($db, $desc);
		$date = mysqli_real_escape_string($db, $date);
		$area = mysqli_real_escape_string($db, $area);

		$query = mysqli_query($db, "INSERT INTO tbl_protected_area (pa_name, pa_location, pa_legislation, pa_description, pa_date_established, pa_area)VALUES ('$protected_area','$location', '$legislation', '$desc', '$date', '$area')");
			if($query) {
				echo "Added to the database";
			}
			else
			{
				echo "Error";
			}


	}

?>