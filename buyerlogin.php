<?php include('server2.php') ?>
<?php
// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM buyer WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($results);
      $_SESSION['username'] = $username;
      $_SESSION['unique_id'] = $row['unique_id'];
      $status = "Active now";
      $sql2 = mysqli_query($db, "UPDATE buyer SET status = '{$status}' WHERE username='$username'");


      $_SESSION['success'] = "You are now logged in";
      header('location: buyer_logged-in.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }

}



?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <style>
  body {
    background: linear-gradient(-45deg, #ee7752, forestgreen , #DAF7A6);
  background-size: 400% 400%;
  
  animation: gradient 5s ease infinite;}
    .header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #808000;
  text-align: center;
  border: 1px solid rgb(14, 184, 133);
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: forestgreen;
  border: none;
  border-radius: 5px;
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
</style>
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="buyerlogin.php">
    <span onclick="document.location='account.php'" class="close" title="Close Modal">&times;</span>
    <?php include('errors.php'); ?>
    <div class="input-group">
     <b> <label>Username</label></b>
      <input type="text" name="username" placeholder="Enter Username" required>
    </div>
    <div class="input-group">
    <b>  <label>Password</label></b>
      <input type="password" name="password" id="myInput" placeholder="Enter Password" required>
    </div>
    <input type="checkbox" onclick="myFunction()">Show Password
    <div class="input-group">
      <button  type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="buyersignup.php">Sign up</a>
    </p>
  </form>


<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>