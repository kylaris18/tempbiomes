<?php
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	if(isset($_POST["btnSubmit"])) 
	{
		#Defining $username and $password
		$uname = $_POST['txtUsername'];
		$pcode = $_POST['txtPcode'];

		#To protect from MySQL injection
		$uname = stripcslashes($uname);
		$pcode = stripcslashes($pcode);

		#Check username and password from the database
		$sql = "SELECT user_id, user_type, user_uname FROM tbl_user WHERE user_uname = '".$db->real_escape_string($uname)."' AND user_pcode = '".$db->real_escape_string($pcode)."'";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();

		if(mysqli_num_rows($result) == 1)
		{
			
			$_SESSION['uname'] = $row['user_uname'];
			$_SESSION['type'] = $row['user_type'];

			if ($row['user_type'] == 1) 
			{
				$admin=$_SESSION['uname'];
				$ses_sql = mysqli_query($db,"SELECT admin_fname, admin_lname FROM tbl_admin WHERE admin_uname = '$admin'");
				$row2 = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

				$_SESSION['fname'] = $row2['admin_fname'];
				$_SESSION['lname'] = $row2['admin_lname'];

				#redirecting to other page
				header("location: ../pages/admin_profile.php");
			}
			elseif ($row['user_type'] == 2) 
			{
				$head=$_SESSION['uname'];
				$ses_sql2 = mysqli_query($db,"SELECT head_fname, head_lname FROM tbl_head WHERE head_uname = '$head'");
				$row3 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);

				$_SESSION['h_fname'] = $row3['head_fname'];
				$_SESSION['h_lname'] = $row3['head_lname'];

				#redirecting to other page
				header("location: ../pages/head_profile.php");
			}
			elseif ($row['user_type'] == 3) 
			{
				$pasu=$_SESSION['uname'];
				$ses_sql3 = mysqli_query($db,"SELECT pasu_fname, pasu_lname FROM tbl_pasu WHERE pasu_uname = '$pasu'");
				$row4 = mysqli_fetch_array($ses_sql3,MYSQLI_ASSOC);

				$_SESSION['p_fname'] = $row4['pasu_fname'];
				$_SESSION['p_lname'] = $row4['pasu_lname'];

				#redirecting to other page
				header("location: ../pages/pasu_profile.php");
			}
		}
		else 
		{
			echo "Invalid Username and Password";
		}
	}	

?>