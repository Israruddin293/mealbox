<?php include('server2.php') ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  <!--  <link rel="icon" type="image/x-icon" href="/mealbox_logo.png">   -->
    <link rel="stylesheet" href="./css/index3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
 <style>
.search_icon{
float:left;
margin-top:55px;
margin-right:50px;
margin-bottom: 10px;
}
.search_box{
border: 1px solid;
padding: 8px;
width: 800px;
font-size: 16px;
margin-right: 6px;
margin-left: 250px;
border-color: forestgreen;
border-radius: 10px;
height: 45px;
}
.search{
  background-color:forestgreen;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
height: 45px;
font-size:17px;
color:white;

}

.section{
  

margin-top: 140px;
 } 

.socialmedia{
 text-align: center;
 padding-top: 30px; 
 
}

.social_icons{ 
  margin-right: 15px;
  font-size: 24px;
  color: black;
}

.timer p{
  font-size: 18px;
  text-align: center;
  color: black;
}  

p{
  margin-bottom: 0;
  
}  

.section3{
  height: 400px;
  width: 100%;

}
.section4:after{
  background-color: #DAF7A6 ;
  content: "";
  display: table;
  clear: both; 
  
} 
.section2{ 
  background-color: #DAF7A6 ;
 height: 100%;
 width: 100%;
}
.ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}

button[type="submit"]{
   background-color:#808000;
padding:8px;
width:190px;
height: 40px;
border:none;
border-radius: 10px;
font-size:17px;
color:white;
cursor: pointer;

}
h3{
  color: black;
  margin-top: 10px;
  text-shadow: 2px 2px 5px #808000;
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
.result{
  margin-top: 300px;
 
 text-align: center;
 padding-bottom: 200px;
}

span{
  
  text-align: center;
  color: green;
  margin-left: 10px;
  font-size: 60px;
  
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
  background-color: #DAF7A6 ;
  border: 0;
}

.card img{
  border-radius: 30%;
  width:90%;
}


.product-quantity {
    padding: 5px 20px;
    border-radius: 3px;
    border: green 1px solid;
    background-color:#DAF7A6 ;
    width: 100%;
    text-align: center;
}

.price {
  color: black;
  font-size: 16px;
  margin-top: 5px;

}

.card .product{

  height: 290px;
}


.card .product:hover{
  transform: scale(1.1);
}

.card button:hover {
  opacity: 0.7;
}

.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 255, 0.3);

}

.section3{
  margin-top: 40px;
  padding-bottom: 40px;
} 
.navbar10 {
  overflow: hidden;
  background-color: #808000;
  font-family: Arial;
  
}
.footer2{
  height: 100px;
  width: 100%;
  background-color:#808000;
  margin-bottom: 0;
}
</style>   
</head>
<body>
  
  
  <div class="navbar10">
    <div class="note">
    <h3>Wanna eat homemade food? OR  Do you need a business account?</h3>
  </div>
</div>
<div class="section2">
  
<div class="tab2">

<div class="logo">
      <a href="index.php"><img src="./images/mealbox.PNG" alt="Picture" width="210px" height="150px"></a>
    </div>
  </div>

<div class="search_icon" >    
    <form method="post" action="search5.php"> 
      
      <input type="text" name="search" id="search" class="search_box" placeholder="Search Food Item..">
     <input type="submit" name="submit" class="search" value="Search">
    </form>
</div>







<div class="section4">

<?php
          if (isset($_POST["submit"])) {
            $str = $_POST["search"];
          if(!empty($str)){ 
      $query="SELECT * FROM food_items WHERE food_name LIKE '%$str%'";
   
     $sth = mysqli_query($db, $query);
    if (mysqli_num_rows($sth) > 0) { 
     while($row=mysqli_fetch_array($sth)){
             
  ?> 
        
  
  

    <div class="upper">
         
      <div class="card">   
                   
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="180px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <b><p class="price"><?php echo "PkR. ".$row["price"]; ?></p></b>                
        </div>        
        <h2><?php echo $row["seller_name"]; ?></h2> 
         <p><strong>Quantity</strong></p>
           <div class="cart-action">   
            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
          </div>
           <button type="submit" onclick="account()" class="btnAddAction">Order</button>
         
      </div>  
   
    </div>
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
 
      <?php
    }
   

?>


<script>
  function account(){
    window.location.href = "buyerlogin.php";
  }
</script>

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