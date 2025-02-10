<?php include('server2.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link rel="stylesheet" href="./css/index2.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
.navbar {
  overflow: hidden;
  height: 130px;
  background-color: #808000;
  font-family: Arial;
  text-align: left;
  
}

 .search_icon{
float:left;
margin-top:55px;
margin-right:50px;
margin-bottom: 20px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 800px;
font-size: 16px;
margin-right: 6px;
margin-left: 250px;
border-color: #DC7633;
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

.section{
  background-color: #DAF7A6;
background-color: #C9EE82;
margin-top: 0;
 } 
.ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}
.socialmedia{
  text-align: center;
 padding-top: 30px; 
 
}
.footer2{
  height: 100px;
  width: 100%;
  background-color: #808000;
  margin-bottom: 0;
}
.social_icons{ 
  margin-right: 15px;
  font-size: 24px;
  color: black;
}

.timer{
  text-align: center;
  margin-right: 50px;
}  

p{
  margin-bottom: 0;
}  

.section2{
  background-color: #DAF7A6;
  /* background-repeat: no-repeat;
  background-size: 150%;
  background-position: center; */
  height: 100%;
  width: 100%;
}

.column1 {
  float: left;
  margin-right: 50px;
  margin-left: 70px;
}

h3{
  color: forestgreen;
  text-align: center;
  margin-right: 20px;
  margin-left: 20px;
}
.buyer_icon:after {
  content: "";
  display: table;
  clear: both;
}


.section3{
  padding-top: 40px;
  padding-bottom: 40px;
} 

.get_started{
 margin-top: 30px;
margin-bottom: 30px;

margin-left: 1200px;
}

button[type="submit"]{
   background-color: forestgreen;
padding:8px;
width:110px;
height: 40px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
cursor: pointer;
margin-left: 30px;
}

.logo2{
  padding-top: 20px;
  
  text-align: center;
  
}
.avatar{
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

.intro{
  margin-top: 60px;
  margin-right: 50px;
  margin-left: 50px;
}
.mealbox{
  font-family: "Archivo Black", sans-serif;
  display: flex;
  flex-direction: column;
  
  justify-content: center;
  align-items: center;
}
/* .words {
  color: forestgreen;
  font-size: 0;
  line-height: 1.5;
} */
.words {
  color: forestgreen;
  font-size: 5.5rem; /* Set font size to a default size */
  line-height: 1.5;

}

/* .words span {
  font-size: 4rem;
  display: inline-block;
  animation: move 3s ease-in-out infinite;
}

@keyframes move {
  0% {
    transform: translate(-30%, 0);
  }
  50% {
    text-shadow: 0 25px 50px rgba(0, 0, 0, 0.75);
  }
  100% {
    transform: translate(30%, 0);
  }
}


.words span:nth-child(2) {
  animation-delay: 0.5s;
}

.words span:nth-child(3) {
  animation-delay: 1s;
}

.words span:nth-child(4) {
  animation-delay: 1.5s;
}

.words span:nth-child(5) {
  animation-delay: 2s;
}

.words span:nth-child(6) {
  animation-delay: 2.5s;
}

.words span:nth-child(7) {
  animation-delay: 3s;
} */

</style>   
</head>
<body>
  
  
  
<div class="section2">
  <div class="logo2">
      <a href="index.php"><img src="./images/mealbox.png" alt="Picture" width="330px" height="300px"></a>
    </div>
  <div class="section3">
    <div class="buyer_icon">
      <div class="column1"><div class="avatar"> </div>
        <h3>Admin</h3>
        <button type="submit" onclick="loginseller()">Log In</button>
        </div>
        <div class="column1">
        <div class="mealbox">
        <div class="words word-1">
  WELCOME
</div>

<div class="words word-2">
  TO
</div>

<div class="words word-3">
  MEAL MASTER
</div></div></div>
        <div class="column1"><div class="avatar"> </div>
        <h3>Customer</h3>
        <button type="submit" onclick="signupbuyer()">Sign Up</button>
        <button type="submit" onclick="loginbuyer()">Log In</button>
      </div>
    </div>
  </div>
</div> 

<script>
  function signupbuyer(){
    window.location.href = "buyersignup.php";
  }
  function loginbuyer(){
    window.location.href = "buyerlogin.php";
  }
  function signupseller(){
    window.location.href = "sellersignup.php";
  }
  function loginseller(){
    window.location.href = "sellerlogin.php";
  }
</script>
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

</body>
</html>