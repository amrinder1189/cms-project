<?php


if (isset($_GET['p_id'])) {
	$id = $_GET['p_id'];
	
	$query="DELETE FROM users WHERE user_id = {$id} ";
	$delete_user= mysqli_query($conn,$query);
	header("Location : users_all.php");
}



?>