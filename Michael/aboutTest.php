<?php
session_start();

$myVar = $_SESSION["UserName"];

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