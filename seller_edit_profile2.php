<?php include('server2.php') ?>
<?php
$name = $_SESSION['username']; 

?>
<?php
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "images/".$filename;
$query2 = "SELECT * FROM seller WHERE username='$name'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $id=$row['id'];
    }
 }
if(empty($filename)){
    if (count($errors) == 0) {
    $sql = "UPDATE seller set username='" . $_POST['username'] . "', seller_name='" . $_POST['seller_name'] . "', phone='" . $_POST['phone'] . "', email='" . $_POST['email'] . "', address='" . $_POST['address'] . "' WHERE id='$id'";
//$query = "INSERT INTO seller (username, seller_name, phone, email, address) 
  //        VALUES('$username', '$seller_name', '$phone', '$email', '$address')";
   $results= mysqli_query($db, $sql);
   $query = "SELECT * FROM seller WHERE id='$id'";
     $result=$db->query($query);
    if($result->num_rows>0){
    
    while($row=$result->fetch_assoc())
    {  
       $_SESSION['username']= $row['username'];
    }
 }
}
}
else{
    if (count($errors) == 0) {
    $sql = "UPDATE seller set username='" . $_POST['username'] . "', seller_name='" . $_POST['seller_name'] . "', phone='" . $_POST['phone'] . "', email='" . $_POST['email'] . "', address='" . $_POST['address'] . "', image='./images/$filename' WHERE id='$id'";
//$query = "INSERT INTO seller (username, seller_name, phone, email, address) 
  //        VALUES('$username', '$seller_name', '$phone', '$email', '$address')";
   $results= mysqli_query($db, $sql);
   // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
   $query = "SELECT * FROM seller WHERE id='$id'";
     $result=$db->query($query);
    if($result->num_rows>0){
    
    while($row=$result->fetch_assoc())
    {  
       $_SESSION['username']= $row['username'];
    }
 }
}
}

     
  header('location: seller_profile.php'); 
?>