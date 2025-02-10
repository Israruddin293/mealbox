<?php 
	include "server2.php";
?>




<?php
$food_id="";
$food_name="";
$username=$_SESSION['username'];  
$food_id = $_GET['food_id'];
$food_name=$_GET['food_name'];
    // Select 1 from table_name will return false if the table does not exist.

/*$val = mysqli_query($db, "select 1 from `chatappetizer{$food_id}` LIMIT 1");
    if($val !== FALSE) {
         //DO SOMETHING! IT EXISTS!
  $sql="SELECT * FROM `chatappetizer{$food_id}`";
    $query = mysqli_query($db,$sql);
    }

else {
        //I can't find it...
        // sql to create table
$sql5 = "CREATE TABLE `chatappetizer$food_id` (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL,
message TEXT NOT NULL,
created_on TIMESTAMP NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1";

if(mysqli_query($db, $sql5)){
    $sql6="SELECT * FROM `chatappetizer{$food_id}`";
    $query = mysqli_query($db,$sql6);
} else{
    echo "ERROR: Could not able to execute $sql5. " . mysqli_error($db);
}

}*/

  
  



    
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
body{
  background: linear-gradient(-45deg, #ee7752, mistyrose, lightpink, tomato);
  background-size: 400% 400%;
  animation: gradient 5s ease infinite;
  padding: 0 10px;
}
@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
  h1{
color:#800000;
margin-bottom: 0;
  }
  label{
color:#800000;
font-size: 16px;
  }
  span{
	  color:black;
	  font-weight:bold;
  }
  p{
  	text-align: left;
  	margin-left: 5px;
    font-size: 16px;
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
    background-color: salmon;
    margin-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 5px;
    padding-top: 5px;
    font-size: 16px;
	}
	.display-chat{
		height:300px;
		background-color:mistyrose;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}

	.form-control{
	background-color: floralwhite;
  width: 100%;
	}

	.message{
		background-color: salmon;
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
  
  

<div class="container">
  <form class="form-horizontal" method="post" action="seller_logged-in.php?">
           
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Back</button>
      </div>

   
  </form>
  
  <center><h1>Reviews</h1>
	
  </center></br>
  <div class="display-chat">
<?php

$sql="SELECT * FROM `comments` WHERE `food_id`='$food_id'";
    $query = mysqli_query($db,$sql);
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_array($query))	
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
				No previous comments available.
			</p>
</div>
<?php
	} 
?>



  </div>
</div>

</body>
</html>


