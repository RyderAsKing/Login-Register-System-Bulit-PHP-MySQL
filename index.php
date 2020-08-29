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
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css">
</head>
<body>
	<p>Yo, you made it inside!!</p>
	<a href="logout.php">
		<button>Logout</button>
	</a>
</body>
</html>
