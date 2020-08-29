<?php
  $db_host = "your_host";
  $db_user = "username";
  $db_pass = "password";
  $db_name = "database_name";
  $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
  if ($con->connect_error) {
      die($con->connect_error);
  }
?>
