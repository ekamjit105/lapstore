<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');


$userid = $_SESSION['userid'];
/*
$qmail = " select email from users where uid ='$userid' ";

$resulta = mysqli_query($con,$qmail);

while($row = mysqli_fetch_array($resulta)) 
{
	$mail = $row['email']; 
}
*/
$otp = $_POST['otp'];

$q = " select * from users where uid = '$userid' and otp = '$otp'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);



if($num == 1)
{	/*
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
	*/

	header('location:changepw.php');
} 

else
{
	$_SESSION["otperr"]="Invalid OTP entered";
	header('location:otp.php');
}