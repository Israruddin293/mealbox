<?php 
  include "server2.php";
?>
<?php

  $food_id="";
$username=$_SESSION['username'];  
$food_id = $_GET['food_id'];
$food_name=$_GET['food_name'];
    $msg=$_POST['msg'];

 $query2 = "SELECT * FROM buyer WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];      
    }
 }
     if($_POST)
      {   
          $sql2="INSERT INTO `comments` (`food_id`, `food_name`, `buyer_id`, `username`, `message`) VALUES ('".$food_id."', '".$food_name."', '".$unique_id."', '".$username."', '".$msg."')";
          $query2 = mysqli_query($db,$sql2);     
      }


 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style(3).css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

  <meta http-equiv="refresh"
        content="0; url = comment.php?food_name=<?php echo $food_name; ?>&food_id=<?php echo $food_id; ?>" />
</head>
<body>
  </body>
  </html>