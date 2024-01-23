<?php

session_start();

$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];
mysqli_select_db($con, 'project');

$pid = $_POST['pid'];

	$idquery = " select pid from products where pid ='$pid' ";
	$brandquery = " select brand from products where pid ='$pid' ";
	$pnamequery = " select pname from products where pid ='$pid' ";
	$typequery = " select type from products where pid ='$pid' ";
	$gamingquery = " select gaming from products where pid ='$pid' ";
	$pricequery = " select price from products where pid ='$pid' ";
	$discquery = " select discount from products where pid ='$pid' ";
	$imagequery = " select pimage from products where pid ='$pid' ";
	$catquery = " select category from products where pid ='$pid' ";
	
	$squery = " select sdescp from products where pid ='$pid' ";
	$lquery = " select ldescp from products where pid ='$pid' ";
	$oquery = " select odescp from products where pid ='$pid' ";
	$offerquery = " select offer from products where pid ='$pid' ";
	
	$resulta = mysqli_query($con,$idquery);
	$resultb = mysqli_query($con,$brandquery);
	$resultc = mysqli_query($con,$pnamequery);
	$resultd = mysqli_query($con,$typequery);
	$resulte = mysqli_query($con,$gamingquery);
	$resultf = mysqli_query($con,$pricequery);
	$resultg = mysqli_query($con,$discquery);
	$resulth = mysqli_query($con,$imagequery);
	$resulti = mysqli_query($con,$catquery);

	$results = mysqli_query($con,$squery);
	$resultl = mysqli_query($con,$lquery);
	$resulto = mysqli_query($con,$oquery);
	$resultof = mysqli_query($con,$offerquery);
	
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
  	while($row = mysqli_fetch_array($resulti)) 
	{
		$category = $row['category']; 
  	}

  	while($row = mysqli_fetch_array($results)) 
	{
		$sdescp = $row['sdescp']; 
  	}

  	while($row = mysqli_fetch_array($resultl)) 
	{
		$ldescp = $row['ldescp']; 
  	}
  	while($row = mysqli_fetch_array($resulto)) 
	{
		$odescp = $row['odescp']; 
  	}
  	while($row = mysqli_fetch_array($resultof)) 
	{
		$offer = $row['offer']; 
  	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="prostyle.css">
    <link rel="stylesheet" type="text/css" href="pagestyle.css">
    <link rel="stylesheet" type="text/css" href="overstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Goldman&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
<body style="background-color:#DAE8EB;">

<?php 
	if(isset($_SESSION['cartex']))
	{
		echo '<script>alert("Selected product already exists in the cart!")</script>'; 
		unset($_SESSION['cartex']);
	}
	if(isset($_SESSION['wishex']))
	{
		echo '<script>alert("Selected product already exists in the wishlist!")</script>'; 
		unset($_SESSION['wishex']);
	}
?>
	

	<!-- TOP LINKS -->

	<section style="background: #000437 ;  padding: 2vh;" class="toplinks" >

	<ul type="none" id="horizontal-list">
  	<li style="color: #75E3F8 ">Hello, <?php echo $_SESSION['username']; ?></li>
  	<li><a href="wishlist.php">&hearts; Wishlist</a></li>
  	<li><a href="orderhistory.php">&check; My Orders</a></li>
  	<li style="text-decoration-color: green; border: 0.01px solid green; padding: 2px; margin-top: 5px; background: black;"><a href="logout.php">Logout</a></li>
	</ul>

	</section>

	<!-- NAVBAR -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	  	<img src="logos/mouse.jpg" width="21" height="30" alt="" loading="lazy">

	  | LapStore.in</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mx-auto">
	      <li class="nav-item active navlist">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      
	      <li class="nav-item dropdown navlist">
	        <a class="nav-link dropdown-toggle" href="brandmain.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Brands
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="apple.php">Apple</a>
	          <a class="dropdown-item" href="hp.php">HP</a>
	          <a class="dropdown-item" href="dell.php">Dell</a>
	          <a class="dropdown-item" href="lenovo.php">Lenovo</a>
	          <a class="dropdown-item" href="mi.php">Mi</a>
	          <a class="dropdown-item" href="asus.php">Asus</a>
	        </div>
	    
	      <li class="nav-item dropdown navlist">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Featured
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="360.php">360&deg; and 180&deg; foldable</a>
	          <a class="dropdown-item" href="touch.php">Touchpads with Stylus</a>
	          <a class="dropdown-item" href="premium.php">Premium </a>
	        </div>
	      </li>

	      <li class="nav-item dropdown navlist">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Profession
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="office.php">Office</a>
	          <a class="dropdown-item" href="leisure.php">Leisure</a>
	          <a class="dropdown-item" href="student.php">Student</a>
	        </div>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="gaming.php">Gaming</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="accessories.php">Accessories and more</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="offers.php">Offers and discounts</a>
	      </li>

	</div>
	<a class="navbar-brand" href="cart.php"> &#x1f6d2; Cart</a>
</nav>
<br>
<br>
<form method="post" action="cartvalidation.php">
<div class="container">
	<div class="row" style="background-color:#FFFFFF; padding: 2%;">
		<div class="col-sm-5">
			
			<img src="<?php echo $pimage;?>" class="img-fluid">

		</div>
		<div class="col-sm-7" style="padding: 5%; background-color: #D6F3ED;">
			<h3><?php echo "$pname";?></h3>
			<h4>by <?php echo "$pbrand";?></h4>

			<br><?php echo "$sdescp";?>
			<br><br><h3>Features</h3><?php echo "$ldescp";?>
			<?php if($offer=='yes'){
				?>
				<br><br><h3>Offers</h3><?php echo "$odescp";?>
				<?php
			}?>
			


			<br><br><h3>Price: <?php echo "$price";?></h3>
			<br><?php if($discount!=0){
				    		?>
				    		<span class="discount"><?php echo $discount;?>% off </span>
				    		<span class="mrp">(MRP &#x20B9;<?php echo ($price+$discount/100*$price);?>)</span>

				    	<?php
				    	}
				    	?>
			<br><br>
			<img src="images1/smallproductbanner.jpg" class="img-fluid">

			<input type="hidden" name="pid" value="<?php echo "$pid";?>">
			<center>
			<br><br>		
			<input type="submit" name="submit" value="&hearts; Add to wishlist" formaction="wishlistvalidation.php" id="button">
			<input type="submit" name="submit" value="&#x1f6d2; Add to cart" id="button">
			</center>	

		</div>




	</div>

</form>	


</div>
<br>

<script>
function goBack() {
  window.history.back();
}
</script>
			</center>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


			

</body>
</html>