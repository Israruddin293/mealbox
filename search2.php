<?php include('server2.php') ?>
<?php

$db = mysqli_connect('localhost', 'root', '', 'mealbox3');


  ?>
  
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="/mealbox_logo.png">
    <link rel="stylesheet" href="./css/index3.css"/>

    <link href="./css/s.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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
border-color: forestgreen;
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
cursor: pointer;
}

.result{
  margin-top: 200px;
 height: 270px;
 margin-left: 300px;
}

span{
  
  text-align: center;
  color: darkgrey;
  
  font-size: 60px;
}



.search_icon img{
  border: 1px solid black;
  background-color: lightgrey;
  border-radius: 6px;

}


.footer{
  margin-top: 10px;
  height: 100px;
  width: 100%;
  background-color: #808000;
} 

.section3{
  height: 400px;
  width: 100%;
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
.footer2{
  height: 100px;
  width: 100%;
  background-color: #808000;
}

h2{
  margin-top: 10px;
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
 }
 h1{
  text-align: center;
  text-shadow: 2px 2px 5px tomato;
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
.card img{
  border-radius: 30%;
  width:90%;
}
 h3{
  color: black;
  margin-top: 10px;
  text-shadow: 2px 2px 5px tomato;
  font-size: 19px;
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
  padding: 0px;
  
}
h2{  
  padding: 0px;
  font-size: 18px;
  font-weight: bold;
  margin-top: 20px;
}
 a{
  color: tomato;
  text-decoration: none;
 }
 .section2{
  background-color: #DAF7A6 ;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 
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
  background-color: #DAF7A6 ;
  border: 0;
}
.card .product{
  height: 290px;
}
 a{
  color: tomato;
  margin-right: 20px;
  margin-left: 20px;
 }
 .section2{
  background-color: #DAF7A6 ;
  padding-top: 20px;
 height: 100%;
 width: 100%;
 padding-bottom: 50px;
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
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 200px;
}

.dropdown-content a {
  color: black;
  padding: 12px 18px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

ul.breadcrumb {
  padding: 10px 12px;
  list-style: none;
  background-color: #808000;
  margin-bottom: 0;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
  
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
  margin-left: 200px;
}
.username:hover{
  text-decoration: none;
}
.notify{
  margin-right: 200px;
}
.home{
  margin-left: 30px;
}
 </style>   
</head>
<body>
  
  <div class="header">
     <div class="search_icon" >    
    <form method="post" action="search2.php"> 
      
     <input type="text" name="search" id="search" class="search_box" placeholder="Search Food Item..">
      <input type="submit" name="submit" class="search" value="Search">
    </form>
  </div>
    <div class="logo">
      <img src="./images/logo.png" alt="Picture" width="210px" height="150px">
    </div>
  </div>
  <ul class="breadcrumb">
  <li><a class="home" href="buyer_logged-in.php"><b> Home</b></a></li>  
  <li><a href="users.php"><b> Live Chat</b></a></li> 
  <li><a href="cart3.php"><b> Cart</b></a></li>
  <li><a href="buyer_order_track.php"><b> Order Track</b></a></li> 
  

    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a  href="seller_profile.php">Profile</a>
    <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

<div class="section2">
 <?php
          if (isset($_POST["submit"])) {
            $str = $_POST["search"];
         if(!empty($str)){
      $query="SELECT * FROM food_items WHERE food_name LIKE '%$str%'";
   
     $sth = mysqli_query($db, $query);
    if (mysqli_num_rows($sth) > 0) { 
     while($row=mysqli_fetch_array($sth)){
             
  ?>
   
        
<div class="section">
        
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="search2.php?action=add&food_name=<?php echo $row["food_name"]; ?>&seller_name=<?php echo $row["seller_name"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h2><?php echo $row["food_name"]; ?></h2>
          <b><p class="price"><?php echo "PkR. ".$row["price"]; ?></p></b>  
                
        </div>
         <i><h3><?php echo $row["seller_name"]; ?></h3></i>
         <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>     

         </form>
      </div>  
   
    </div>
  
        <?php

  ?>
<?php 
  }
}
else{
      ?>
      <div class="result">
      <img src="./images/57.png" width="100px" height="100px">
      <span><b>Result Not Found</b></span>
      </div>
      <?php
    }  
}  
  else{
      ?>
      <div class="result">
      <img src="./images/57.png" width="100px" height="100px">
      <span><b>Please Write Something</b></span>
      </div>
      <?php
    }  
 }
else{
      ?>
      <div class="section3">
          <div class="result">
      <img src="./images/57.png" width="100px" height="100px">
      <span><b>Please Write Something</b></span>
      </div>
           
          </div>
           
        
      </div>  
   
    
      </div>
      <?php
    }
    

?></div>
<form action="cart3.php?action=add&name=<?php echo $row["name"]; ?>&seller_name=<?php echo $row["seller_name"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "add":
    if(!empty($_POST["quantity"])) {
      $food_name=$_GET["food_name"];
      $query2="SELECT * FROM `food_items` WHERE food_name='$food_name'";
      $result=mysqli_query($db,$query2);
            while($productByCode=mysqli_fetch_array($result)){
      $itemArray = array($productByCode["food_name"]=>array('food_name'=>$productByCode["food_name"],'quantity'=>$_POST["quantity"], 'seller_name'=>$productByCode["seller_name"],'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
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

 
}
}
?>
</form>

  

</div>

<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
    </div>
    <div class="timer">
    <b> <p id="demo"></p></b>
    </div> 
 </div>



<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>


<script type="text/javascript">
  $(function() {
     $( "#search" ).autocomplete({
       source: 'ajax_db_search.php',
     });
  });
</script>

</body>
</html>