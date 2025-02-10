<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($db, $_POST['searchTerm']);

    $sql = "SELECT * FROM buyer WHERE NOT unique_id = {$outgoing_id} AND (username LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($db, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "seller_data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>