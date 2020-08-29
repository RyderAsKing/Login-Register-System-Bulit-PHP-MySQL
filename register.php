<?php 
	session_start();
	include("config.php");
	include("functions.php");
	include("includes/handlers/register_form.php");

	if(checkLogin() == true){
		header("location: index.php"); // Already logged in
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Form || Basic Login/Register system by Ryder</title>
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css">
</head>
<body>
	<div id="registerForm">
		<h1>Register</h1>
		<form method="post">
			<input type="email" name="email" placeholder="Your email">
			<input type="password" name="password" placeholder="Your password">
			<input type="submit" name="registerButton" value="Register">
		</form>
	</div>
</body>
</html>
