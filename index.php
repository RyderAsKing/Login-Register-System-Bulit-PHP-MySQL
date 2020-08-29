<?php 
	session_start();
	include("config.php");
	include("functions.php");
	if(checkLogin() == false){
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Login/Register system by Ryder</title>
</head>
<body>
	<p>Yo, you made it inside!!</p>
</body>
</html>
