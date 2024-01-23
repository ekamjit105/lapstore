<?php
session_start();

if(!isset($_SESSION['username']))
{
	header('location:logout.php');
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
<body style="background-color: #FFEDF7 ;">



	<?php 
	if(isset($_SESSION['loginerr']))
	{
		echo '<script>alert("New account successfully created")</script>'; 
		unset($_SESSION['loginerr']);
	}
	if(isset($_SESSION['pwchanged']))
	{
		echo '<script>alert("Password successfully changed! Welcome")</script>'; 
		unset($_SESSION['pwchanged']);
	}
	if(isset($_SESSION['order']))
	{
		echo '<script>alert("Order Successfully placed!")</script>'; 
		unset($_SESSION['order']);
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

<center>
<div class="container">	
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <a href="apple.php"><img src="home/mac2.jpg" style="max-width:90vw ;" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item" data-interval="2000">
      <a href="mi.php"><img src="home/minotebook.jpg" style="max-width:90vw ;" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="hp.php"><img src="home/hpspectre2.jfif" style="max-width:90vw ;" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<br><p class="head">Exclusive offers and discounts</p>

<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$querya="select * from products where offer='yes'";
$resulta=mysqli_query($con,$querya);
?>

		<div class="container"> 

			<div class="row">
			<?php
				$count=0; 
				while($rows=mysqli_fetch_assoc($resulta))
				{
			?>	<div class="col-sm-2 col-lg-2 col-md-2 col-xs-3">
				
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
				    </p>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Price: &#x20B9;<?php echo $rows['price'];?>
				    	<?php if($rows['discount']!=0){
				    		?>
				    		<br><p class="discount"><?php echo $rows['discount'];?>% off </p>
				    		<p class="mrp">(MRP &#x20B9;<?php echo ($rows['price']+$rows['discount']/100*$rows['price']);?>)</p>

				    	<?php
				    	}
				    	?>
				    	<?php if($rows['offer']=='yes'){
				    		?>
				    		
				    		More offers available

				    	<?php
				    	}
				    	?>
				    </li>
				  	<center>
				  		<li class="list-group-item"> <input type="submit" name="submit" value="View product" formaction="productdisp.php" ></li>
				  	</center>
				  </ul>
				  
				    <input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					
				</div>
				</form>
				<br>
				</div>


					<?php
					$count=$count+1;
					if($count==6){break;}
				}	
				?>
				</div>
			</div>

<br>
<p class="whitesec head2"><a href="offers.php">Explore all offers and discounts </a></p>
<br>

<p class="head"> Choose from a wide variety of brands </p>
<div class="container">
<div class="row whitesec" >
	<div class="col-sm-2 col-xs-6 logo">
		<a href="apple.php"><img src="logos/apple.png" class="img-fluid logoimg"></a>
	</div>
	<div class="col-sm-2 col-xs-6 logo">
		<a href="hp.php"><img src="logos/hp.png" class="img-fluid logoimg"></a>
	</div>
	<div class="col-sm-2 col-xs-6 logo">
		<a href="dell.php"><img src="logos/dell.png" class="img-fluid logoimg"></a>
	</div>
	<div class="col-sm-2 col-xs-6 logo">
		<a href="lenovo.php"><img src="logos/lenovo.png" class="img-fluid logoimg" ></a>
	</div>
	<div class="col-sm-2 col-xs-6 logo">
		<a href="mi.php"><img src="logos/mi.png" class="img-fluid logoimg"></a>
	</div>
	<div class="col-sm-2 col-xs-6 logo">
		<a href="asus.php"><img src="logos/asus.png" class="img-fluid logoimg"></a>
	</div>
</div>
</div>

<br><p class="head">Get your Premium style</p>

<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$querya="select * from products where type='premium'";
$resulta=mysqli_query($con,$querya);
?>

		<div class="container"> 

			<div class="row">
			<?php
				$count=0;
				while($rows=mysqli_fetch_assoc($resulta))
				{ 
			?>	<div class="col-sm-3 col-lg-3 col-md-3 col-xs-3">
				
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
				  
				    <input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					
				</div>
				</form>
				<br>
				</div>


					<?php
					$count++;
					if($count==4){break;}
				}	
				?>
				</div>
			</div>




<br>
<p class="whitesec head2"><a href="premium.php">View all premium products </a></p>

<br>
<p class="head" style="font-family: 'Goldman', cursive;"> Bring out the gamer in you</p>
<a href="gaming.php"><img src="home/hpgaming.jpg" class="img-fluid"></a>


<br>
<br><p class="head" style="font-family: 'Dancing Script', cursive;">Go trendy with these cool accessories</p>

<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$querya="select * from products where category='accessory'";
$resulta=mysqli_query($con,$querya);
?>

		<div class="container"> 

			<div class="row">
			<?php
				$count=0;
				while($rows=mysqli_fetch_assoc($resulta))
				{ 
			?>	<div class="col-sm-2 col-lg-2 col-md-2 col-xs-3">
				
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
				  
				    <input type="hidden" name="pid" value="<?php echo $rows['pid']?>">
					
				</div>
				</form>
				<br>
				</div>


					<?php
					$count++;
					if($count==6){break;}
				}	
				?>
				</div>
			</div>




<br>
<p class="whitesec head2 viewlink"><a href="accessories.php">View all accessories</a></p>

<br>



        <div class="col-sm-12" style="background-color: #172647 ; color: white">
            <p style="text-align: center; color: #CED0D5;" >
              
              <br>For any queries kindly contact
            	<br>&#9743; 9717910332 <br>&#x2709;lapstorequery@gmail.com
            </ul>
              <br> Connect with us<br>
              <a href="#"> <img src="home/fblogo.png" style="width: 4vh;"></a>
              <a href="#"> <img src="home/instalogo.png" style="width: 5vh;"></a>
              <a href="#"> <img src="home/linkedinlogo.png" style="width:4.5vh;"></a>
              <br>
              <br>
              &copy 2020 designed by Ekamjit Singh. Copyrights Reserved.
              <br>
            </p>
            <br>
        </div>

</div> 


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>