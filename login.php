<?php 
	session_start();
	include("config.php");
	include("functions.php");
	include("includes/handlers/login_form.php");

	if(checkLogin() == true){
		header("location: index.php"); // Already logged in
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form || Basic Login/Register system by Ryder</title>
	<link rel="stylesheet" type="text/css" href="includes/css/styles.css">
</head>
<body>
	<div id="loginForm">
		<h1>Login</h1>
		<form method="post">
			<input type="email" name="email" placeholder="Your email">
			<input type="password" name="password" placeholder="Your password">
			<input type="submit" name="loginButton" value="Login">
		</form>
	</div>
</body>
</html>
