<?php 
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	if(isset($_POST["btnSubmit"])) 
	{
		

		$email = $_POST["txtEmail"];
		$uname = $_POST["txtUname"];
		$pcode = $_POST["txtPcode"];
		$lname = $_POST["txtLname"];
		$fname = $_POST["txtFname"];
		$pa = $_POST["txtPa"];

		$email = mysqli_real_escape_string($db, $email);
		$uname = mysqli_real_escape_string($db, $uname);
		$pcode = mysqli_real_escape_string($db, $pcode);
		$lname = mysqli_real_escape_string($db, $lname);
		$fname = mysqli_real_escape_string($db, $fname);
		$pa = mysqli_real_escape_string($db, $pa);

		$pasu_code = "2013-xxxx";
		$pasu_gender = 'Not yet set';
		$pasu_bday = 'Not yet set';
		$pasu_address = 'Not yet set';
		$pasu_contact = 'Not yet set'; 

		$pasu_picture = '<img src = "../dist/img/default.png" />';
		try {
			$sqlQuery = 'INSERT INTO tbl_pasu (pasu_code, pasu_email, pasu_uname, pasu_pcode, pasu_picture, pasu_fname, pasu_lname, pasu_gender, pasu_bday, pasu_address, pasu_contactno) VALUES (\''.$pasu_code.'\', \''.$email.'\', \''.$uname.'\', \''.$pcode.'\', \''.$pasu_picture.'\', \''.$fname.'\', \''.$lname.'\', \''.$pasu_gender.'\', \''.$pasu_bday.'\', \''.$pasu_address.'\', \''.$pasu_contact.'\')';
			$query = mysqli_query($db, $sqlQuery);
			if ($query) {
				echo "Added to database";

				$sql1 = "SELECT pasu_id FROM tbl_pasu WHERE pasu_uname = '".$db->real_escape_string($uname)."'";
				$result1 = $db->query($sql1);
				$row = $result1->fetch_assoc();
				$id = $row['pasu_id'];

				$sql2 = mysqli_query($db, "INSERT INTO tbl_designation (user_id, pa_id)VALUES ('$id', '$pa')");
				if ($sql2) {
					echo "Added Designation";
				}
				else {
					echo "Error";
				}

			} else {
				echo "Error";
			}
		} catch (Exception $e) {
			echo $e;
			
		}




		
		
		// $query = mysqli_query($db, "INSERT INTO tbl_pasu (pasu_type, pasu_code, pasu_email, pasu_uname, pasu_pcode, pasu_picture, pasu_fname, pasu_lname, pasu_gender, pasu_bday, pasu_address, pasu_contactno)VALUES ('$pasu_type','$pasu_code', '$email', '$uname', '$pcode', '$pasu_picture', '$fname', '$lname', '$pasu_gender', '$pasu_bday', '$pasu_address', '$pasu_contact')");

		// 	if($query){
		// 		echo "Added to the database";

		// 		// $sql1 = "SELECT pasu_id FROM tbl_pasu WHERE pasu_uname = '".$db->real_escape_string($uname)."'";
		// 		// $result1 = $db->query($sql1);
		// 		// $row = $result->fetch_assoc();
		// 		// $id = $row['pasu_id'];

		// 		// $sql2 = mysqli_query($db, "INSERT INTO tbl_designation (user_id, pa_id)VALUES ('$id', '$pa')");
		// 		// if ($sql2) {
		// 		// 	echo "Added Designation";
		// 		// }
		// 		// else {
		// 		// 	echo "Error";
		// 		// }
		// 	}
		// 	else
		// 	{
		// 		echo "Error";
		// 	}

		
	}

?>