<?php include('server2.php') ?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index2.php');
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

    <link rel="stylesheet" href="./css/own_style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
  background-color: mistyrose;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 
}
 .section{
  height: 100px;
  background-color: mistyrose;
 }
 h2{
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
  font-size: 30px;
   padding: 0px;
    font-weight: bold;
 }

h3{
  margin-top: 10px;
  padding: 0px;
  font-size: 19px;
  font-weight: bold;
}
 
 
 .footer2{
  
  height: 100px;
  width: 100%;
  background-color: tomato;

}


.section4:after{
  
  content: "";
  display: table;
  clear: both; 
  
}


button[type="submit"]{
   background-color:tomato;
padding:8px;
width:190px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

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
}
.username:hover{
  text-decoration: none;
}
.notify{
  margin-right: 800px;
}
.home{
  margin-left: 50px;
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
</style>    
</head>
<body>
  
  <div class="header">
   
    <div class="logo">
      <img src="./images/logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
    
  </div>


  <ul class="breadcrumb">
  <li class="home"><b> Home</b></li>
  <li><a class="notify" href="delivery_order_track.php"><b> Order Track</b></a></li>
  
   

<?php
$username=$_SESSION['username'];
$sql10 = mysqli_query($db, "SELECT * FROM order2 WHERE delivery_status=0 AND order_status='On The Way'");
$count=mysqli_num_rows($sql10);

?>

  <div class="dropdown">
  <a class="username" href="#"><i class="fa fa-bell"></i> <span id="count" class="badge badge-primary"><?php echo $count; ?></span></a>
  <div class="dropdown-content">
    <?php
      $sql11 = mysqli_query($db, "SELECT * FROM order2 WHERE delivery_status=0 AND order_status='On The Way'");
      
       if(mysqli_num_rows($sql11)>0)
            {
               if(mysqli_num_rows($sql11)>0)
               {
                while($res=mysqli_fetch_assoc($sql11))
                 {
                   echo '<a class="dropdown-item text-primary" href="delivery_order_track.php?id='.$res['id'].'">New order for delivery</a>';
                   //echo '<div class="dropdown-divider"></div>';
                 }
               } 
               
            }
      else{        
            echo '<a href="#">No Messages Found</a>';             
          }
    ?>
   </div> 
    </div>

    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="delivery_logout.php?logout_id=<?php echo $_SESSION['username']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

  
<div class="section2">
  
 <h2>Completed Orders</h2>
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
        <th>Seller Name</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
       <?php
           $i=0;
           $username=$_SESSION['username'];
           $sql15 = mysqli_query($db, "SELECT * FROM buyer_data WHERE order_status='Delivered'");
          if($sql15)
          {
            while($res15=mysqli_fetch_assoc($sql15))
         {
           $buyer_name=$res15['username'];
           $food_item=$res15['food_item'];
           $total_quantity = $res15['total_quantity'];
           $total_price = $res15['total_price'];
           $order_date=$res15['order_date'];
           $order_status=$res15['order_status'];
           $order_id=$res15['id'];
           $buyer_phone=$res15['phone'];
           $buyer_address=$res15['address'];
           $seller_name=$res15['seller_name'];
           $i++;

            
            $sql11 = mysqli_query($db, "SELECT * FROM seller WHERE seller_name='$seller_name'");   
            $res2=mysqli_fetch_assoc($sql11);  
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
                <th><?php echo $seller_name; ?></th>
                <th><?php echo $seller_phone; ?></th>
                <th><?php echo $seller_address; ?></th>
                
              </tr>

        <?php
         }
          }
          
        ?>
        </table>
  
 
</div>
<div class="section">
  
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

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   

<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>