
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "php/config.php";
        $logout_id = mysqli_real_escape_string($db, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($db, "UPDATE buyer SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                unset($_SESSION["cart_item"]);
                unset($_SESSION['username']);
                header('location: account.php');
            }
        }else{
            header('location: buyer_logged-in.php');
        }
    }else{  
        header('location: account.php');
    }
?>


