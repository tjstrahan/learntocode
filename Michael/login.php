<?php
session_start();
$temp = "";

if(isset($_POST['userName']) && isset($_POST['pWord']) && $_POST['userName'] != "" && $_POST['pWord'] != "")
	{
	
		if($_POST['userName'] == "Michael" && $_POST['pWord'] == "admin"){
			$_SESSION['loggedin'] = 1;
			$_SESSION['userName'] = "Michael";
			header("Location: admin\aindex.php");
			}
			else
			{
				$temp = "<p style = 'color:red'>Username or password not recognised</p>";
			}
		
	}
	else{
		$temp = "<p>Please enter a user name and password</p>";
}




?>


<!DOCTYPE html>
<html>
<head>

<style>

</style>

<script>

</script>

</head>
<body>

<h1>I am a test page<h1>

<form action = "login.php" method = "POST" >
		<p><label>User name: <input type = "text" name = "userName" /></label></p>
		<p><label>Password: <input type = "password" name = "pWord" /></label></p>
		<input type = "submit" value = "Submit" />
</form>

</body>
</html>