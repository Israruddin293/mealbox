<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// initializing variables
$username = "";
$email    = "";
$phone    = "";
$address  = "";
$seller_name="";
$errors = array(); 


// connect to the database
$db = mysqli_connect("localhost", "root", "", "mealbox3");
if (!$db) {
    die("Connection Issue: " . mysqli_connect_error());
}

?>

