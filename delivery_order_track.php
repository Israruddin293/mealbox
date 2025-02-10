<?php include('server2.php') ?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }   
  if (isset($_GET['logout'])) {
   $status = "Offline now";
    $username = $_SESSION['username'];
    $sql = mysqli_query($db, "UPDATE seller SET status = '".$status."' WHERE username ='".$username."'");
    if($sql){
    session_unset();
    unset($_SESSION["cart_item"]);
    unset($_SESSION['username']);
    unset($_SESSION['seller_name']);
    unset($_SESSION['phone']);
    unset($_SESSION['address']);
    header("location: index.php");
  }
}
?>
<?php
     $username=$_SESSION['username'];
$query2 = "SELECT * FROM seller WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $seller_name=$row['seller_name'];
       
    }
 } 
 ?>

 <?php 
     
    if(isset($_GET['id']))
    {
      $order_id=$_GET['id'];
      $sql_update=mysqli_query($db, "UPDATE order2 SET delivery_status=1 WHERE id='$order_id'");
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index3.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    .navbar {
  overflow: hidden;
  background-color: tomato;
  font-family: Arial;
  
}
.name{
  float: right;
  margin-top: 20px;
  padding-top: 15px;
  color: black;
  padding-bottom: 40px;
  background-image: url("./images/60.png");
  background-repeat: no-repeat;
  background-size: 330px 110px;
  margin-right: 10px;
  width: 25%;
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  overflow: hidden;
  transform: translatey(0px);
  animation: float 1.5s ease-in-out infinite;
}

@keyframes float {
  0% {
    
    transform: translatey(0px);
  }
  50% {
    
    transform: translatey(-20px);
  }
  100% {
    
    transform: translatey(0px);
  }
}
    .dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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

.name{
  float: right;
  margin-top: 20px;
  padding-top: 15px;
  color: black;
  padding-bottom: 40px;
  background-image: url("./images/60.png");
  background-repeat: no-repeat;
  background-size: 330px 120px;
  margin-right: 10px;
  width: 25%;
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  overflow: hidden;
  transform: translatey(0px);
  animation: float 1.5s ease-in-out infinite;
}

@keyframes float {
  0% {
    
    transform: translatey(0px);
  }
  50% {
    
    transform: translatey(-20px);
  }
  100% {
    
    transform: translatey(0px);
  }
}


.section2{
  background-color: mistyrose;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 padding-bottom: 100px;
}
.section2:after{
  
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
  margin-top: 40px;
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
h2{
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  font-size: 30px;
 }
 h3{
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  
 }
.price {
  color: black;
  font-size: 16px;
  margin-top: 15px;
}

.card .product{
  height: 250px;
}

.card .product:hover{
  transform: scale(1.1);
}

.card button {
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: darkblue;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 14px;
  
}

.card button:hover {
  opacity: 0.7;
}

.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.3);

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
  margin-bottom: 0;
}   
.footer2{
  height: 100px;
  width: 100%;
  background-color: tomato;
}

a{
  color: tomato;
  text-decoration: none;
 }
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;

  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 margin-left: 620px;
}

.dropdown-content a {
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: tomato;
  margin-bottom: 0;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
  margin-right: 20px;
  
}
ul.breadcrumb li+li:before, ul.breadcrumb div+div:before{
  color: white;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: white;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: none;

}
.username{
  color: white;
  font-size: 18px;
  text-decoration: none;
  margin-left: 650px;
}
.username:hover{
  text-decoration: none;
}
.notify{
  margin-right: 400px;
}
.home{
  margin-left: 80px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 94%;
  margin-left: 50px;
  margin-top: 50px;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.space{
  background-color: mistyrose;
  height: 200px;
}
button[type="submit"]{
   background-color:tomato;
padding:8px;
width:110px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

}
</style>    
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="./images/mealbox_logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
  </div>
  <ul class="breadcrumb">
  <li><a class="home" href="delivery.php"><b> Home</b></a></li>  
  <li><b> Order Track</b></li>
  
   



  

    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a  href="#">Profile</a>
    <a href="delivery_logout.php?logout_id=<?php echo $_SESSION['username']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>
<div class="section2">
<h2>Ongoing Orders</h2>
         <table>
      <tr>
        <th>Serial No.</th>
        <th>Order No.</th>
        <th>Buyer Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Total Price</th>
        <th>Order Date</th>
        <th>Status</th>
        <th></th>
        <th>Seller Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
       <?php
          $i=0;
          $sql10 = mysqli_query($db, "SELECT * FROM order2 WHERE order_status='On The Way'");
         while($res=mysqli_fetch_assoc($sql10))
         {
           $buyer_name=$res['buyer_name'];
           $food_item=$res['food_item'];
           $total_quantity = $res['total_quantity'];
           $total_price = $res['total_price'];
           $order_date=$res['order_date'];
           $order_status=$res['order_status'];
           $order_id=$res['id'];
           $buyer_phone=$res['phone'];
           $buyer_address=$res['address'];
           $seller_name=$res['seller_name'];
           $i++;

            
            $sql11 = mysqli_query($db, "SELECT * FROM seller WHERE seller_name='$seller_name'");   $res2=mysqli_fetch_assoc($sql11);  
               $seller_phone=$res2['phone'];
              $seller_address=$res2['address'];     
           ?>
              
              <tr>
                 <th><?php echo $i; ?></th>
                 <th><?php echo $order_id; ?></th>
                <th><?php echo $buyer_name; ?></th>
                <th><?php echo $buyer_phone; ?></th>
                <th><?php echo $buyer_address; ?></th>
                <th><?php echo $total_price; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th>
                <th><button type="submit" onclick="myFunction()">Delivered</button></th> 
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $seller_phone; ?></th>
                <th><?php echo $seller_address; ?></th>
              </tr>

        <?php
         }
        ?>
        </table>


</div>
  <script>
  function myFunction(){
    window.location.href = "delivered.php?id=<?php echo $order_id; ?>";
  }
  </script> 
    
<div class="space">
    
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
     <p id="demo"></p>
    </div> 
 </div>



<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
</body>
</html>