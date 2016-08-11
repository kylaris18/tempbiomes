<?php
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	$ses_name = $_SESSION['uname'];
	$ses_type = $_SESSION['type'];
	$image;

		if($ses_type == 1) {
			$sql1 = "SELECT admin_picture FROM tbl_admin WHERE admin_uname =  '".$db->real_escape_string($ses_name)."'";
			$result1 = $db->query($sql1);
			$row1 = $result1->fetch_assoc();
			$img1 = $row1['admin_picture'];

			if (is_null($img1)) {
				header("Content-type: image/png");
				$image = fpassthru(fopen('../dist/img/default.png', 'rb'));
			} else {
				header("Content-type: image/png");
				$image = $img1;
			}
		 }
		elseif($ses_type == 2) {
			$sql2 = "SELECT head_picture FROM tbl_head WHERE head_uname =  '".$db->real_escape_string($ses_name)."'";
			$result2 = $db->query($sql2);
			$row2 = $result2->fetch_assoc();
			$img2 = $row2['head_picture'];

			if (is_null($img2)) {
				header("Content-type: image/png");
				$image = fpassthru(fopen('../dist/img/default.png', 'rb'));
			} else {
				header("Content-type: image/png");
				$image = $img2;
			}
		 }
		elseif($ses_type == 3) {
			$sql3 = "SELECT pasu_picture FROM tbl_pasu WHERE pasu_uname =  '".$db->real_escape_string($ses_name)."'";
			$result3 = $db->query($sql3);
			$row3 = $result3->fetch_assoc();
			$img3 = $row3['pasu_picture'];

			if (is_null($img3)) {
				header("Content-type: image/png");
				$image = fpassthru(fopen('../dist/img/default.png', 'rb'));
			} else {
				header("Content-type: image/png");
				$image = $img3;
			}
		}
		echo "$image";
?>