
<?php
    session_start();
    include_once "config.php";
?>
<?php
$username=$_SESSION['username'];

?>

<?php
    $outgoing_id = $_SESSION['unique_id'];;
    $sql = "SELECT * FROM buyer WHERE NOT unique_id = '$outgoing_id' ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }else if(mysqli_num_rows($query) > 0){
        include_once "seller_data.php";
    }
    echo $output;
?>