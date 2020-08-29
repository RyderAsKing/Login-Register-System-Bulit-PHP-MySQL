<?php 
	function checkLogin(){
		if(empty($_SESSION['loggedIn']) || !isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false){
			return false;
		}
		else{
			return true;
		}
	}
	// Code here
?>
