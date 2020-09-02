<?php
session_start();
$myVar = "";
if(isset($_SESSION["userName"])){
	$myVar = $_SESSION["userName"];
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
  <p>Welcome <?php echo $myVar;?></p>
  
<ul class="home">
  <li><a class="active" href="aindex.php">Home</a></li>
  <li><a href="reports.php">Reports</a></li>
  <li><a href="orders.php">Orders</a></li>
  <li><a href="index.php">Logout</a></li>
  
</ul>
  
  
</div>

<h1>Business report on sales<h1>


<?php
	
	include("includes/includeConnect.php");
	
	$sql = "SELECT orderid, productType, productName, Quantity FROM myproductstable";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
	
	echo "<table><tr><th>Product ID</th><th>product Type</th><th>Product Name</th><th>Quanitity</th></tr>";
	// output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["orderid"]."</td><td>".$row["productType"]."</td><td> ".$row["productName"]."</td><td>".$row["Quantity"]."</td></tr>";
		}
		echo "</table>";
		}
		else{
			echo "0 results";
			}
$conn->close();
	
	
	?>



</body>
</html>