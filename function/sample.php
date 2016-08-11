<?php
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";
	// $ses_name = $_SESSION['uname'];
	// $ses_type = $_SESSION['type'];


		/*if($_SESSION['type'] == 1)
		{
			$sql1 = "SELECT admin_picture FROM tbl_admin WHERE admin_uname =  '".$db->real_escape_string($ses_name)."'";
			$result1 = $db->query($sql1);
			$row = $result1->fetch_assoc();
			$img = $row["admin_picture"];

			header("Content-type: image/png");
			echo "$img";
		}*/
		// elseif($_SESSION['type'] == 2)
		// {
		// 	$sql2 = "SELECT head_picture FROM tbl_head WHERE head_uname =  '".$db->real_escape_string($ses_name)."'";
		// 	$result2 = $db->query($sql2);
		// 	$row2 = $result2->fetch_assoc();
		// 	$img2 = $row2["head_picture"];

		// 	header("Content-type: image/png");
		// 	echo "$img2";
		// }

		$ses_name = 'uname';
		$type = 3;

		 if($type == 3) {
			$sql3 = "SELECT pasu_picture FROM tbl_pasu WHERE pasu_uname =  '".$db->real_escape_string($ses_name)."'";
			$result3 = $db->query($sql3);
			$row3 = $result3->fetch_assoc();
			$img3 = $row3['pasu_picture'];

			if($img3 == '<img src = "../dist/img/default.png" />')
			{
				echo "$img3";
			}
			else
			{
				header("Content-type: image/png");
				echo "$img3";
			}
		 }

			// if($row['pasu_picture'] == '<img src = "../dist/img/default.png" />') {
			// echo "$img3";
			// }
			/*else {*/
				/*header("Content-type: image/png");
				echo "$img3";*/
			// }
		 //}
		/*else
		{

		}
*/
	
	
?>