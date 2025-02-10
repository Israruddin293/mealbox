<?php include('server2.php')?>
<?php

if (isset($_POST['submit'])){
$msg = "";

$category_name = $_POST["category_name"];
$username=$_SESSION['username'];


$bakery_name = $db->real_escape_string($_POST['bakery_name']);
$bakery_price = $db->real_escape_string($_POST['bakery_price']);



  // If upload button is clicked ...
 
     $username=$_SESSION['username'];
$query2 = "SELECT * FROM seller WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $seller_name=$row['seller_name'];
       
    }
 } 

$name = $seller_name;  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "mealbox3");
$query2 = "SELECT * FROM seller WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];
       
    }
 }
  $query = "INSERT INTO seller_data (unique_id, username, seller_name, food_name, image,  price) VALUES ( '$unique_id', '$username', '$name', '$bakery_name', './images/$filename', '$bakery_price')";

        
        mysqli_query($db, $query);
        // Get all the submitted data from the form
        $query3 = "SELECT * FROM category WHERE category_name='$category_name'";
     $result3=$db->query($query3);
    if($result3->num_rows>0){
    
    while($row2=$result3->fetch_assoc())
    {  
       $category_id=$row2['category_id'];
       $category_name=$row2['category_name'];
       
    }
 }
        $sql2 = "INSERT INTO food_items (category_id, category_name, food_name, image,  price, seller_name) VALUES ('$category_id', '$category_name', '$bakery_name','./images/$filename', '$bakery_price','$name')";
        
        // Execute query
        mysqli_query($db, $sql2);

          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  
       $db->close();
       header('location: add_food.php');
}
?>   