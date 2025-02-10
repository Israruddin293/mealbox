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

    .navbar {
  overflow: hidden;
  background-color: #808000;
  font-family: Arial;
  
}

.name{
  float: right;
  margin-top: 20px;
  padding-top: 15px;
  color: black;
  padding-bottom: 40px;
  background-image: url("./images/001.png");
  background-repeat: no-repeat;
  background-size: 100% 110px;
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
  background-color: #DAF7A6 ;
  border: 0;
}

.card img{
  border-radius: 30%;
  width:90%;
}
h2{
  margin-top: 10px;
  text-shadow: 2px 2px 5px #808000;
  padding: 0px;
  font-size: 18px;
  font-weight: bold;
 }
 h3{
  text-align: center;
  margin-top: 10px;
  padding: 0px;
  font-size: 30px;
  font-weight: bold;
  text-shadow: 2px 2px 5px #808000;
  margin-bottom: 50px;
  
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
  background-color: #808000;
}

a{
  color: tomato;
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
  background-color: #808000;
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
  margin-right: 420px;
}
.home{
  margin-left: 30px;
}
</style>    
</head>
<body>
  <div class="header">
    <div class="name">
    <h1><i><b><?php echo $seller_name; ?></b></i></h1>
    </div>
    <div class="logo">
      <img src="./images/logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
  </div>

  <ul class="breadcrumb">
  <li class="home"><b> Home</b></li>
  <li><a href="add_food.php"><b> Add Item</b></a></li> 
  <li><a href="my-food-recipe"><b> Add Recipe</b></a></li>   
  <li><a href="seller_users.php"><b> Chat</b></a></li> 
  <li><a href="seller_order_track.php"><b> Order</b></a></li>
  <li><a class="notify" href="seller_order_track2.php"><b>Order Track</b></a></li>

  
   

<?php
$sql10 = mysqli_query($db, "SELECT * FROM order2 WHERE status=0 AND seller_name='$seller_name'");
$count=mysqli_num_rows($sql10);
?>

  <div class="dropdown">
  <a class="username" href="#"><i class="fa fa-bell"></i> <span id="count" class="badge badge-primary"><?php echo $count; ?></span></a>
  <div class="dropdown-content">
    <?php
      $sql11 = mysqli_query($db, "SELECT * FROM order2 WHERE status=0 AND seller_name='$seller_name'");
      if(mysqli_num_rows($sql11)>0)
      {
         while($res=mysqli_fetch_assoc($sql11))
         {
           echo '<a class="dropdown-item text-primary" href="seller_order_track.php?id='.$res['id'].'">You have new Order</a>';
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
    <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

<div class="section2">
  <h3><i>YOUR ITEMS</i></h3>

     <?php
          $product= mysqli_query($db,"SELECT * FROM food_items WHERE seller_name = '".$seller_name."'");       
          if (!empty($product)) { 
              while ($row2=mysqli_fetch_array($product)) {
        ?> 

    <div class="upper">
      <div class="card"> 
                    
      <div class="product">
        <a href="/f4/food_list_edit.php?id=<?php echo $row2["id"];?>&food_name=<?php echo $row2["food_name"];?>&category_id=<?php echo $row2["category_id"];?>"><img src="<?php echo $row2["image"]; ?>" alt="<?php echo $row2["food_name"]?>" height="140px" ></a>
          <h2><?php echo $row2["food_name"]; ?></h2>
        
        <b><p class="category_name"><?php echo "Ingridients: ".$row2["category_name"]; ?></p></b>
        </div><br><br><br><br><br><br><br>
        <a href="seller_comment.php?food_name=<?php echo $row2["food_name"]; ?>&food_id=<?php echo $row2["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
        <b> <p class="price"><?php echo "PkR. ".$row2["price"]; ?></p></b>
      </div>  
   </div>
        <?php
    }
  }  
  ?>
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
</body>
</html>