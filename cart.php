<?php

session_start();

$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];
mysqli_select_db($con, 'project');

$query="select * from cart where uid = '$userid'";
$result=mysqli_query($con,$query);
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

<center><h3 class="head">Shopping cart</h3><br></center>

		<div class="container">
			<div class="row">
				<div class="col-sm-8">
			<?php
				$total=0;
				while($rows=mysqli_fetch_assoc($result))
				{
			?>	

			
				
			<form method="post" action="removecart.php">
			<div class="row" style="background-color: #FFEDF7 ; padding: 1%; margin-right: 1%;" >
			<div class="col-sm-5">
				<center>
				 <img src="<?php echo $rows['pimage'];?>" class="card-img-top img-fluid" alt="image" >
				</center>
			</div>
			<div class="col-sm-7">
				<div class="card" >
				  
					 <div class="card-body">
					   <h5 class="card-title"><?php echo $rows['pname'];?></h5>
					   <p class="card-text">
					    	<?php echo $rows['brand'];?>
					    	<?php echo $rows['type'];?></p>
					 </div>
					 <ul class="list-group list-group-flush">
					   <li class="list-group-item">Price: &#x20B9;<?php echo $rows['price'];?>
					   <?php if($rows['discount']!=0){
				    		?>
				    		<br>
				    		<span class="discount"><?php echo $rows['discount'];?>% off</span> <span class="mrp">(MRP &#x20B9;<?php echo ($rows['price']+$rows['discount']/100*$rows['price']);?>)</span>

				    	<?php
				    	}
				    	?></li>
					 </ul>
					<input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					<center>
						<br>
						<input type="submit" name="submit" value="remove" style="width: 20%;"></td>
						</br><br>
					</center>
				</div>	
			</div>
			</div>
			<br>
			</form>
				
					<?php
					$total = $total + $rows['price'];
				}	
				?>
			</div><!--products section-->

			<div class="col-sm-4" style="background-color: #f7fffe; padding: 2%; border-radius: 10px 10px; height: 100%;">
				<center><br>Order Total : <?php echo $total;?><br><hr><center>
					<br>
				<center>
				<a href="clearcart.php">Clear Cart</a>
				<br><a href="orderhistory.php">View Order history</a>
				<form action="checkout.php" method="post">
				
				<input type="hidden" name="total" value="<?php echo $total;?>">
				<br><br>
				<?php if($total!='0'){?>
				<input type="submit" name="Place order" value="Proceed to checkout">
				<?php }?>
				<br><br>

		</center>
			</div>

			</div><!--row-->
		</div><!--container-->




		<br><br>
	




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


			

</body>
</html>