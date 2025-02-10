<?php include('server2.php') ?>
<?php  

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }   
?>
<?php

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appetizer Category</title>
    <link rel="stylesheet" href="./css/index3.css"/>
    <link href="./css/s.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
.navbar {
  overflow: hidden;
  background-color: tomato;
  font-family: Arial;
}

 .dropdown-content8 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 70px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content8  a{
  float: none;
  color: black;
  padding: 12px 18px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.dropdown-content8 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown2:hover .dropdown-content8 {
  display: block;
}
 .dropdown-content7 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 55px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content7  a{
  float: none;
  color: black;
  padding: 12px 8px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content7 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown2:hover .dropdown-content7 {
  display: block;
}
 .dropdown-content6 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 70px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content6  a{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content6 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown2:hover .dropdown-content6 {
  display: block;
}
  .dropdown-content5 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown-content5  a{
  float: none;
  color: black;
  padding: 12px 40px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content5 a:hover {
  background-color: tomato;
  color: black;
}

.dropdown2:hover .dropdown-content5 {
  display: block;
}
.dropdown2 {
  float: left;
  overflow: hidden;
  margin-right: 20px;
  margin-left: 100px;
}

.dropdown2 .dropbtn2 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: tomato;
  font-family: inherit;
  margin: 0;
}

.dropdown2:hover .dropbtn2 {
  background-color: salmon;
  color: black;
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
  padding: 12px 17px;
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
  width: 150px;
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
}

/* Style the submit button */


/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.column{
  float: left;
  width: 25%;
  margin-top: 50px;

  }

  .row{
    margin-left: 50px;
  }
/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 50%;
  padding-left: 20px;
  margin-top: 6px;
  text-align: right;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 20%;
  margin-top: 30px;

}
#food{
  background-color: white;
  width: 100px;
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

.form-popup{
  display: none;
  padding-bottom: 100px;
}



.name{
  float: right;
  margin-top: 40px;
  margin-right: 30px;
  color: maroon;
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
cursor: pointer;
}

.fa-comments{
  margin-right: 25px;
}

.footer{
  margin-top: 10px;
  height: 100px;
  width: 100%;
  background-color: #DC7633;
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
.none{
  height: 500px;
}
.footer2{
  height: 100px;
  width: 100%;
  background-color: tomato;
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
  background-color: mistyrose;
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
  background-color: mistyrose;
  border: 0;
}
.card .kitchen{
  color: black;
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
  margin-right: 250px;
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
      <img src="./images/mealbox_logo.png" alt="Picture" width="210px" height="150px">
    </div>
  </div>
  <ul class="breadcrumb">
  <li><a class="home" href="buyer_logged-in.php"><b> Home</b></a></li>  
  <li><a href="seller_kitchen_list.php"><b> Kitchen</b></a></li>
  <li><b> Category</b></li>
  <li><a href="users.php"><b> Live Chat</b></a></li> 
  <li><a href="cart3.php"><b> Cart</b></a></li>
  <li><a href="buyer_order_track.php"><b> Order Track</b></a></li> 
  <li><a class="notify" href="my-food-recipe/indexx.php"><b>Recipies Detail</b></a></li>

  
    <div class="dropdown">
  <a  class="username" href="#"><b><?php echo $_SESSION['username']; ?></b></a>
  <div class="dropdown-content">
    <a  href="buyer_profile.php">Profile</a>
    <a href="seller_logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Log Out</a>  
      </div>
    </div>
</ul>

 <div class="section2">
  <h1>Category</h1>
  <div class="row" >
    <div class="column">
     
     <div class="drop">
    <div class="dropdown2">
      <button class="dropbtn2"><i class="fa fa-fw fa-cutlery"></i><b>Appetizer</b></button>
      <div class="dropdown-content5">
        <a href="#" onclick="soupForm()">Soup</a>
        <a href="#" onclick="saladForm()">Salad</a>
        <a href="#" onclick="starterForm()">Starter</a> 
      </div>
    </div>
    </div>
 </div>  
 <div class="column">
     <div class="drop">
    <div class="dropdown2">
      <button class="dropbtn2"><i class="fa fa-fw fa-cutlery"></i><b>Main Course</b></button>
      <div class="dropdown-content6">
        <a href="#" onclick="indianForm()">Indian Cuisine</a>
        <a href="#" onclick="banglaForm()">Bangla Cuisine</a>
        <a href="#" onclick="chineseForm()">Chinese Cuisine</a>
        <a href="#" onclick="mughlaiForm()">Mughlai Cuisine</a> 
      </div>
    </div>
    </div>   
 </div>  
 <div class="column">
  <div class="drop">
    <div class="dropdown2">
      <button class="dropbtn2"><i class="fa fa-fw fa-cutlery"></i><b>Snacks</b></button>
      <div class="dropdown-content7">
        <a href="#" onclick="FastfoodForm()">Fastfood</a>
        <a href="#" onclick="NoodlesForm()">Noodles</a>
        <a href="#" onclick="LightsnacksForm()">Light Snacks</a> 
      </div>
    </div>
   </div>               
 </div>  
 <div class="column">
  <div class="drop">
    <div class="dropdown2">
      <button class="dropbtn2"><i class="fa fa-fw fa-cutlery"></i><b>Dessert</b></button>
      <div class="dropdown-content8">
        <a href="#" onclick="bakeryForm()">Bakery</a>
        <a href="#" onclick="sweetdishForm()">Sweetdish</a>
      </div>
    </div>
    </div>
</div>
</div>    



<script type="text/javascript"> 
  function changeFunc() {
    var selectBox = document.getElementById("column2");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if(selectedValue==1){
        soupForm();
    }
    if(selectedValue==2){
       saladForm();
    }
    if(selectedValue==3){
        starterForm();
    }
    if(selectedValue==4){
        indianForm();
    }
     if(selectedValue==5){
        banglaForm();
    }
    if(selectedValue==6){
       chineseForm();
    }
    if(selectedValue==7){
        mughlaiForm();
    }
    if(selectedValue==8){
        FastfoodForm();
    }
    if(selectedValue==9){
       NoodlesForm();
    }
    if(selectedValue==10){
        LightsnacksForm();
    }
    if(selectedValue==11){
        bakeryForm();
    }
    if(selectedValue==12){
       sweetdishForm();
    }
    
   }

   function noneForm() {

  document.getElementById("none").style.display = "block";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function soupForm() {

  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "block";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}

function saladForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "block";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}

function starterForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "block";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function indianForm() {
 document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "block";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function banglaForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "block";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function chineseForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "block";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function mughlaiForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "block";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function FastfoodForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "block";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function NoodlesForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "block";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function LightsnacksForm() {
 document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "block";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
}
function bakeryForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "block";
}
function sweetdishForm() {
  document.getElementById("none").style.display = "none";
  document.getElementById("soupForm").style.display = "none";
  document.getElementById("saladForm").style.display = "none";
  document.getElementById("starterForm").style.display = "none";
  document.getElementById("indianForm").style.display = "none";
  document.getElementById("banglaForm").style.display = "none";
  document.getElementById("chineseForm").style.display = "none";
  document.getElementById("mughlaiForm").style.display = "none";  
  document.getElementById("fastfoodForm").style.display = "none";
  document.getElementById("noodlesForm").style.display = "none";
  document.getElementById("lightsnacksForm").style.display = "none";
  document.getElementById("bakeryForm").style.display = "none";
  document.getElementById("sweetdishForm").style.display = "block";
}

</script>
<div class="none" id="none">
</div>

<div class="form-popup" id="bakeryForm">
   <div class="section">
    <?php
          $food_id3="";
         $food_id3=0;
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=1");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id3++; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=bakeryadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="120px" >
        <h3><?php echo $row["food_name"]; ?></h3>
          <h6><?php echo $row["category_name"]; ?></h6>
          <b><p class="price"><?php echo "PKR. ".$row["price"]; ?></p></b>       
        </div>    <br>  <br>   <br> 
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>         
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart3.php?action=bakeryadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "bakeryadd":
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
</div>    


<div class="form-popup" id="sweetdishForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=12");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id3++; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=sweetdishadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PKR. ".$row["price"]." Per KG"; ?></p></b>  
                
        </div>        
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a> 
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=sweetdishadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "sweetdishadd":
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
    </div>


 <div class="form-popup" id="soupForm">
   <div class="section">
    <?php
           $food_id="";
           $food_id=0;

          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=10");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {
              $food_id++;
               $sum=""; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=soupadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b> <p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>  
                
        </div>
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=soupadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "soupadd":
    if(!empty($_POST["quantity"])) {
      $pid=$_GET["pid"];
      $result=mysqli_query($db,"SELECT * FROM `food_items` WHERE id='$pid'");
            while($productByCode=mysqli_fetch_array($result)){
      $itemArray = array($productByCode["food_name"]=>array('food_name'=>$productByCode["food_name"], 'quantity'=>$_POST["quantity"], 'seller_name'=>$productByCode["seller_name"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode["food_name"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($sum == $k) {
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
    </div>        

  <div class="form-popup" id="saladForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=9");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id++;
               
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=saladadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b> <p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>
                
        </div>      
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>   
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=saladadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "saladadd":
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
    </div>


<div class="form-popup" id="starterForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=11");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {  
                $food_id++;

        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=starteradd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b> <p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>  
             
        </div> 
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php2?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=starteradd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

$sum="";
$i=1;
$sum=$i++;
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "starteradd":
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
    </div>


<div class="form-popup" id="indianForm">
   <div class="section">
    <?php
          $food_id4="";
         $food_id4=0;
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=5");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id4++; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=indianadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Plate"; ?></p></b>  
                
        </div>   
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>      
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=indianadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "indianadd":
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
    </div>        

  <div class="form-popup" id="banglaForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=2");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id4++; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=banglaadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Plate"; ?></p></b>  
                
        </div> 
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=banglaadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "banglaadd":
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
    </div>


<div class="form-popup" id="chineseForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=3");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) { 
              $food_id4++; 
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=chineseadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Plate"; ?></p></b> 
                
        </div>  
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>       
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=chineseadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "chineseadd":
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
    </div>   


<div class="form-popup" id="mughlaiForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=7");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {
              $food_id4++;  
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=mughlaiadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Plate"; ?></p></b>  
                
        </div>  
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>       
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=mughlaiadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "mughlaiadd":
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
    </div>


 <div class="form-popup" id="fastfoodForm">
   <div class="section">
    <?php
           
         $food_id2="";
         $food_id2=0;
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=4");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {
              $food_id2++;  
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=fastfoodadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>
                
        </div>   
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>      
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=fastfoodadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "fastfoodadd":
    if(!empty($_POST["quantity"])) {
      $pid=$_GET["pid"];
      $result=mysqli_query($db,"SELECT * FROM `food_items` WHERE id='$pid'");
            while($productByCode=mysqli_fetch_array($result)){
      $itemArray = array($productByCode["food_name"]=>array('food_name'=>$productByCode["food_name"],'quantity'=>$_POST["quantity"], 'seller_name'=>$productByCode["seller_name"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
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
    </div>        

  <div class="form-popup" id="noodlesForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=8");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {  
                $food_id2++;
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=noodlesadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>  
                
        </div> 
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>        
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=noodlesadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "noodlesadd":
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
    </div>


<div class="form-popup" id="lightsnacksForm">
   <div class="section">
    <?php
          $product= mysqli_query($db,"SELECT * FROM `food_items` WHERE `category_id`=6");
             
          if (!empty($product)) { 
              while ($row=mysqli_fetch_array($product)) {  
                $food_id2++;
        ?>       
    <div class="upper">
         
      <div class="card">   
         <form method="post" action="order_food2.php?action=lightsnacksadd&pid=<?php echo $row["id"]; ?>">          
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
         <b> <p class="price"><?php echo "PKR. ".$row["price"]." Per Person"; ?></p></b>
                
        </div>
        <a class="kitchen" href="seller_kitchen.php?seller_name=<?php echo $row['seller_name']; ?>"><i><h2><?php echo $row["seller_name"]; ?></h2></i></a>
        <a href="buyer_personal_chat.php?seller_name=<?php echo $row['seller_name']; ?>"><i class="fa fa-comments" style="font-size:28px"></i></a> 
        <a href="comment.php?food_name=<?php echo $row["food_name"]; ?>&food_id=<?php echo $row["id"]; ?>"><i class="fa fa-comment-o" style="font-size:24px"></i></a>         
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" class="btnAddAction">Order</button>
         </form>
      </div>  
   
    </div>
  
        <?php
    }
  }  
  ?>

<form action="cart2.php?action=lightsnacksadd&pid=<?php echo $row["id"]; ?>">
    <?php
//For electronics
//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  //code for adding product in cart
  case "lightsnacksadd":
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
    </div>       

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

