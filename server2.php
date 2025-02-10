<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$phone    = "";
$address  = "";
$seller_name="";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', 'password', 'mealbox3');

?>

