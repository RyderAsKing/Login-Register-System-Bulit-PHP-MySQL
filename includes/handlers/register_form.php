<?php 
	if($_POST){
		if(isset($_POST['registerButton'])){
			if(!isset($_POST['email']) || !isset($_POST['password']) || empty($_POST['email']) || empty($_POST['password'])){
				echo "All the fields are required";
			}
			else{
				$password = md5($_POST['password']);
				$query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($con, $_POST['email']) ."' LIMIT 1";
				if($con->query($query)->num_rows == 1){
					echo "An account with that email already exists";
				}
				else{
					$registerQuery = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '". mysqli_real_escape_string($con, $_POST['email']) ."', '". mysqli_real_escape_string($con, $password) ."')";
					$con->query($registerQuery);
					header("location: login.php");
				}
			}
		}
	}
?>
