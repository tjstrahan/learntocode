<?php

//this line lets the server/client machine that session varibales are being used
session_start();


//initialising the session variable and declaring it also- this will allow variable to persist
//across all pages as HTML pages are usually stateless
$_SESSION["UserName"] = "James";

//putting the session variable into the myVar variable
$myVar = $_SESSION["UserName"];


//simple way of showing a variable using echo below on just one page
//$myVar = "James Strahan";

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
<!-- the below line outputs to screen the stored PHP variables on the HTML page-->
<p>Welcome <?php echo $myVar;?></p>
<h1>I am a test page<h1>


</body>
</html>