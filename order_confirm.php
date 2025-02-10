<?php include('server2.php') ?>
<?php
  if(isset($_GET['id']))
  {
  	$order_id=$_GET['id'];
  	$username=$_SESSION['username'];

  	$sql= mysqli_query($db, "SELECT * FROM order2 WHERE id='$order_id'");
  	if(mysqli_num_rows($sql)>0)
  	while($result=mysqli_fetch_assoc($sql))
  	{
  		$unique_id=$result['unique_id'];
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

     $sql3=mysqli_query($db, "UPDATE order2 SET order_status= 'Preparing' WHERE id='$order_id'");

  	 $sql2 = "INSERT INTO buyer_data (unique_id, username, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, order_status, status, order_id)
       VALUES ('$unique_id', '$buyer_name', '$fullname', '$phone','$address','cash','$order_date', '$food_item', '$seller_name', '$total_quantity', '$unit_price','$total_price', 'Preparing', '1', '$order_id')";

?> 

<?php
         if (mysqli_query($db, $sql2)) {
            header('location: seller_order_track.php');
         }
         else{
         	echo mysql_error($db);
         }
  }  




?>


