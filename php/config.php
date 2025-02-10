<?php
  $hostname = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "mealbox3";

  $db = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$db){
    echo "Database connection error".mysqli_connect_error();
  }
?>
