<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
?>

<?php
$username=$_SESSION['username'];
$query2 = "SELECT * FROM seller WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];
       
    }
 }
?>

<?php
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($db, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($db, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($db, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();

          $buyer = mysqli_query($db, "SELECT * FROM buyer WHERE unique_id = '".$incoming_id."'");
          if (!empty($buyer)) { 
              while ($row=mysqli_fetch_array($buyer)) {
              $buyer_email= $row["email"];
              $buyer_name=$row["username"];
          }
          
        $to_email = $buyer_email;
        $subject = "New Message From Mealbox";
        $body = "Hi " .$buyer_name. " , ".$_SESSION["seller_name"]. " has sent a message in Mealbox: \n\"".$message."\"";
        $headers = "From: mealbox000@gmail.com";
        mail($to_email, $subject, $body, $headers);
        }  
        }
    }else{
        header("location: sellerlogin.php");
    }


    
?>