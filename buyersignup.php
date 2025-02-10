<?php include('server2.php') ?>
<?php // REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
   $ran_id = rand(time(), 100000000);
  $status = "Active now";

  $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM buyer WHERE username='$username' OR email='$email' OR phone='$phone' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    if ($user['phone'] === $phone) {
      array_push($errors, "phone number already exists");
    }
    echo "<script>
    alert('A user with the same username, email, or phone number already exists. Please try again.');
    window.history.back(); // Go back to the registration form
</script>";
exit(); 
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
  if(!empty($filename)){
    $query = "INSERT INTO buyer (unique_id, username, email, phone, address, image, password, status) 
          VALUES({$ran_id}, '$username', '$email', '$phone', '$address', './images/$filename', '$password', '{$status}')";
    $insert_query = mysqli_query($db, $query);
     
    $_SESSION['unique_id'] = $ran_id;
    $_SESSION['username'] = $username;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;

    $_SESSION['success'] = "You are now logged in";

   if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }


    $to_email = $email;
        $subject = "New Message From Mealbox";
        $body = "Welcome ".$username. ",\n   Thank you for becoming a member of mealbox.\n   Hope you will have a great journey with us.";
        $headers = "From: mealbox000@gmail.com";
        mail($to_email, $subject, $body, $headers);   
   }
   else{
    $query = "INSERT INTO buyer (unique_id, username, email, phone, address, image, password, status) 
          VALUES({$ran_id}, '$username', '$email', '$phone', '$address', './images/user_profile.png', '$password', '{$status}')";
    $insert_query = mysqli_query($db, $query);
     
    $_SESSION['unique_id'] = $ran_id;
    $_SESSION['username'] = $username;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;

    $_SESSION['success'] = "You are now logged in";
   }
 }

    header('location: buyer_success.php');

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
  body 
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
    <h2>Sign Up</h2>
  </div>
  
  <form method="post" action="buyersignup.php" enctype="multipart/form-data">
    <span onclick="document.location='account.php'" class="close" title="Close Modal">&times;</span>
    <?php include('errors.php'); ?>   
    <div class="input-group">
      <label><b>Username</b></label>
      <input type="text" name="username" placeholder="Enter Username" required>
    </div>
    <div class="input-group">
      <label><b>Email</b></label>
      <input type="email" name="email" placeholder="Enter Email" required>
    </div>
    <div class="input-group">
      <label><b>Phone</b></label>
      <input type="text" name="phone" placeholder="01812345678" maxlength="11" required>
    </div>
    <div class="input-group">
      <label><b>Address</b></label>
      <input type="text" name="address" placeholder="Rawalpindi, street no 3" required>
    </div>
    <div class="input-group">
      <label><b>Password</b></label>
      <input type="password" id="psw" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
    </div>
    <input type="checkbox" onclick="myFunction()">Show Password
    <div class="input-group">
      <label><b>Confirm Password</b></label>
      <input type="password" name="password_2" id="psw" placeholder="Enter same Password" required>
    </div>

    <div class="input-group">
      <label><b>Upload picture (Optional)</b></label>
      <input type="file" name="uploadfile" value="" />
    </div>

    <div id="message">
      <h3>Password must contain the following:</h3>
      <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
      <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
      <p id="number" class="invalid">A <b>number</b></p>
      <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>

    <div class="input-group">
      <button type="submit" class="btn" value="Upload" name="reg_user">Sign Up</button>
    </div>
    <p>
      Already a member? <a href="buyerlogin.php">Sign in</a>
    </p>

    

  </form>
  
  
<script>
  function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>



<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>