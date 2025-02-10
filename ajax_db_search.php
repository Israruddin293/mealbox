<?php
require_once "server2.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM food_items WHERE food_name LIKE '{$_GET['term']}%' LIMIT 25";
    $result = mysqli_query($db, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['food_name'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>