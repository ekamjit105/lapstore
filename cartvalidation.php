



<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$pid = $_POST['pid'];
$userid = $_SESSION['userid'];

$q = " select * from cart where (uid = '$userid') and (pid = '$pid')";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['cartex']='yes';
?>	
<script>window.history.back()</script>
<?php
}

else
{	/*
	$qy = "insert into cart(uid, pid , brand, pname, type, gaming, price, discount) values ('$userid','','brand','pname','type','gaming','54','0')";

	mysqli_query($con, $qy);
	*/








	/*
	echo "query fired";
	
	$qyid = "update cart set uid = '$userid' where pid = '$pid'";

	mysqli_query($con, $qyid);
	*/
	
	
	$idquery = " select pid from products where pid ='$pid' ";
	$brandquery = " select brand from products where pid ='$pid' ";
	$pnamequery = " select pname from products where pid ='$pid' ";
	$typequery = " select type from products where pid ='$pid' ";
	$gamingquery = " select gaming from products where pid ='$pid' ";
	$pricequery = " select price from products where pid ='$pid' ";
	$discquery = " select discount from products where pid ='$pid' ";
	$imagequery = " select pimage from products where pid ='$pid' ";
	
	
	$resulta = mysqli_query($con,$idquery);
	$resultb = mysqli_query($con,$brandquery);
	$resultc = mysqli_query($con,$pnamequery);
	$resultd = mysqli_query($con,$typequery);
	$resulte = mysqli_query($con,$gamingquery);
	$resultf = mysqli_query($con,$pricequery);
	$resultg = mysqli_query($con,$discquery);
	$resulth = mysqli_query($con,$imagequery);
	
	while($row = mysqli_fetch_array($resulta)) 
	{
		$p = $row['pid']; 
  	}
	while($row = mysqli_fetch_array($resultb)) 
	{
		$pbrand = $row['brand']; 
  	}
  	while($row = mysqli_fetch_array($resultc)) 
	{
		$pname = $row['pname']; 
  	}
  	while($row = mysqli_fetch_array($resultd)) 
	{
		$type = $row['type']; 
  	}
  	while($row = mysqli_fetch_array($resulte)) 
	{
		$gaming = $row['gaming']; 
  	}
  	while($row = mysqli_fetch_array($resultf)) 
	{
		$price = $row['price']; 
  	}
  	while($row = mysqli_fetch_array($resultg)) 
	{
		$discount = $row['discount']; 
  	}
  	while($row = mysqli_fetch_array($resulth)) 
	{
		$pimage = $row['pimage']; 
  	}

  	$qy = "insert into cart(uid, pid , brand, pname, pimage, type, gaming,price,discount) values ('$userid', '$pid', '$pbrand', '$pname', '$pimage', '$type', '$gaming', '$price', '$discount' ) ";
  	
  	mysqli_query($con, $qy);

	header('location:cart.php');
	
} 
?>