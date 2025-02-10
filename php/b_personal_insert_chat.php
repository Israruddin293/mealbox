<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
?>

<?php
$username=$_SESSION['username'];
 $sellername= mysqli_real_escape_string($db, $_POST['incoming_id']);
 $query3 = "SELECT * FROM seller WHERE seller_name='$sellername'";
     $result2=$db->query($query3);
    if($result2->num_rows>0){
    
    while($row2=$result2->fetch_assoc())
    {  
       $incoming_id=$row2['unique_id'];
       
    }
 }
$query2 = "SELECT * FROM buyer WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];
       
    }
 }
?>

<?php
        $outgoing_id = $unique_id;
        
        $message = mysqli_real_escape_string($db, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($db, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../buyerlogin.php");
    }


    
?>