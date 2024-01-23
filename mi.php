<?php 
	
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$querya="select * from products where brand='mi' and category = 'laptop'";
$resulta=mysqli_query($con,$querya);
$queryb="select * from products where brand='mi' and category = 'accessory'";
$resultb=mysqli_query($con,$queryb);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="prostyle.css">
    <link rel="stylesheet" type="text/css" href="pagestyle.css">
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
	<h2 class="head">Laptops</h2>
<br>
		<div class="container"> 

			<div class="row">
			<?php
				while($rows=mysqli_fetch_assoc($resulta))
				{
			?>	<div class="col-sm-4 col-lg-4 col-md-4">
				
				<form method="post" action="cartvalidation.php">
				<div class="card" >
				  	
				  <center>
				  	<img src="<?php echo $rows['pimage'];?>" class="card-img-top img-fluid" alt="image" >
				  </center>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $rows['pname'];?>
				    	<?php echo $rows['category'];?></h5>
				    <p class="card-text">
				    	by <?php echo $rows['brand'];?>
				    	<br><?php echo $rows['type'];?> <?php echo $rows['category'];?>
				    	<br><br><?php echo $rows['sdescp'];?>
				    </p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Price: &#x20B9;<?php echo $rows['price'];?>
				    	<?php if($rows['discount']!=0){
				    		?>
				    		<br>
				    		<span class="discount"><?php echo $rows['discount'];?>% off</span> <span class="mrp">(MRP &#x20B9;<?php echo ($rows['price']+$rows['discount']/100*$rows['price']);?>)</span>

				    	<?php
				    	}
				    	?>
				    	<?php if($rows['offer']=='yes'){
				    		?>
				    		<br><br><b>
				    		More offers available
				    		</b>
				    	<?php
				    	}
				    	?>
				    </li>
				  	<center>
				  		<li class="list-group-item"> <input type="submit" name="submit" value="View product" formaction="productdisp.php"></li>
				  	</center>
				  </ul>
				  <div class="card-body">
				  
				    <input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					<center>
						
					<input type="submit" name="submit" value="add to wishlist" formaction="wishlistvalidation.php" id="button">
					<input type="submit" name="submit" value="add to cart" id="button">
					</center>
				  
				  </div>
				</div>
				</form>
				<br>
				</div>
					<?php
				}	
				?>
				</div>
			</div>


<br>
	<h2 class="head">Accessories</h2>
<br>
		<div class="container"> 

			<div class="row">
			<?php
				while($rows=mysqli_fetch_assoc($resultb))
				{
			?>	<div class="col-sm-4 col-lg-4 col-md-4">
				
				<form method="post" action="cartvalidation.php">
				<div class="card" >
				  	
				  <center>
				  	<img src="<?php echo $rows['pimage'];?>" class="card-img-top img-fluid" alt="image" >
				  </center>
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $rows['pname'];?>
				    	<?php echo $rows['category'];?></h5>
				    <p class="card-text">
				    	by <?php echo $rows['brand'];?>
				    	<br><?php echo $rows['type'];?> <?php echo $rows['category'];?>
				    	<br><br><?php echo $rows['sdescp'];?>
				    </p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Price: &#x20B9;<?php echo $rows['price'];?>
				    	<?php if($rows['discount']!=0){
				    		?>
				    		<br>
				    		<?php echo $rows['discount'];?>% off (MRP &#x20B9;<?php echo ($rows['price']+$rows['discount']/100*$rows['price']);?>)

				    	<?php
				    	}
				    	?>
				    	<?php if($rows['offer']=='yes'){
				    		?>
				    		<br>
				    		More offers available

				    	<?php
				    	}
				    	?>
				    </li>
				  	<center>
				  		<li class="list-group-item"> <input type="submit" name="submit" value="View product" formaction="productdisp.php"></li>
				  	</center>
				  </ul>
				  <div class="card-body">
				  
				    <input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					<center>
						
					<input type="submit" name="submit" value="add to wishlist" formaction="wishlistvalidation.php" id="button">
					<input type="submit" name="submit" value="add to cart" id="button">
					</center>
				  
				  </div>
				</div>
				</form>
				<br>
				</div>
					<?php
				}	
				?>
				</div>
			</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>