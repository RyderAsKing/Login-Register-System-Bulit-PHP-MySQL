<?php 
	if($_POST){
		if(isset($_POST['loginButton'])){
			if(!isset($_POST['email']) || !isset($_POST['password']) || empty($_POST['email']) || empty($_POST['password'])){
				echo "All the fields are required";
			}
			else{
				$query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($con, $_POST['email']) ."' AND password  = '". mysqli_real_escape_string($con, $_POST['password']) ."'";
				if($con->query($query)->num_rows == 1){
					$_SESSION['loggedIn'] = true;
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['password'] = $_POST['password'];
					header("location: index.php");
				}
				else{
					echo "The combination of the email and password dosent match. Please try again.";
				}
			}
		}
	}
?>
