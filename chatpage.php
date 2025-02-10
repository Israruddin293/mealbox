<?php 
	include "server2.php";
	
	
		 
		 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link href="./css/s.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  h1{
color:#800000;
margin-bottom: 0;
  }
  label{
color:#800000;
font-size: 16px;
  }
  span{
	  color:#673ab7;
	  font-weight:bold;
  }
  p{
  	text-align: left;
  	margin-left: 5px;
  }
  body{
  	background-image: url('./images/1.jpg');
  	background-size: cover;
  }
  .container {
    margin-top: 3%;
    width: 70%;
    padding-right:10%;
    margin-left: 180px;
    padding-top: 20px;
    padding-left:10%;
  }
  .btn-primary {
    background-color: #04AA6D;
    margin-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 5px;
    padding-top: 5px;
    font-size: 16px;
	}
	.display-chat{
		height:300px;
		background-color:lightgreen;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}

	.form-control{
		
  width: 100%;
	}

	.message{
		background-color: #04AA6D;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
	.search_icon{
float:right;
margin-top:55px;
margin-right:50px;
}
.search_box{
border: 0px;
padding: 8px;
width: 300px;
font-size: 16px;
margin-right: 6px;
margin-left: 15px;
}
.search{
background-color:#04AA6D;
padding:8px;
width:80px;
border:none;
border-radius: 10px;
font-size:16px;
color:white;
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
  background-color: #DC7633;
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
  background-color: #DC7633;
  color: black;
}

.dropdown:hover .dropdown-content4 {
  display: block;
}
  </style>
</head>
<body>
  
  <div class="header">
    <div class="search_icon" >    
    <form method="post" action="search(2).php"> 
      
      <input type="text" name="search" class="search_box" placeholder="Search..">
      <input type="submit" name="submit" class="search" value="Search">
    </form>
  </div>
    <div class="logo">
      <img src="./images/logo.PNG" alt="Picture" width="150px" height="150px">
    </div>
  </div>
  <div class="navbar">
    <a class="active" href="buyer_logged-in.php"><i class="fa fa-fw fa-home"></i><b>Home</b></a>
    <a class="tab" href="about.php"><i class="fa fa-fw fa-address-book"></i><b>About</b></a>
    <a class="tab" href="contact.php"><i class="fa fa-fw fa-envelope"></i><b>Contact</b></a>
    <a class="tab" href="cart.php"><i class="fa fa-fw fa-envelope"></i><b>Cart</b></a>
    <a class="active"><i class="fa fa-fw fa-user"></i><b>Live Chat</b></a>
    <div class="drop">
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-fw fa-user-circle"></i><b>Category</b></button>
      <div class="dropdown-content3">
        <a href="buyer_appetizer.php"><b>Apppetizer</b></a> 
        <a href="buyer_snacks.php"><b>Snacks</b></a>
        <a href="buyer_main_course.php"><b>Main Course</b></a>            
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-fw fa-user-circle"></i><b><?php echo $_SESSION['username']; ?></b></button>
      <div class="dropdown-content4">
        <a href="profile.php"><b>Profile</b></a>
        <a href="index.php"><b>Log Out</b></a>  
      </div>
    </div>
    </div>
  </div>

<div class="container">
  <center><h1>Welcome <span style="color:#800000;"><?php echo $_SESSION['username']; ?> !</span></h1>
	<label>Join the chat</label>
  </center></br>
  <div class="display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['username']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>

</body>
</html>
<?php
	
?>