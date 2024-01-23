<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$mail = $_POST['mail'];

$q = " select * from users where email = '$mail'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 0)
{
	$_SESSION["mailerr"]="Email Id not registered";
	header('location:forgotpw.php');
}

else
{	
	unset($_SESSION['mailerr']);
	$idquery = " select uid from users where email ='$mail' ";
	$namequery = " select uname from users where email ='$mail' ";

	$resulta = mysqli_query($con,$idquery);
	$resultb = mysqli_query($con,$namequery);

	while($row = mysqli_fetch_array($resulta)) 
	{
		$userid = $row['uid']; 
  	}
	while($row = mysqli_fetch_array($resultb)) 
	{
		$name = $row['uname']; 
  	}

	$_SESSION['username'] = $name;
	$_SESSION['userid'] = $userid;
	header('location:sendmail.php');
} 
