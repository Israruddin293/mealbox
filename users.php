<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['username'])){
    header("location: buyerlogin.php");
  }
?>
<?php
$username=$_SESSION['username'];
$query2 = "SELECT * FROM buyer WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $unique_id=$row['unique_id'];
       
    }
 }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($db, "SELECT * FROM buyer WHERE unique_id = '$unique_id'");
            $result= mysqli_num_rows($sql);
            if( $result > 0){
              $row = mysqli_fetch_assoc($sql);
            }

            
          ?>
          <img src="./images/user_profile.png" alt="">
          <div class="details">
            <span><?php echo $_SESSION['username']?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
          <?php
          
        
        ?>
        </div>
        <a href="buyer_logged-in.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Back</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
