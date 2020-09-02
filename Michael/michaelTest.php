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
<p>Welcome <?php echo $myVar;?></p>
<h1>I am a test page<h1>


</body>
</html>