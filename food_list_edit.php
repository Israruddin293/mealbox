<?php include('server2.php')?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  } 
  
  
  if (isset($_GET['id'])){
      $id=$_GET['id'];
      $food_name=$_GET['food_name'];
      $category_id=$_GET['category_id'];
      $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `id`='$id' ");
      $row = mysqli_fetch_array($product);
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
    <link href="./css/s.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
.navbar {
  overflow: hidden;
  background-color:  #808000;
  font-family: Arial;
  
}
.name{
  float: right;
  margin-top: 20px;
  padding-top: 15px;
  color: black;
  padding-bottom: 20px;
  background-image: url("./images/001.png");
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

/* Style inputs, select elements and textareas */
select, textarea{
  width: 10%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 16px;
}





/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 40%;
  padding-left: 20px;
  margin-top: 6px;
  text-align: right;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 60%;
  margin-top: 15px;

}
#food{
  background-color: white;
  width: 350px;
  font-size: 14px;
  border: 1px solid grey;
  box-shadow: 2px 2px 2px 2px black;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

* {box-sizing: border-box;}

h4{
  text-align: center;
 /* text-shadow: 0px 10px 10px rgba(0, 0, 0, .8); */
  font-family: "Great Vibes", cursive;
  font-size: 35px;
  color: white;
  background-color: #808000;
  margin-left: 220px;
  margin-right: 220px;
  padding-top: 10px;
  padding-bottom: 10px;

}
input[type=text], select, textarea, input[type=email], input[type=file] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: #FFD0C4;
  font-size: 16px;
}

input[type=file] {
  width: 85%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: #FFD0C4;
}
button[type=submit] {
  background-color: #04AA6D;
  color: white;
  font-size: 14px;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  font-size: 18px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
/*background-color: #f2f2f2;  */
  padding: 20px;
  margin: 8px;
}

.box{
  border: 1px solid;
  border-radius: 5px;
  margin-left: 300px;
  margin-right: 300px;
  margin-top: 50px;
  margin-bottom: 30px;
}

.form-popup{
  display: none;
}

.name{
  float: right;
  margin-top: 30px;
  margin-right: 30px;
  color: maroon;
  font-size: 18px;
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
.footer{
  margin-top: 10px;
  height: 100px;
  width: 100%;
  background-color: #808000;
}
p{
  margin-bottom: 0;
  font-size: 16px;
} 
.none{
  height: 500px;
}
.footer2{
  height: 100px;
  width: 100%;
  background-color: #808000;
}
h2{
  text-align: center;
  text-shadow: 2px 2px 5px #808000;
  font-size: 30px;
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
  text-align: center;
  text-shadow: 2px 2px 5px  #808000;
  
 }
 a{
  color: tomato;
 }
 .section2{
  background-color: mistyrose;
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
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}

.dropdown-content a {
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  display: block;

  font-size: 16px;
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
  margin-right: 330px;
}
.home{
  margin-left: 30px;
}
</style>
 <script> 


function saladForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("saladForm").style.display = "block";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
}

</script>
</head>
<body onload="saladForm()">
  
  <div class="header">
    <div class="logo">
      <img src="./images/mealbox.png" alt="Picture" width="210px" height="150px">
    </div>
  </div>
  <ul class="breadcrumb">
  <li><a class="home" href="seller_logged-in.php"><b> Home</b></a></li>
  <li><b> Add Item</b></li>
  <li><a href="my-food-recipe"><b> Add Recipe</b></a></li> 
  <li><a href="seller_users.php"><b> Live Chat</b></a></li>
  <li><a href="seller_order_track.php"><b> Order</b></a></li> 
  <li><a class="notify" href="seller_order_track2.php"><b> Order Track</b></a></li>
  
    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

 <div class="section2">
  <div class="row">
        <h2>Update Food Item</h2>
       <form action="" method="POST" enctype="multipart/form-data">
       <form action="upload_food_info.php?category_name= category_name" method="POST" enctype="multipart/form-data"> 
      
    </div>
  

<div class="none" id="none">
</div>
<div class="form-popup" id="saladForm">
   <div class="box">
<h4><b>Edit Food Info</b></h4>

<div class="container">

    <label for="salad_name"><b>Ingredients</b></label>
    <input type="text" id="salad_name" name="salad_name" placeholder="Food item name.." value=<?php echo $row['food_name'];?> required>

    <label for="salad_Ingridients"><b>Ingredients</b></label>
    <input type="text" id="salad_Ingridients" name="salad_Ingridients" placeholder="Food Ingridients.." value=<?php echo $row['category_name'];?> required>

    <label for="salad_price"><b>Price</b></label>
    <input type="text" id="salad_price"  name="salad_price" placeholder="Price.."value=<?php echo $row['price'];?> required>


    <input type="file" name="uploadfile" value="" />   
    <input type="submit" value="Update" name="submit" value="Upload">
     <input type="submit" value="Delete" name="submit2" value="Upload">
    
  </form>

</div>
</div>
</div>        
</div>

 
<div class="footer2">
    <div class="socialmedia">  
      <a class="social_icons" href="#"><i class="fa fa-facebook-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-twitter-square"></i></a>
      <a class="social_icons" href="#"><i class="fa fa-linkedin-square"></i></a>
    </div>
    <div class="timer">
     <b><p id="demo"></p></b>
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
error_reporting(0);
?>

<?php
if (isset($_POST['submit2'])){
    $db = mysqli_connect("localhost", "root", "password", "mealbox3");
    $query5 = "DELETE FROM `seller_data` WHERE `food_name`='$food_name'";
    $query = "DELETE FROM `food_items` WHERE `id`='$id'";
    
    echo "<script type='text/javascript'>alert('Deleted Successfully');</script>";
  
        mysqli_query($db, $query5);
        mysqli_query($db, $query);
        
        $url="/f4/seller_logged-in.php";
    echo "<script type='text/javascript'>window.location.href = '$url';</script>";
}
if (isset($_POST['submit'])){
$msg = "";

$salad_name = mysqli_real_escape_string($db, $_POST['salad_name']);
$salad_Ingridients = mysqli_real_escape_string($db, $_POST['salad_Ingridients']);
$cat = mysqli_real_escape_string($db, $_POST['food']);
$salad_price = mysqli_real_escape_string($db, $_POST['salad_price']);
$salad_seller_name= mysqli_real_escape_string($db, $_POST['salad_seller']);

  // If upload button is clicked ...
$username = $_SESSION['username'];   
$sellerid= $_SESSION['unique_id'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "mealbox3");
if(empty($filename)){
            $query2 = "SELECT * FROM seller WHERE username='$username'";
           $result2=$db->query($query2);
          if($result2->num_rows>0){
          
          while($row=$result2->fetch_assoc())
          {  
             $unique_id=$row['unique_id'];
             $seller_name=$row['seller_name'];
             
          }
       }
        $query = "UPDATE `seller_data` SET `unique_id`='$unique_id', `username`='$username', `seller_name`='$seller_name', `food_name`='$salad_name',`category_name`='$salad_Ingridients',`price`='$salad_price' WHERE `food_name`='$food_name'";

              
              mysqli_query($db, $query);
              // Get all the submitted data from the form
              $query3 = "SELECT * FROM category WHERE category_id='$category_id'";
           $result3=$db->query($query3);
          if($result3->num_rows>0){
          
          while($row2=$result3->fetch_assoc())
          {  
             $category_id=$row2['category_id'];
             $category_name=$row2['category_name'];
             
          }
       }
              $sql2 = "UPDATE `food_items` SET  `food_name`='$salad_name',`category_name`='$salad_Ingridients', `price`='$salad_price', `seller_name`='$seller_name' WHERE `id`='$id'";
              
              // Execute query
              mysqli_query($db, $sql2);

          }
    else{
  
    $query2 = "SELECT * FROM seller WHERE username='$username'";
         $result2=$db->query($query2);
        if($result2->num_rows>0){
        
        while($row=$result2->fetch_assoc())
        {  
           $unique_id=$row['unique_id'];
           $seller_name=$row['seller_name'];
        }
     }
      $query = "UPDATE `seller_data` SET `unique_id`='$unique_id', `username`='$username', `seller_name`='$seller_name',`category_name`='$salad_Ingridients', `food_name`='$salad_name', `price`='$salad_price', `image`='./images/$filename' WHERE `food_name`='$food_name'";

            
            mysqli_query($db, $query);
            // Get all the submitted data from the form
            
            $sql2 = "UPDATE `food_items` SET  `food_name`='$salad_name', `price`='$salad_price', `seller_name`='$seller_name',`category_name`='$salad_Ingridients', `image`='./images/$filename' WHERE `id`='$id'";
            
            // Execute query
            mysqli_query($db, $sql2);
      
        }
        
        
echo "<script type='text/javascript'>alert('Successfully updated');</script>";
    $url="/f4/seller_logged-in.php";
    echo "<script type='text/javascript'>window.location.href = '$url';</script>";
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  
       $db->close();
}
?>   





