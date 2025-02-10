
<?php
    session_start();
    if(isset($_SESSION['username'])){
        include_once "php/config.php";
        $logout_id = mysqli_real_escape_string($db, $_GET['logout_id']);
        if(isset($logout_id)){
            
            $username=$_SESSION['username'];
            $sql = mysqli_query($db, "SELECT * FROM delivery WHERE username='$username'");
            if($sql){
                session_unset();
                session_destroy();
                unset($_SESSION['username']);
                header('location: account.php');
            }
        }else{
            header('location: delivery.php');
        }
    }else{  
        header('location: account.php');
    }
?>

