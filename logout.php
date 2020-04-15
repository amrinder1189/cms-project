<?php include"includes/db.php" ?>
<?php session_start();  ?>
<?php


$_SESSION['userid']  = null;
$_SESSION['username'] = null;
$_SESSION['useremail'] = null;
$_SESSION['userpss']  = null;
$_SESSION['userimage'] = null;

	header("Location: index.php");

?>