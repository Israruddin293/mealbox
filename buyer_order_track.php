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
    <link rel="stylesheet" href="./css/index3.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

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
border-color: forestgreen ;
border-radius: 5px;
}
.search{
background-color:forestgreen;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
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
  background-color: #DAF7A6 ;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 padding-bottom: 100px;
}
.section2:after{
  background-color: #DAF7A6 ;
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
  text-shadow: 2px 2px 5px #DAF7A6;
  font-size: 30px;
 }
 h3{
  text-align: center;
  text-shadow: 2px 2px 5px #DAF7A6;
  
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
  background-color: forestgreen;
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
  background-color: #808000;
}

a{
  color: tomato;
  text-decoration: none;
 }
.dropbtn {
  background-color: #DAF7A6;
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
  background-color: #DAF7A6;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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
  background-color: #808000;
  margin-bottom: 0;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
  margin-right: 20px;
  
}
ul.breadcrumb li+li:before, ul.breadcrumb div+div:before{
  color: #DAF7A6;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #DAF7A6;
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
}
.username:hover{
  text-decoration: none;
}
.notify{
  margin-right: 150px;
}
.home{
  margin-left: 30px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left: 100px;
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
  background-color: #DAF7A6 ;
  height: 200px;
}

</style>    
</head>
<body>
  <div class="header">
    <div class="search_icon" >    
    <form method="post" action="search2.php"> 
      
      <input type="text" name="search" class="search_box" placeholder="Search Food Item..">
      <input type="submit" name="submit" class="search" value="Search">
    </form>
  </div>
    <div class="logo">
      <img src="./images/logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
    
  </div>

  <ul class="breadcrumb">
  <li><a class="home" href="buyer_logged-in.php"><b> Home</b></a></li>  
  <li><a href="users.php"><b> Live Chat</b></a></li> 
  <li><a href="cart3.php"><b> Cart</b></a></li>
  <li><b> Order Track</b></li> 
  <li><a class="notify" href="my-food-recipe/indexx.php"><b>Recipies Detail </b></a></li>
  
   



  

    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>
<div class="section2">
<h2>Ongoing Orders</h2>
         <table>
      <tr>
        <th>Serial No.</th>
        <th>Seller Name</th>
        <th>Food Item</th>
        <th>Food Ingredients</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Order Date & Time</th>
        <th>Status</th>
      </tr>
       <?php 
           $i=0;
           $username=$_SESSION['username'];
           $sql15 = mysqli_query($db, "SELECT * FROM order2 WHERE order_status='Ordered' AND buyer_name='$username'");
          if($sql15)
          {
            while($res15=mysqli_fetch_assoc($sql15))
         {
           $seller_name=$res15['seller_name'];
           $food_item=$res15['food_item'];
           $phone=$res15['phone'];
           $total_quantity = $res15['total_quantity'];
           $total_price = $res15['total_price'];
           $order_date=$res15['order_date'];
           $order_status=$res15['order_status'];
           $order_id=$res15['id'];
           $i++;
           //echo '<div class="dropdown-divider"></div>';
           ?>
            
              <tr>
                <th><?php echo $i; ?></th>
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $food_item; ?></th>
                <th><?php echo  $phone; ?></th>
                <th><?php echo $total_quantity; ?></th>
                <th><?php echo $total_price; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th> 
                
              </tr>

        <?php
         }
          }
          
          $sql11 = mysqli_query($db, "SELECT * FROM buyer_data WHERE order_status='Preparing' AND username='$username'");
          if($sql11)
          {
            while($res11=mysqli_fetch_assoc($sql11))
         {
           $seller_name=$res11['seller_name'];
           $food_item=$res11['food_item'];
           $phone=$res11['phone'];
           $total_quantity = $res11['total_quantity'];
           $total_price = $res11['total_price'];
           $order_date=$res11['order_date'];
           $order_status=$res11['order_status'];
           $order_id=$res11['id'];
           $i++;
           //echo '<div class="dropdown-divider"></div>';
           ?>
            
              <tr>
                <th><?php echo $i; ?></th>
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $food_item; ?></th>
                <th><?php echo  $phone; ?></th>
                <th><?php echo $total_quantity; ?></th>
                <th><?php echo $total_price; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th> 
                
              </tr>

        <?php
         }
          }
          $sql12 = mysqli_query($db, "SELECT * FROM buyer_data WHERE order_status='Delivered' AND username='$username'");
          if($sql12)
          {
            while($res12=mysqli_fetch_assoc($sql12))
         {
           $seller_name=$res12['seller_name'];
           $food_item=$res12['food_item'];
           $phone=$res12['phone'];
           $total_quantity = $res12['total_quantity'];
           $total_price = $res12['total_price'];
           $order_date=$res12['order_date'];
           $order_status=$res12['order_status'];
           $order_id=$res12['id'];
           $i++;
           //echo '<div class="dropdown-divider"></div>';
           ?>
            
              <tr>
                <th><?php echo $i; ?></th>
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $food_item; ?></th>
                <th><?php echo  $phone; ?></th>
                <th><?php echo $total_quantity; ?></th>
                <th><?php echo $total_price; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th> 
                
              </tr>

        <?php
         }
          }
           $sql11 = mysqli_query($db, "SELECT * FROM cancel_order WHERE status='1' AND buyer_name='$username'");
          if($sql11)
          {
            while($res11=mysqli_fetch_assoc($sql11))
         {
           $seller_name=$res11['seller_name'];
           $food_item=$res11['food_item'];
           $phone=$res11['phone'];
           $total_quantity = $res11['total_quantity'];
           $total_price = $res11['total_price'];
           $order_date=$res11['order_date'];
           $order_status=$res11['order_status'];
           $order_id=$res11['id'];
           $i++;
           //echo '<div class="dropdown-divider"></div>';
           ?>
            
              <tr>
                <th><?php echo $i; ?></th>
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $food_item; ?></th>
                <th><?php echo  $phone; ?></th>
                <th><?php echo $total_quantity; ?></th>
                <th><?php echo $total_price; ?></th>
                <th><?php echo $order_date; ?></th>
                <th><?php echo $order_status; ?></th> 
                
              </tr>

        <?php
         }
          }
        ?>
        </table>


</div>
  
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

<?php 
     
    if(isset($_GET['id']))
    {
      $order_id=$_GET['id'];
      $sql_update=mysqli_query($db, "UPDATE buyer_data SET status=0 WHERE id='$order_id'");
    }
    if(isset($_GET['id2']))
    {
      $cancel_id=$_GET['id2'];
      $sql_update=mysqli_query($db, "UPDATE cancel_order SET status=0 WHERE id='$cancel_id'");
    }
 ?>