<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');


$userid = $_SESSION['userid'];

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];

if($p1 != $p2)
{
	$_SESSION["pwerr"]="passwords do not match";
	header('location:changepw.php');
}

else
{	
	unset($_SESSION['pwerr']);
	$qy = "update users set password='$p1' where uid = '$userid'";
	mysqli_query($con,$qy);
	$_SESSION['pwchanged'] = "Password successfully changed."; 
	header('location:index.php');
} 
