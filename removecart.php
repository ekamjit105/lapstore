<?php

session_start();

$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];

mysqli_select_db($con, 'project');

$pid = $_POST['pid'];

$qy = "delete from cart where pid = '$pid' and uid = '$userid'";
	mysqli_query($con, $qy);
	
	header('location:cart.php'); 
?>