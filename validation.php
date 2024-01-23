<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$q = " select * from users where email = '$mail' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{	
	unset($_SESSION['loginerr']);
	/*
	$namequery = " select uname from users where email ='$mail' ";
	$idquery = " select uid from users where email ='$mail' ";
	$name = mysqli_query($con,$namequery);
	$uid = mysqli_query($con,$idquery);
	/*
	while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) 
	{
    	$name = $row['uname']; 
    	$uid = $row['uid']; 
	}
	$_SESSION['username'] = $name;
	$_SESSION['userid'] = $uid;
	
	*/

	$namequery = " select uname from users where email ='$mail' ";
	$idquery = " select uid from users where email ='$mail' ";
	$resulta = mysqli_query($con,$namequery);
	$resultb = mysqli_query($con,$idquery);

	$name = "abc";
	$uid='2';

	while($row = mysqli_fetch_array($resulta)) 
	{
		$name = $row['uname']; 
  	}

  	while($row = mysqli_fetch_array($resultb)) 
	{
		$uid = $row['uid']; 
  	}

	$_SESSION['username'] = $name;
	$_SESSION['userid'] = $uid;

	header('location:index.php');
}

else
{	
	$_SESSION["loginerr"]="Incorrect email or password";
	header('location:login.php');

} 

?>