<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/about.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title>About</title>

 <style>
 .ball {
  position: fixed;
  border-radius: 100%;
  opacity: 0.7;

}
.logo1 img {
            width: 300px; /* Change this value to increase or decrease the logo size */
            height: auto; /* Maintains aspect ratio */
        }
body {
  font-family: Arial, Helvetica;
  margin: 0;
  background-color: #DAF7A6 ;
}

 </style> 
</head>
<body>

<div class="firstpart">
	<div class="words word-1">
        <span><b>M</b></span>
        <span><b>E</b></span>
        <span><b>A</b></span>
        <span><b>L</b></span>
        <span><b>M</b></span>
        <span><b>A</b></span>
        <span><b>S</b></span>
        <span><b>T</b></span>
        <span><b>E</b></span>
        <span><b>R</b></span>
   </div>
   <div class="logo1">
		<a href="index.php"><img src="Images\mealbox.png"></a>
	</div>
</div><br>
<div class="emoji">
	<div id="smile" class="fa"></div>
      <script>
      function smile() 
      {
        var a;
        a = document.getElementById("smile");
        a.innerHTML = "&#xf118;";
        setTimeout(function ()
        {
        a.innerHTML = "&#xf11a;";
        }, 500);
       
     }
        smile();
        setInterval(smile, 1000);
    </script>
   
</div>

<div class="box">
  <div class="inner-box">
    <h2>knowing about our <b style="font-family: 'Chewy'; ">Meal Master</b>
    </h2>
    <p><b style="font-size: 36px;
       background: linear-gradient(335deg, #fc00ff , #00dbde); 
       -webkit-background-clip: text; 
      -webkit-text-fill-color: transparent;">M</b>EAL MASTER is here to present user get an 
       easy access to food selling and buying. Whether people are just starting their restaurant career or 
       just want to sell food for business this is the right platform. Buyer and seller can communicate 
       with each other to talk about the exact preference of food. User can also get a preview of the food 
       being prepare and user will also be provided with photo of the food after it is prepared.</p>
    
  </div>
</div>

<hr class="bookends">
<!--mission+++++++++++++++++++++++++++++++++++++++++++++++++++++vission-->
<div class="missionvission">
	<div class="container1">
       <div class="card1">
           <div class="front">
           	<h1> Our Mission Statement</h1>
           </div>
           <div class="back">
           	<p>Our mission is to provide users a platform where they feel all the freedom and not to compete with others. They would rather compete with themselves. Also to provide convenience to user and to make sure the platform is efficient for all users. When it comes to reliability user can count on to MEAL MASTER</p>

           </div>
       </div>
    </div>

    <div id="body" class="grey lighten-2 valign-wrapper">
      <div id="opty_hands" class="valign">
       <div id="left-arm">
      <div class="left-hand"><span>...</span></div>
      <div class="left-shake"><span>_<br>_<br>_</span></div>
    </div>
    <div id="right-arm">
      <div class="right-hand"><span>...</span></div>
      <div class="right-shake"></div>
    </div>
  </div>
</div>

    <div class="container1">
       <div class="card1">
           <div class="front">
           	<h1> Our Vission Statement</h1>
           </div>
           <div class="back">
           	<p>Our vision is to give a reliable platform to all users, and so that they find this platform an efficient one. Furthermore we plan to add more features to our platform in the future so that there is no hassle or trouble when ordering or selling food.</p>
           </div>
       </div>
    </div>

</div>
</div><br><br><br><br><br><br>

</body>
</html>
