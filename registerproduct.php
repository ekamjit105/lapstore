<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$id = $_POST['id'];
$name = $_POST['name'];
$cat = $_POST['cat'];
$prof = $_POST['prof'];
$type = $_POST['type'];
$brand = $_POST['brand'];
$gaming = $_POST['gaming'];
$price = $_POST['price'];
$disc = $_POST['disc'];

$offer = $_POST['offer'];
$odescp = $_POST['odescp'];
$sdescp = $_POST['sdescp'];
$ldescp = $_POST['ldescp'];

//append selected file name to path
$files = $_FILES['file'];
$filename = $files['name'];
$destionationfile = "products/".$filename."";

$q = " select * from products where pid = '$id'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION["pregister"]="Product ID already exists";
	header('location:addprod.php');
}

else
{	
	$qy = "insert into products
		(pid, pname, pimage, category, prof, type, brand, gaming, price, discount,sdescp,ldescp,offer,odescp) 
values 	('$id' , '$name', '$destionationfile' , '$cat', '$prof', '$type', '$brand', '$gaming', '$price', '$disc','$sdescp', '$ldescp', '$offer', '$odescp') ";
		mysqli_query($con, $qy);
		$_SESSION["pregister"]="product added";
		header('location:prodlogout.php');
	
} 
?>