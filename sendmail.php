<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$userid = $_SESSION['userid'];
$uname = $_SESSION['username'];

$q = " select email from users where uid ='$userid' ";

$result = mysqli_query($con,$q);

while($row = mysqli_fetch_array($result)) 
{
	$mail = $row['email']; 
}

$otp = rand(100000,999999);

$qy = "update users set otp='$otp' where email = '$mail'";
mysqli_query($con,$qy);

$to_email = "$mail";
$subject = "OTP verification by LapStore.in";
$body = " Hi dear $uname, looks like you have locked yourself out!\n\n No issues, the OTP to verify your account is $otp . \n Have a great day!\n\n LapStore.in";
$headers = "From: ekamjit105@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
	$_SESSION['otperr']="OTP successfully sent on registered Email";
    header('location:otp.php');

} else {
    echo "Email sending failed...";
}