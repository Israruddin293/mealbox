
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background: linear-gradient( mistyrose, forestgreen, #808000);
  background-size: 400% 400%;
  animation: gradient 5s ease infinite;}

* {box-sizing: border-box;}
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
p{
  text-align: center;
 /* text-shadow: 0px 10px 10px rgba(0, 0, 0, .8); */
  font-family: "Great Vibes", cursive;
  font-size: 35px;
  color: white;
  background-color:b#808000;;
  margin-left: 220px;
  margin-right: 220px;
  padding-top: 10px;
  padding-bottom: 10px;

}
input[type=text], select, textarea, input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: #ddd;
}
label{
  padding: 0;
  font-size: 17px;
}
input[type=submit] {
  background-color: #808000;
  color: white;
  font-size: 18px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
/*background-color: #f2f2f2;  */
  padding: 20px;
  margin: 8px;
}

.form-group{
   margin-top: 0;
   margin-bottom: 20px;
}
.box{
  border: 1px solid;
  border-radius: 5px;
  margin-left: 300px;
  margin-right: 300px;
  margin-top: 50px;
  margin-bottom: 30px;
  
}

.close {
  position: relative;
  float: right;
 margin-right: 30px;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.contact{
  margin-bottom: 60px;
}
.info{
  text-align: center;
  font-size: 18px;
  margin-left: 300px;
}
</style>
</head>
<body>

<div class="box">
<div class="contact">
<p><b>Contact Form</b></p>

<span class="info">Leave us a message.</span>

<span onclick="goBack()" class="close" title="Close Modal">&times;</span>
</div>
<div class="container">

  <form method="post" action="">
    
    <label for="name"><b><i>Name</i></b></label>
    <input type="text" id="name" name="name" placeholder="Your Name..">

    <label for="email"><b><i>Email</i></b></label>
    <input type="email" id="email" name="email" placeholder="Your Email Address..">

    <label for="phone"><b><i>Phone</i></b></label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone No.." maxlength="11">

    <label for="subject"><b><i>Subject</i></b></label>
    <input type="text" id="subject" name="subject" placeholder="Your Subject..">

    <div class="form-group">
    <label for="message"><b><i>Message</i></b></label>
    <textarea id="message" name="message" placeholder="Write something.." maxlength="250" rows="7" style="height:150px"></textarea>
    <span class="help-block">Max Character length : 250 </span>
    </div>
    <input type="submit" value="Submit" id="submit" name="submit">
  </form>
</div>
</div>
<?php
if (isset($_POST['submit'])){
require 'server2.php';

$Name = $db->real_escape_string($_POST['name']);
$Email_Id = $db->real_escape_string($_POST['email']);
$Mobile_No = $db->real_escape_string($_POST['phone']);
$Subject = $db->real_escape_string($_POST['subject']);
$Message = $db->real_escape_string($_POST['message']);

$query = "INSERT into contact(id, name, email, phone, subject, message) VALUES('', '$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $db->query($query);

if (!$success){
  die("Couldnt enter data: ".$db->error);
}

$db->close();
}
?>   


</body>
</html>


 
<?php
/*if(isset($_POST['submit']))
{    
     $contact_name = $_POST['name'];
     $contact_email = $_POST['email'];
     $contact_phone = $_POST['phone'];
     $contact_subject = $_POST['subject'];
     $contact_message = $_POST['message'];

     $sql = "INSERT INTO contact (name, email, phone, subject, message)
     VALUES ('$contact_name','$contact_email','$contact_phone', '$contact_subject', '$contact_message')";
     if (mysqli_query($db, $sql)) {
        /*echo "New record has been added successfully !";*/
    
?>

<script>
function goBack() {
  window.history.back();
}
</script>