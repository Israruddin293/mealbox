<?php include('server2.php') ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style>
body {
    background-color: tomato;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background-color: tomato;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: black;
}

.profile-button:focus {
    background: black;
    box-shadow: none
}

.profile-button:active {
    background: black;
    box-shadow: none
}

.back:hover {
    color: black;
    cursor: pointer
}

.labels {
    font-size: 16px;
}
.container{
    background-color: mistyrose;
    box-shadow: 30px 30px 35px black;
}
.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

input[type='text'], [type='email']{
    background-color: antiquewhite;
    border: 1px solid grey;
    box-shadow: 2px 2px 2px 2px grey;
}
</style>
</head>

<?php
$username = $_SESSION['username'];

$query2 = "SELECT * FROM seller WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $email=$row['email'];
       $address=$row['address'];
       $phone=$row['phone'];
       $seller_name = $row['seller_name'];
       $image=$row['image'];
    }
 }
?>
<body>
<div class="container rounded mt-5 mb-5">
    <form method="post" action="seller_edit_profile2.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="<?php echo $image; ?>"><span class="font-weight-bold"><?php echo $_SESSION['username']; ?></span><span class="text-black-50"><?php echo $email; ?></span></div>
            <input type="file" name="uploadfile" value="" /> 
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><b>Profile Settings</b></h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels"><b>Name</b></label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="labels"><b>Seller Name</b></label>
                        <input type="text" name="seller_name" class="form-control" value="<?php echo $seller_name; ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels"><b>Mobile Number</b></label>
                        <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels"><b>Email</b></label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels"><b>Address</b></label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                    </div>        
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button class="btn btn-primary profile-button" type="submit" value="Upload"><b>Save Profile</b></button>
                    </div>
                    </form>
                    <div class="col-md-6">
                        <button class="btn btn-primary profile-button" type="button" onclick="goBack()"><b>Go Back</b></button>
                    </div>
                </div>   
                    
            </div>
        </div>
    </div>

</div>
</div>
</div>
</body>
</html>


 <script>
function goBack() {
  window.location.href ="seller_profile.php";
}
</script>
<!-- <script>
    function myfunc() {
      window.location.href ="seller_profile.php";
    }
</script>  -->