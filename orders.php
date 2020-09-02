<?php
session_start();
$temp = "";
$message = "";
$loginLink = "<li><a href = 'login.php'>Login</a></li>";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === 1)
{
	$temp = "<p>Welcome ".$_SESSION['userName']."</p>";
	$loginLink = "<li><a href = '../logout.php'>Logout</a></li>";
}
else{
	
	header("location: notAuthorised.php");
	
}

include("includes/includeConnect.php");

// DB Insert script starts here

if(isset($_POST['prodType']) && $_POST['prodType'] != ""){
	
	$prodType = $_POST['prodType'];
	$prodName = $_POST['prodName'];
	$quant = $_POST['prodQuant'];
	$message = "";
	
	
	$sql = "INSERT INTO myproductstable (productType, productName, Quantity) VALUES ('".$prodType."', '".$prodName."', '".$quant."')";
	if ($conn->query($sql) === TRUE) {
	$message = "New record created successfully";
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
		}


	
}
else{
	$message = "You must enter a value for all fields";
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="social.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="w3-container w3-green">
  <h1>Learn to code at Belfast Met</h1> 
  <p>Create your own website</p>
  <p>Welcome <?php echo $temp ;?></p>
  
<ul class="home">
  <li><a class="active" href="aindex.php">Home</a></li>
  <li><a href="reports.php">Reports</a></li>
  <li><a href="orders.php">Orders</a></li>
  <li><a href="index.php">Logout</a></li>
  
</ul>
  
  
</div>

<h1>Business order summary<h1>
<h2><?php echo $message; ?></h2>
<form action = "orders.php" method = "POST" >
			<p><Label>Product Type: <input type = "text" name ="prodType" /></label></p>
			<p><Label>Product Name: <input type = "text" name ="prodName" /></label></p>
			<p><Label>Quanity: <input type = "text" name ="prodQuant" /></label></p>
			<input type = "submit" value = "Create" />
		
		</form>


</body>
</html>