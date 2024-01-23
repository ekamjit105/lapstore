<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$name = $_POST['user'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$mob = $_POST['phone'];


$q = " select * from users where email = '$mail'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION["signuperr"]="Account already exists with this Email Id";
	header('location:signup.php');
}

else
{	
	$q = " select * from users";

	$resultrows = mysqli_query($con, $q);
	
	$rowcount=mysqli_num_rows($resultrows);
	$userid=$rowcount+1;

	$qy = "insert into users(uid, uname , password, email, phno) values ('$userid', '$name' , '$pass', '$mail', '$mob') ";
	mysqli_query($con, $qy);
	
	$_SESSION['username'] = $name;
	$_SESSION['userid'] = $userid;
	
	$_SESSION["loginerr"]="New account successfully created";
	header('location:index.php');
	
} 
?>