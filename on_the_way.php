<?php include('server2.php') ?>
<?php
if(isset($_GET['id']))
    {
      $order_id=$_GET['id'];
      $sql_update=mysqli_query($db, "UPDATE order2 SET order_status='On The Way' WHERE id='$order_id'");
      $sql11=mysqli_query($db, "UPDATE buyer_data SET order_status='On The Way' WHERE order_id='$order_id'");
    }
    header('location: seller_order_track2.php');

?>