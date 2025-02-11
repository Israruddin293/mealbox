<?php include('server2.php') ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  <!--  <link rel="icon" type="image/x-icon" href="/mealbox.png">   -->
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Css -->
 <style>
 .navbar {
  overflow: hidden;
  height: auto;
  padding: 15px;
  background-color: #808000;
  text-align: center;
}

.search_icon {
  display: flex;
  justify-content: center;
  margin: 20px auto;
  width: 90%;
  max-width: 80%;
}

.search_box {
  width: 100%;
  margin: 0;
  border: 1px solid #DC7633;
  padding: 12px;
  border-radius: 10px;
  font-size: 16px;
}

.search {
  background-color: forestgreen;
  padding: 12px 25px;
  border: none;
  border-radius: 10px;
  color: white;
  cursor: pointer;
  margin-left: 10px;
}

/* === فوڈ آئٹمز گرڈ === */
.section4 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  padding: 2rem;
}

.upper {
  width: 100%;
  margin: 0;
}

.card {
  width: 100%;
  margin: 1rem 0;
  padding: 15px;
  background-color: #DAF7A6;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.product img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 15px;
}

/* === بائیر/سیلر سیکشن === */
.buyer_icon, .seller_icon {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
  padding: 2rem;
}

.column1, .column2 {
  flex: 1;
  min-width: 300px;
  max-width: 500px;
  text-align: center;
}

.avatar img {
  width: 100%;
  max-width: 320px;
  height: auto;
}

/* === میڈیا کوئیریز === */
@media (max-width: 1200px) {
  .navbar h3 {
    font-size: 1.5rem;
    margin-left: 0;
  }

  .logo img {
    width: 180px;
  }
}

@media (max-width: 768px) {
  .mySlides img {
    height: 300px;
  }

  .search_icon {
    flex-direction: column;
  }

  .search {
    width: 100%;
    margin: 10px 0 0 0;
  }

  .intro {
    margin: 30px 15px;
  }
}

@media (max-width: 576px) {
  h1, h4 {
    font-size: 1.5rem;
    margin-left: 15px;
    text-align: center;
  }

  .product img {
    height: 150px;
  }

  .card {
    margin: 1rem 0;
  }

  .section4 {
    padding: 1rem;
    gap: 1rem;
  }
}

/* === سپیشل افیکٹس === */
.product-quantity {
  max-height: 150px;
  overflow-y: auto;
}

.product-quantity::-webkit-scrollbar {
  width: 5px;
}

.product-quantity::-webkit-scrollbar-thumb {
  background: #808000;
  border-radius: 5px;
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-15px); }
  100% { transform: translateY(0px); }
}
.section3 {
  padding: 2rem;
  margin-top: 2rem;
}

.buyer_icon, .seller_icon {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
}

.column1, .column2 {
  flex: 1;
  min-width: 300px;
  max-width: 500px;
  text-align: center;
}

.intro {
  margin: 2rem auto;
  padding: 0 1rem;
  max-width: 1200px;
}

/* Cards Grid System */
.section4 {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  padding: 2rem;
}

.upper {
  width: 100%;
  margin: 0;
}

.card {
  width: 100%;
  margin: 1rem 0;
  padding: 1rem;
}

.product img {
  max-width: 100%;
  height: 200px;
  object-fit: cover;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .card {
    margin: 1rem auto;
  }

  .column1, .column2 {
    flex: 100%;
    max-width: 100%;
  }

  .intro {
    margin: 1rem;
    padding: 0 0.5rem;
  }
}

@media (max-width: 576px) {
  .product img {
    height: 150px;
  }

  .section4 {
    padding: 1rem;
    gap: 1rem;
  }
.column1 a, .column2 a{
  text-decoration: none;
}
.navbar .note h3{
  margin-left: 290px;
  background-color:#808000;
}

.footer2{
  height: 100px;
  width: 100%;
  background-color: #808000;
  margin-bottom: 0;
}}

</style>   
</head>
<body>
  
  
  <div class="navbar">
    <div class="note">
 <h3>Wanna eat homemade food !</h3>
</div>
</div>
<div class="section2">
  
<div class="tab2">

<div class="logo">
      <img src="./images/mealbox.PNG" alt="Picture" width="210px" height="150px">
    </div>
  </div>

<div class="search_icon" >    
    <form method="post" action="search5.php"> 
      
      <input type="text" name="search" id="search" class="search_box" placeholder="Search Food Item..">
     <input type="submit" name="submit" class="search" value="Search">
    </form>
</div>



<div class="section">

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="./images/slideshow1.png" alt="Picture" width="100%" height="400px">
  
</div>

<div class="mySlides fade">
  
  <img src="./images/slideshow4.png" alt="Picture" width="100%" height="400px">
  
</div>

<div class="mySlides fade">
  
  <img src="./images/slidehow5.png" alt="Picture" width="100%" height="400px">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>
</div>




<div class="section4">
 <?php
      $query="SELECT * FROM food_items WHERE id IN(1,2,3,4,5,6,7,8,9,10);";
     
     $sth = mysqli_query($db, $query);
    if (mysqli_num_rows($sth) > 0) { 
     while($row=mysqli_fetch_array($sth)){
     
  ?> 
  <div class="upper">
         
      <div class="card">   
                   
        <div class="product">
        <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["food_name"]?>" height="120px" >
          <h3><?php echo $row["food_name"]; ?></h3>
          <h6><?php echo $row["category_name"]; ?></h6>
          <b><p class="price"><?php echo "PKR. ".$row["price"]; ?></p></b>       
        </div>    <br>  <br>   <br> <br> 
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
?>
</div>



<div class="section3">
<div class="buyer_icon">
<div class="column1"><div class="avatar"> <img src="./images/48.png" alt="Picture" width="320px" height="300px"></div></div>
 <div class="column1">
  <h3><b>Admin</b></h3>
  <b><p>Where are the cooks? Many of us can cook many type of local, foreign and regional food. Mealbox is trying to get people from all over the country to taste your hand-made food.This Mealbox can be another platform to start your own career.This is a platform that allows you to easily sell your best hand-made food. In this way, the buyers will be satisfied by eating your hand-made food and also can be a way for you to earn extra income.</p></b></div>
</div>
<div class="seller_icon">
  <div class="column2"><div class="avatar"><img src="./images/49.png" alt="Picture" width="320px" height="300px"></div></div>
<div class="column2">
<h3><b>Buyer</b></h3>
  <b><p>Where are the food-loving people? The Mealbox is searching for you.If you favor to get a handful of fresh local, foreign, regional meals in a time to calm your stomach, visit this mealbox.For those of us who are out of the house at work, we all miss our mother's hand-made food. You can relate to Mealbox to get back the taste of handmade food.
  </p></b></a></div>
</div>
<div class="intro">
<b><p>Are you hungry? Did you have a long and demanding day? Interested in getting a cheesy pizza delivered to your workplace or looking to avoid the weekly shop? Then "Mealbox" is the right destination for you! Mealbox affords you a long and targeted list of the fantastic eating places and shops and sparkling home made food near you to assist make your daily easier. Our on line food shipping provider has it all, whether  you want fresh home made fancy a juicy burger, sparkling sushi or peri peri poultry , Mealbox has over many cloud kitchen handy from Rawalpindi to Chittagong.</p>
<p>Are you struggling from unemployment problem? Do you want your handmade food to attain all parts of the country? Mealbox is opening you up to all these opportunities and possibilities. With our platform you can promote your handmade food by means of uploading picture from anywhere in the country.
Sit lower back and relax – let Mealbox take the pressure off your shoulders.
</p></b>
</div>
<div class="get_started">
  <button type="button" onclick="getstarted()">Get Started</button>
  </div>
</div>

<script>
  function getstarted(){
    window.location.href = "account.php";
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
// Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});
</script>

<script>
setInterval(myTimer, 1000);

function myTimer() {
  const d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>


<script>
  function account(){
    window.location.href = "buyerlogin.php";
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

