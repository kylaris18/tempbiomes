<?php
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	if(isset($_POST["btnSubmit"])) 
	{
		$type = $_POST['drp_type'];
		$name = $_POST['txtSpeciesName'];
		$s_name = $_POST['txtScientificName'];
		$desc = $_POST['txtContent'];

		$type = mysqli_real_escape_string($db,$type);
		$name = mysqli_real_escape_string($db, $name);
		$s_name = mysqli_real_escape_string($db, $s_name);
		$desc = mysqli_real_escape_string($db, $desc);

		$status = '1';


		$pic = $_FILES['imgProfile']['name'];
		$imagetmp = addslashes(file_get_contents($_FILES['imgProfile']['tmp_name']));

		$query = mysqli_query($db, "INSERT INTO tbl_species (species_type, species_status, species_name, species_sc_name, species_desc)VALUES ('$type','$status', '$name', '$s_name', '$desc')");
		if($query) {
			echo 'Added to tbl_species';

			$sql = "SELECT species_id FROM tbl_species WHERE species_name = '".$db->real_escape_string($name)."'";
			$result = $db->query($sql);
			$row = $result->fetch_assoc();

			$id = $row['species_id'];

			$query2 = mysqli_query($db, "INSERT INTO tbl_species_picture (species_id, species_picture)VALUES ('$id','$imagetmp')");
			if ($query2) {
				# code...
				echo "Updated!";
			}
			else {
				echo "Error";
			}	


		}
		else {
			echo 'Error';
		}

	}
?>