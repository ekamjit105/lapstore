<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" type="text/css" href="outerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>

<body style="background : #F5EBFD;" >
	<center>
		
	</center>
	<br><br>
	<div class="container vertical-center col-sm-7 formdiv" align="center" style="background-color:white;">
    	<!--<img src="logos/logomain.jpg" style="width: 60%;">
   	<h4 style="font-family: 'Arapey', serif;"> LOGIN </h4>
   -->
	<br>
   	<p class="head"><img src="logos/mouse.jpg" width="24" height="35" alt="" loading="lazy">

	  | LapStore.in</p>
<hr style="width: 20% background-color:black;">
	<br><h3>Admin Panel</h3>
	

	<br>
	
	<?php 
	
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con, 'project');

	$qa="select * from products where category='laptop'";
	$resulta=mysqli_query($con, $qa);

	$qb="select * from products where category='accessory'";
	$resultb=mysqli_query($con, $qb);

	$laptops=mysqli_num_rows($resulta);
	$accessory=mysqli_num_rows($resultb);	

	if(isset($_SESSION["pregister"]))
	{echo '<span style="color:red;">'.$_SESSION["pregister"].'</span>';
	}




	?>

	Last laptop id entered : L<?php echo $laptops?><br>
	Last accessory id entered : A<?php echo $accessory?><br><br>

	<form action="registerproduct.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="text" name="id" placeholder="  Enter product id" required >
	<input type="text" name="brand" placeholder="  Enter brand" required >
	<input type="text" name="name" placeholder="  Enter product name" required >
	<br><br>
	<input type="file" name="file" id="file" required>
	<br><br>
	<input type="text" name="cat" placeholder="  Enter category " required >
	<input type="text" name="type" placeholder="  Enter type" required >
	<input type="text" name="prof" placeholder="  Enter profession" required >
	<br><br>
	<input type="text" name="gaming" placeholder="  gaming (yes/no)" required >
	<br><br>Short description<br>
	<input type="text" name="sdescp" placeholder="  short description" required  style="width: 100%;">
	<br><br>Long description<br>
	<input type="text" name="ldescp" placeholder="  long description" required style="width: 100%;">
	<br><br>
	<hr>
	Offers<br><br>
	<input type="text" name="offer" placeholder="  offer (yes/no)" required >
	<br><br>
	<input type="text" name="odescp" placeholder="  offer description" style="width: 100%;">
	<br><br>
	<hr>
	<input type="number" name="price" placeholder="  Enter price" required>
	<input type="number" name="disc" placeholder="  Enter discount" required >
	<br><br>
	<input type="submit" name="submit" value="Add Product" id="button">

	</form>
	<br>

    </div>
























<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>