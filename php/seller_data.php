<?php
    include_once "config.php";
?>
<?php
$username=$_SESSION['username'];
$query4 = "SELECT * FROM seller WHERE username='$username'";
     $result4=$db->query($query4);
    if($result4->num_rows>0){
    
    while($row=$result4->fetch_assoc())
    {  
       $_SESSION['unique_id']=$row['unique_id'];
       
    }
 }
?>
<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($db, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        if(!empty($row2['msg']))
        {
            ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="seller_chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="./images/user_profile.png" alt="">
                    <div class="details">
                        <span>'. $row['username'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
        }

        
    }
?>