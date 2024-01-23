<?php

session_start();

$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];
mysqli_select_db($con, 'project');

$addr=$_POST['addr'];
$orderid=$_POST['oid'];
$nod=$_POST['nod'];

$q="update users set addr='$addr', nod='$nod' where uid ='$userid' ";
mysqli_query($con,$q);

$cartquery="select * from cart where uid = '$userid'";
$cresult=mysqli_query($con,$cartquery);


while($rows=mysqli_fetch_assoc($cresult))
{
$pname=$rows['pname'];
$brand=$rows['brand'];
$pimage=$rows['pimage'];
$type=$rows['type'];
$price=$rows['price'];
$discount=$rows['discount'];
$insq="insert into orders(uid,oid,pimage,pname,brand,type,price,discount) values ('$userid','$orderid','$pimage','$pname','$brand','$type','$price','$discount')";
mysqli_query($con,$insq);
}
$_SESSION['order']='yes';
header('location:clearcart.php');
?>