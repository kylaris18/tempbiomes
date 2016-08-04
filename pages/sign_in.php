<?php
	session_start();
	if ((isset($_SESSION['uname']) !='')) 
	{
		if($_SESSION['type'] == 1)
		{
			header("location: ../pages/admin_profile.php");
		}
		elseif($_SESSION['type'] == 2)
		{
			header("location: ../pages/head_profile.php");
		}
		elseif($_SESSION['type'] == 3)
		{
			header("location: ../pages/head_profile.php");
		}
	}
	else
	{
		echo "Session destroy";
	}

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title> Sign up </title>
	<link rel="stylesheet" type="text/css" href="../dist/css/sign_in.css">
	</head>
	<body>
	<div class="biomes-block">
		<img src="../dist/img/biomes.png">
	</div>
	<div class="label-block">
		<p><span>Welcome to BIOMES Web Portal. Please provide your user id and password.</span></p>
	</div>
	<form method="POST" action="../function/sign_in_process.php">
		<div class="form-block">
				<img src="../dist/img/boy.png">
				<input type="text" placeholder="User ID" id="userid" name="txtUsername" required />
			    <input type="password" placeholder="Password" id="pcode" name="txtPcode" required />
			    <button type="submit" name="btnSubmit">Sign in</button>
		</div>
	</form>
	</body>
</html>