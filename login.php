<?php include"includes/db.php"  ?>
<?php session_start(); ?>
<?php

if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM users WHERE user_email = '{$username}'";
	$users_login=mysqli_query($conn,$query);

	while ($row = mysqli_fetch_assoc($users_login)) {
                               $user_id = $row['user_id'];
                               $user_name =$row['user_name'];
                               $user_email = $row['user_email'];
                               $user_pass =  $row['user_pass'];
                               $user_image = $row['user_image'];
														}


if ($username !== $user_email && $password !== $user_pass) {
	
	header("Location: index.php");

}
elseif ($username == $user_email && $password == $user_pass) {

$_SESSION['userid']  = $user_id;
$_SESSION['username'] = $user_name;
$_SESSION['useremail'] = $user_email;
$_SESSION['userpss']  = $user_pass;
$_SESSION['userimage'] = $user_image;

	header("Location: admin");
}
else
{
	header("Location: index.php");
}

}

?>