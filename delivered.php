<?php include('server2.php') ?>
<?php
if(isset($_GET['id']))
    {
      $order_id=$_GET['id'];
      $username=$_SESSION['username'];
      $sql11=mysqli_query($db, "UPDATE buyer_data SET order_status='Delivered', delivery_man='$username' WHERE order_id='$order_id'");
      $sql3= mysqli_query($db, "DELETE FROM order2 WHERE id='$order_id'");
    }
    header('location: delivery_order_track.php');

?>