<?php
	#starting session
	session_start();
	#connecting to the database by calling the dbconfig file
	require "../config/dbconfig.php";

	$uname = $_SESSION['admin_uname'];

	if(isset($_POST["btnSubmit"]))
	{
		$subj = $_POST["txtSubj"];
		$content = $_POST["txtContent"];

		$subj = mysqli_real_escape_string($db, $subj);
		$content = mysqli_real_escape_string($db, $content);

			$query = mysqli_query($db, "INSERT INTO tbl_note (uname, note_subj, note_content)VALUES ('$uname', '$subj', '$content')");
			if($query)
			{
				echo "Added";
			}
	}
	else
	{
		echo "Error";
	}


?>