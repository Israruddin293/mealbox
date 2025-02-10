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
 }

</style>    
</head>
<body>
  <div class="header">
    <div class="name">
    <h1><i><?php echo $_SESSION['seller_name']; ?></i></h1>
    </div>
    <div class="logo">
      <img src="./images/logo.PNG" alt="Picture" width="210px" height="150px">
    </div>
  </div>
  <div class="navbar">
    <a class="tab" href="seller_logged-in.php"><i class="fa fa-fw fa-home"></i><b> Home</b></a>
    <a class="tab" href="about.php"><i class="fa fa-fw fa-address-book"></i><b> About</b></a>
    <a class="tab" href="contact.php"><i class="fa fa-fw fa-envelope"></i><b> Contact</b></a>
    <a class="tab" href="seller_users.php"><i class="fa fa-fw fa-user"></i><b> Live Chat</b></a>
    <a class="active"><i class="fa fa-fw fa-cutlery"></i><b> Food Items</b></a>
    <div class="drop">
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-fw fa-cutlery"></i><b>Category</b></button>
      <div class="dropdown-content3">
        <a href="seller_appetizer.php"><b>Appetizer</b></a>
        <a href="seller_main_course.php"><b>Main Course</b></a>
        <a href="seller_snacks.php"><b>Snacks</b></a>
        <a href="seller_dessert.php"><b>Dessert</b></a>      
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-fw fa-user-circle"></i><b><?php echo $_SESSION['username']; ?></b></button>
      <div class="dropdown-content4">
        <a href="seller_profile.php"><b>Profile</b></a>
        <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout"><b>Log Out</b></a>  
      </div>
    </div>
    </div>  
</div>
<div class="section2">
  <h2><i>Food Items</i></h2>
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
     
          $product= mysqli_query($db,"SELECT * FROM food_items WHERE seller_name = '".$seller_name."'");       
          if (!empty($product)) { 
              while ($row2=mysqli_fetch_array($product)) {
        ?> 

    <div class="upper">
      <div class="card"> 
                    
        <div class="product">
        <a href="/f4/food_list_edit.php?id=<?php echo $row2["id"];?>&food_name=<?php echo $row2["food_name"];?>&category_id=<?php echo $row2["category_id"];?>"><img src="<?php echo $row2["image"]; ?>" alt="<?php echo $row2["food_name"]?>" height="180px" ></a>
          <h3><?php echo $row2["food_name"]; ?></h3>

        </div>
        <a href="seller_comment.php?food_name=<?php echo $row2["food_name"]; ?>&food_id=<?php echo $row2["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
        <b> <p class="price"><?php echo "PKR. ".$row2["price"]; ?></p></b>
      </div>  
   </div>
    
  
        <?php
    }
  }  
  ?>
</div>
  
    
    

<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
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