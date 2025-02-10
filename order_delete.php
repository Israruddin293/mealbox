<?php include('server2.php') ?>
<?php
  if(isset($_GET['id']))
  {
  	$order_id=$_GET['id'];
     $sql= mysqli_query($db, "SELECT * FROM order2 WHERE id='$order_id'");
     if(mysqli_num_rows($sql)>0)
     {
        while($result=mysqli_fetch_assoc($sql))
        {
          $buyer_name=$result['buyer_name'];
          $food_item=$result['food_item'];
          $total_quantity = $result['total_quantity'];
          $order_date=$result['order_date'];
          $order_status=$result['order_status'];
          $seller_name=$result['seller_name'];
          $unit_price=$result['unit_price'];
          $total_price=$result['total_price'];
          $cash=$result['cash'];
          $phone=$result['phone'];
          $address=$result['address'];
          $fullname=$result['fullname'];
        }
     }
    
   
      
    
     


     $sql2 = "INSERT INTO cancel_order (buyer_name, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, status, order_status, order_id)
       VALUES ('$buyer_name', '$fullname', '$phone','$address','cash','$order_date', '$food_item', '$seller_name', '$total_quantity', '$unit_price','$total_price', '1','Cancelled', '$order_id' )";


         if (mysqli_query($db, $sql2)) {
            $sql3= mysqli_query($db, "DELETE FROM order2 WHERE id='$order_id'");
            header('location: seller_order_track.php');
         }
         else{
          echo mysqli_error($db);
         } 
  	
  }