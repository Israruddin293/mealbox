<?php

include "server2.php";

if($_POST)
{
	$username=$_SESSION['username'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`username`, `message`) VALUES ('".$username."', '".$msg."')";

	$query = mysqli_query($db,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>