<?php include('server2.php') ?>
<?php

  $user_check_query = "SELECT * FROM buyer WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      
      array_push($errors, "email already exists");
    }
  }
  header('location: buyer_edit_profile2.php');
 
?>