<?php

session_start();
echo "inclear";
$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];
mysqli_select_db($con, 'project');


$cartquery="select * from cart where uid = '$userid'";
$cresult=mysqli_query($con,$cartquery);

while($rows=mysqli_fetch_assoc($cresult))
{ 
	$pid=$rows['pid'];
	$qy = "delete from cart where pid = '$pid' and uid = '$userid'";
	mysqli_query($con, $qy);
}
if(isset($_SESSION['order']))
{header('location:index.php');
}
else
{header('location:cart.php');
}

?>