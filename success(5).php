<?php
include_once 'cart3.php';
$tq=$total_quantity;
$tp=$total_price;

foreach ($_SESSION["cart_item"] as $item){
  $sql = mysqli_query($db, "SELECT * FROM seller WHERE seller_name = '".$item["seller_name"]."'");
          if (!empty($sql)) { 
              while ($row=mysqli_fetch_array($sql)) {
              $seller_email= $row["email"];
          }
        $to_email = $seller_email;
        $subject = "New Food Order From Mealbox";
        $body = "Hi " .$item["seller_name"]. ", ".$_SESSION["username"]. " has ordered " .$item["quantity"]. " " .$item["food_name"];
        $headers = "From: mealbox000@gmail.com";
  
}        
}    
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" type="text/css" href="style(3).css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
  <meta http-equiv="refresh"
        content="3; url = buyer_logged-in.php" />
</head>
<body>
   <!-- Modal HTML -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>      
        <h4 class="modal-title">Awesome!</h4> 
      </div>
       <div class="modal-body">
        <p class="text-center">Your Order is Confirmed.</p>
        <p class="text-center">Thanks for Shopping from Mealbox.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" formaction="/buyer_logged-in.php" class="btn btn-success btn-block" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>     
    
</body>
</html>

<?php 
include_once 'server2.php';
date_default_timezone_set('Asia/Dhaka');
$order_date=date('y-m-d h:i:s');
$username=$_SESSION['username'];

 ?> 
<?php
 $buy= mysqli_query($db,"SELECT * FROM buyer WHERE username='$username'");
    if(mysqli_num_rows($buy)>0){
        
        while($row=mysqli_fetch_assoc($buy))
        {  
           $unique_id=$row['unique_id'];
           $address=$row['address'];
           $phone=$row['phone'];
           
        }
     }  
 


// Attempt insert query execution
if(isset($_POST['save']))
{
    $fullname =$_POST['fullname'] ;
   $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
    $phone2 = $_POST['phone2'];
    $phone3 = $_POST['phone3'];

   
     if($phone2==$phone && $address2==$address)
     {       
            
            foreach ($_SESSION["cart_item"] as $item){
                $item_price = $item["quantity"]*$item["price"];
                $foodname=$item["food_name"]; 
                $seller_name=$item["seller_name"]; 
                 $unitprice=$item["price"];
                $quantity=$item["quantity"];   
                $sum=$i++;
                date_default_timezone_set('Asia/Dhaka');
                $order_date=date('y-m-d h:i:s');
            $query2 =mysqli_query($db, "SELECT * FROM buyer WHERE username='$username'") ;
            if(mysqli_num_rows($query2)>0){
            
            while($row2=mysqli_fetch_assoc($query2))
            {  
               $unique_id=$row2['unique_id'];      
            }
           }

           $sql2 = "INSERT INTO order2 (unique_id, buyer_name, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, order_status)
           VALUES ('$unique_id', '$username', '$fullname', '$phone','$address','Cash on delivery','$order_date', '$foodname', '$seller_name', '$quantity', '$unitprice','$item_price', 'Ordered')";
             if (mysqli_query($db, $sql2)) {
                //echo "New record created successfully !";
             } else {
                echo mysqli_error($db);
             }
         }
     }
     else if($phone2==$phone && $address2!=$address)
     {
        foreach ($_SESSION["cart_item"] as $item){
                $item_price = $item["quantity"]*$item["price"];
                $foodname=$item["food_name"]; 
                $seller_name=$item["seller_name"]; 
                 $unitprice=$item["price"];
                $quantity=$item["quantity"];   
                $sum=$i++;
                date_default_timezone_set('Asia/Dhaka');
                $order_date=date('y-m-d h:i:s');
        $query3 = mysqli_query($db, "SELECT * FROM buyer WHERE username='$username'");
            if(mysqli_num_rows($query3)>0){
            
            while($row3=mysqli_fetch_assoc($query3))
            {  
               $unique_id=$row3['unique_id'];
                    
            }
           }
           
            $sql3 = "INSERT INTO order2 (unique_id, buyer_name, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, order_status)
           VALUES ('$unique_id', '$username', '$fullname', '$phone','$address3','Cash on delivery','$order_date', '$foodname', '$seller_name', '$quantity', '$unitprice','$item_price', 'Ordered')";
             if (mysqli_query($db, $sql3)) {
                //echo "New record created successfully !";
             } else {
                echo mysqli_error($db);
             } 
        }    
     }
            
            
    else if($address2==$address && $phone2!=$phone)
    {
          foreach ($_SESSION["cart_item"] as $item){
                $item_price = $item["quantity"]*$item["price"];
                $foodname=$item["food_name"]; 
                $seller_name=$item["seller_name"]; 
                 $unitprice=$item["price"];
                $quantity=$item["quantity"];   
                $sum=$i++;
                date_default_timezone_set('Asia/Dhaka');
                $order_date=date('y-m-d h:i:s');  
            $query4 = mysqli_query($db, "SELECT * FROM buyer WHERE username='$username'");
            if(mysqli_num_rows($query4)>0){
            
            while($row4=mysqli_fetch_assoc($query4))
            {  
               $unique_id=$row4['unique_id'];      
            }
           }

           $sql4 = "INSERT INTO order2 (unique_id, buyer_name, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, order_status)
           VALUES ('$unique_id', '$username', '$fullname', '$phone3','$address','Cash on delivery','$order_date', '$foodname', '$seller_name', '$quantity', '$unitprice','$item_price', 'Ordered')";
             if (mysqli_query($db, $sql4)) {
                //echo "New record created successfully !";
             } else {
                echo mysqli_error($db);
             }     
        }   

    }
    else
    {    
           foreach ($_SESSION["cart_item"] as $item){
                $item_price = $item["quantity"]*$item["price"];
                $foodname=$item["food_name"]; 
                $seller_name=$item["seller_name"]; 
                 $unitprice=$item["price"];
                $quantity=$item["quantity"];   
                $sum=$i++;
                date_default_timezone_set('Asia/Dhaka');
                $order_date=date('y-m-d h:i:s'); 
            $query5 = mysqli_query($db, "SELECT * FROM buyer WHERE username='$username'");
            if(mysqli_num_rows($query5)>0){
            
            while($row5=mysqli_fetch_assoc($query5))
            {  
               $unique_id=$row5['unique_id'];
                    
            }
           }
           
            $sql5 = "INSERT INTO order2 (unique_id, buyer_name, fullname, phone, address, cash, order_date, food_item, seller_name, total_quantity, unit_price, total_price, order_status)
           VALUES ('$unique_id', '$username', '$fullname', '$phone3','$address3','Cash on delivery','$order_date', '$foodname', '$seller_name', '$quantity', '$unitprice','$item_price', 'Ordered')";
             if (mysqli_query($db, $sql5)) {
                //echo "New record created successfully !";
             } else {
                echo mysqli_error($db);
             }     
        }     

    }   
}            
  unset($_SESSION["cart_item"]);

   
   

   //$cash = mysqli_real_escape_string($db,$_POST['cash']);
  // $order_date = $_POST['order_date'];
  // $delivery_date = $_POST['delivery_date'];
 

 

//$total_quantity;
//$total_price;
 
// Close connection
//mysqli_close($db);
?>
