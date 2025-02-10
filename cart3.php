<?php
require_once("server2.php");
?>

    <?php
$seller_name="";
//code for Cart


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
 
  

  // code for removing product from cart
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  // code for if cart is empty
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>

<HTML>
<HEAD>
<TITLE>Cart</TITLE>
<link href="./css/s.css" type="text/css" rel="stylesheet" />
<style>
body {
  font-family: Arial;
  font-size: 15px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #DAF7A6 ;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: white;
}

input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background-color: #FFD0C4;
}

label {
  margin-bottom: 10px;
  display: block;
  margin-top: 10px;
}
.form{
  margin-top: 80px;
  
}

.checkout{
  width: 90%;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: forestgreen;
  color: white;
  padding: 12px;
  margin: 10px 150px;
  border: none;
  width: 70%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  
}

.btn:hover {
  background-color: mediumseagreen;
}

.return button{
  border: lightgreen; 1px solid;
  padding: 7px 10px 7px;
  color: black;
  float: left;
  text-decoration: none;
  border-radius: 3px;
  margin: 50px 0 0 10px;
  background-color: lightgreen;
  cursor: pointer;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span{
  margin-bottom: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
th{
  color: white;
  background-color: forestgreen ;
}
#btnEmpty {
	
	border: #808000 ; 1px solid;
	padding: 5px 10px;
	color: white;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
	background-color: #808000;
}

#btnBack {
	background-color: #808000;
	border: #808000; 1px solid;
	padding: 5px 10px;
	color: white;
	float: left;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;

}
</style>
</HEAD>
<BODY>


<!-- Cart ---->
<div id="shopping-cart">

<div class="txt-heading"><b>Cart</b></div>
<a id="btnBack" href="buyer_logged-in.php?action=empty"><strong>Return to Home</Strong></a>
<a id="btnEmpty" href="cart3.php?action=empty"><strong>Empty Cart</strong></a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
    $sum="";
    $i=1;
?>  
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>

<th style="text-align:left;"><b>Food Item Numbers</b></th>
<th style="text-align:left;"><b>Seller Name</b></th>
<th style="text-align:left;"><b>Name</b></th>
<th style="text-align:left;"><b>Ingredients</b></th>
<th style="text-align:right;"><b>Quantity</b></th>
<th style="text-align:right;" width="10%"><b>Unit Price</b></th>
<th style="text-align:right;" width="10%"><b>Price</b></th>
<th style="text-align:center;" width="5%"><b>Remove</b></th>
</tr> 
<?php
            foreach ($_SESSION["cart_item"] as $item) {
              
                $item_price = $item["quantity"] * $item["price"];
                $foodname = $item["food_name"];
                $food_ingridient = $item["category_name"];
                $seller_name = $item["seller_name"];
                $unitprice = $item["price"];
                $quantity = $item["quantity"];
                $sum = $i++;
                date_default_timezone_set('Asia/dhaka');
                $order_date = date('y-m-d h:i:s');
            ?>
            
            <tr>
                <td><?php echo $sum; ?></td>
                <td><?php echo $seller_name; ?></td>
                <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $foodname; ?></td>
                <td><?php echo $food_ingridient; ?></td>
                <td style="text-align:right;"><?php echo $quantity; ?></td>
                <td style="text-align:right;"><?php echo "PKR. " . $unitprice; ?></td>
                <td style="text-align:right;"><?php echo "PKR. " . number_format($item_price, 2); ?></td>
                <td style="text-align:center;"><a href="cart3.php?action=remove&code=<?php echo $item["food_name"]; ?>" class="btnRemoveAction"><img src="./images/icon-delete.png" alt="Remove Item" /></a></td>
            </tr>
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);


        

          
    }
    
    $tq=$total_quantity;
    ?>

<tr>
<td colspan="3" align="right"><b>Cash On Delivery:</b></td>

<td align="right" colspan="3"><b> PKR. 50.00</b></td>
<td></td>
</tr>
<tr>
<td colspan="3" align="right"><b>Total:</b></td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "PKR. ".number_format($total_price+50, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>    
  <?php
  
  if(!empty(number_format($total_price, 2))){
?>

  <div class="checkout">
 <!-- <button type="button" onclick="myfunction()"><strong>Checkout</strong></button>  -->
<script>
  function myfunction() {
      document.getElementById("checkout").style.display = "block";
    }
</script>
<div class="checkout" id="checkout">
  <div class="form">
<div class="row">
  <div class="col-75">
<form method="POST" action="success(5).php">
    <div class="container">
      
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i><b> Full Name</b></label>
            <input type="text" id="fname" name="fullname" placeholder="Enter name" required>       
<?php            
       $username=$_SESSION['username'];
$buy= "SELECT * FROM buyer WHERE username='$username'";
$sql= mysqli_query($db,$buy);
if($sql->num_rows>0){
    
    while($row=$sql->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];
       $address4=$row['address'];
       $phone4=$row['phone'];
    }
 }  
 ?>   
           
           <label for="phone"><i class="fa fa-phone"></i><b> Phone Number</b></label>
           <div class="column" id="column">
           <input type="radio" name="phone" value="<?php echo $phone4; ?>" onclick="previousPhone()" required>
           <label >Same Phone Number (Sign Up Number)</label>
           <input type="radio" name="phone2" value="phone" onclick="newPhone('<?php echo $food_ingridient; ?>')" required>
           <label >Ingredients Confirmation</label><br>
                                </div>
            <input type="text" id="phone3" name="phone3"  >

           <label for="address"><i class="fa fa-address-card-o"></i><b> Address</b></label>
            <div class="column" id="column">
            <input type="radio" name="address2" value="<?php echo $address4; ?>" onclick="previousAddress()" required>
           <label >Same Address (Sign Up Address)</label>
           <input type="radio" name="address2" value="address" onclick="newAddress()" required>
           <label >New Address</label><br>
           </div>

            <input type="text" id="address3" name="address3"  placeholder="Enter address" >
            
          </div>
<script type="text/javascript"> 
 
 document.getElementById("phone3").style.display = "none";
 document.getElementById("address3").style.display = "none";
   function previousAddress() {
  document.getElementById("address3").style.display = "none";
}
function newAddress() {
  document.getElementById("address3").style.display = "block";
}
 function previousPhone() {
  document.getElementById("phone3").style.display = "none";
}
function newPhone(category_name) {
  document.getElementById("phone3").style.display = "block";
  document.getElementById("phone3").value = category_name;
                            }
</script>
          <div class="col-50">
            <h3>Payment</h3>
                <div class="payment">
                 
                     <input type="radio" id="Cash on Delivery" name="cash" value="Cash on Delivery" required>
                     <label for="Cash on Delivery"><b>Cash On Delivery</b></label>
                  
                </div> 
             
                <label ><strong>Order Date:</strong></label>
                <span><?php echo $order_date; ?></span>
            </div>
          </div>

        
        </div>
        
        <input type="submit" name="save" value="Checkout" class="btn" >
   
  


      </form>
    </div>
  </div>

</div>
</div>
</div>
<?php
}

} else {
?>
<div class="no-records"><b>Your Cart is Empty</b></div>
<?php 
}

?>


</div>



</BODY>
</HTML>





