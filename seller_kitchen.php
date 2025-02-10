<?php include('server2.php') ?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }   
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.navbar {
  overflow: hidden;
  background-color: #808000;
  font-family: Arial;
  
}
.dropdown-content3 a {
  float: none;
  color: black;
  padding: 12px 13px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content3 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown:hover .dropdown-content3 {
  display: block;
}

.dropdown-content4 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 95px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content4 a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content4 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown:hover .dropdown-content4 {
  display: block;
}

.search_icon{
float:right;
margin-top:55px;
margin-right:50px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 350px;
font-size: 16px;
margin-right: 6px;
margin-left: 15px;
border-color: #DC7633;
border-radius: 5px;
}
.search{
background-color:tomato;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
}
.logo{
  margin-left: 525px;
  margin-bottom: 40px;
  margin-top: 70px;
}
.logo img{
  border-radius: 50%;
  
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.social_icons{ 
  margin-right: 15px;
  font-size: 24px;
  color: black;
}
.socialmedia{
 text-align: center;
 padding-top: 30px; 
 
}
.timer p{
  font-size: 18px;
  text-align: center;
  color: black;
}  
p{
  margin-bottom: 0;
  font-size: 16px;
} 

.section2{
  background-color: #DAF7A6 ;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 
}
 .section{
  margin-top: 30px;  
  text-align: center;
  margin-right: 30px;
 }
 h2{
  text-align: center;
  text-shadow: 2px 2px 5px #808000;
  font-size: 30px;
 }

 li{
  margin-left: 40px;
  margin-bottom: 20px;
 margin-top: 50px;
 }
 
 .footer2{
  
  height: 100px;
  width: 100%;
  background-color: #808000;

}

.card2 .product2{

  height: 220px;
}
.section4:after{
  
  content: "";
  display: table;
  clear: both; 
  
}
.upper{
  float:  left;
  width: 20%;
margin-bottom: 50px;

}
  
.card {
  height: auto;
  width: 190px;
  margin-top: 90px;
  margin-right: 20px;
  margin-bottom: 50px;
  margin-left: 30px;
  text-align: center;
  font-family: arial;
  transition: transform .2s;

}

.card img{
  border-radius: 30%;
  width:90%;
}
.card2 img{
  border-radius: 30%;
  width:90%;
}
h2{
  margin: 0px;
  padding: 0px;
  font-size: 18px;
}
button[type="submit"]{
   background-color:forestgreen;
padding:8px;
width:190px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

}
.price {
  color: black;
  font-size: 16px;
  margin: 5px 0 0 0;
}

.card .product{

  height: 290px;
}


.card .product:hover{
  transform: scale(1.1);
}
.card2 .product2{

  height: 290px;
}


.card2 .product2:hover{
  transform: scale(1.1);
}

.card button:hover {
  opacity: 0.7;
}

.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.3);

}
.product-quantity {
    padding: 5px 20px;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
    background-color: #DAF7A6 ;
    width: 100%;
    text-align: center;
}
.card a{
  margin-left: 25px;
  margin-right: 20px;
  color: tomato;
}
.row:after{
  
  content: "";
  display: table;
  clear: both; 
  
}
.row{
  margin-bottom: 30px;
}
.column2{
  margin-top: 20px;
  text-align: left;
  margin-left: 550px;
}

.home{
  color: black;
  float: left;
  margin-left: 20px;
}

.logout{
  float: right;
  color: black;
  margin-right: 20px;
}
</style>    
</head>
<body>
  
    
 
  
    


<?php
     $username=$_SESSION['username'];
     $seller_name=$_GET['seller_name'];
$query2 = "SELECT * FROM seller WHERE seller_name='$seller_name'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row2=$result2->fetch_assoc())
    {  
       $email=$row2['email'];
       $phone=$row2['phone'];
       $address=$row2['address'];
       $image=$row2['image'];
    }
 } 
 ?>

<div class="section2">
  <a class="home" href="#" onclick="history.back()"><i class="fa fa-fw fa-home"></i><b> Back</b></a>
  <a href="buyer_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout"><b>Log Out</b></a>      

  <div class="row"> 
  <div class="logo">
      <img src="<?php echo $image; ?>" alt="Picture" width="240px" height="240px">
    </div>
  
    
    <div class="column2">
      
     <p><b>Name: </b><?php echo $seller_name; ?></p>
    
    </div>
    <div class="column2">
      <p><b>Phone: </b><?php echo $phone; ?></p>
      
    </div>
    <div class="column2">
      <p><b>Email: </b> <?php echo $email; ?></p>
      
    </div>
    <div class="column2">
      <p><b>Address: </b> <?php echo $address; ?></p>
      
    </div>
</div>
 <div class="section4">
  
 <?php
      $query="SELECT * FROM food_items WHERE seller_name='$seller_name'";
     
     $sth = mysqli_query($db, $query);
    if (!empty($query)) { 
     while($row=mysqli_fetch_array($sth)){
             
  ?> 
  <div class="upper">
         
      <div class="card">   
         <form method="post" action="buyer_logged-in.php?action=add&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h2><?php echo $row["food_name"]; ?></h2>
          <b><p class="price"><?php echo "PKR. ".$row["price"]; ?></p></b>  
                
        </div>        
        <i><h3><?php echo $row["seller_name"]; ?></h3></i>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a> 
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
          <button type="submit" class="btnAddAction" onclick="showOrderAlert()">Order</button>
         </form>
      </div>  
   
    </div>
<?php 
  }
}

?>
<form action="cart3.php?action=add&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "add":
    if(!empty($_POST["quantity"])) {
      $pid=$_GET["pid"];
      $result=mysqli_query($db,"SELECT * FROM `food_items` WHERE id='$pid'");
            while($productByCode=mysqli_fetch_array($result)){
      $itemArray = array($productByCode["food_name"]=>array('food_name'=>$productByCode["food_name"], 'quantity'=>$_POST["quantity"], 'seller_name'=>$productByCode["seller_name"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode["food_name"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode["food_name"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      }  else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  }
  break;

  // code for removing product from cart
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["food_name"] == $k)
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
</form>

</div>

<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="about.php"><i class="fa fa-fw fa-address-book"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
      <a class="social_icons" href="contact.php"><i class="fa fa-fw fa-envelope"></i></a>
    </div>
    <div class="timer">
    <b> <p id="demo"></p></b>
    </div> 
 </div>



<script>
function showOrderAlert() {
    alert("Your order has been placed! ");
  }

setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>

  <script src="javascript/signup.js"></script>
</body>
</html>