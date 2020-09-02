<?php
session_start();
$temp = "";



//if the username is entered and if the password is entered and if the username is not blank and if the password is not blank
if(isset($_POST['userName']) && isset($_POST['pWord']) && $_POST['userName'] != "" && $_POST['pWord'] != "")
	{
        //if username = string and if password = admin



	
		if($_POST['userName'] == "James" && $_POST['pWord'] == "admin"){
			//you are loggedin and session is set to 1
			$_SESSION['loggedin'] = 1;
			//the username is this
			$_SESSION['userName'] = "James";
			//then send it to here in the file structure
			header("Location: aindex.php");
			}
			//else run the error message
			else
			{
				$temp = "<p style = 'color:red'>Email or password not recognised</p>";
				
			}
	//else run the error message	
	}
	else{
		$temp = "<p>Please enter a user name and password</p>";
		
}





?>

<!DOCTYPE HTML>  
<html>
<head>

</head>


<body> 



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="social.css">
<link rel="stylesheet" type="text/css" href="slideshow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="w3-container w3-green">
  <h1>Learn to code at Belfast Met</h1> 
  <p>Create your own website</p>
  
  <ul class="home">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="News.php">News</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="login.php">Login</a></li>
  <li class="right"><a href="About.php">About</a></li>
</ul>
  

</div> 



<h2>Login for online sales</h2>
<h2><?php echo $temp;?></h2>
<!-- go the post method form on login.php-->
<form action = "login.php" method = "POST" >
		<p><label>User name: <input type = "text" name = "userName" /></label></p>
		<p><label>Password: <input type = "password" name = "pWord" /></label></p>
		<input type = "submit" value = "Submit" />
</form>


<footer>


	<p>Copyright 2013 by NBLCorp all rights reserved <p>
				
			
		
	<a href="http://www.facebook.com" class="fa fa-facebook" width="20%"></a>
	<a href="http://www.facebook.com" class="fa fa-twitter" width="20%"></a>
	<a href="http://www.facebook.com" class="fa fa-instagram" width="20%"></a>
						
					
		
	</footer>

</body>
</html>