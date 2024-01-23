<?php

session_start();

$con = mysqli_connect('localhost','root');
$userid = $_SESSION['userid'];
mysqli_select_db($con, 'project');

$total=$_POST['total'];

$query="select * from users where uid = '$userid'";
$result=mysqli_query($con,$query);

$cartquery="select * from cart where uid = '$userid'";
$cresult=mysqli_query($con,$cartquery);

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

	<section style="background: #270949;  padding: 2vh;" class="toplinks" >

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
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="brandmain.php">Search all brands</a>
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

<center><h2 class="mhead">Checkout </h2>

<form action="registerorder.php" method="post">		
<!-- form sends address orderid and number of orders-->
</center>
<BR><BR><center>
<section class="whitesec" style="font-family: montserrat;">
<h2>Contact Details</h2><hr>

				<?php
				while($rows=mysqli_fetch_assoc($result))
				{
					$nod=$rows['nod'];
					$nod=$nod+1;
					$oid="OD$nod";
				?>
	

					Name : <?php echo $rows['uname'];?><br>
					Email : <?php echo $rows['email'];?><br>
					Phone number : <?php echo $rows['phno'];?><br><br>
					Address : <input type="text" name="addr" value="<?php echo $rows['addr']?>" style="width: 30vw;"><br>
					<br>(Please update if required)
				<?php
				 }	?>

<br>
</section>

<br><h3>Order ID : <?php echo $oid?></h3>

<br><h4>Order Summary</h4><hr><br>
</center>
<div class="container">
			

			<?php
				while($rows=mysqli_fetch_assoc($cresult))
				{
			?>	

			<div class="row">
			<div class="col-sm-3">
				<center>
				 <img src="<?php echo $rows['pimage'];?>" class="card-img-top img-fluid" alt="image" >
				</center>
			</div>
			<div class="col-sm-9">
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

				</div>	
			</div>
			</div>
			<br>

				
					<?php
				}	
				?>
	</div>

<center>
<h3 class="mhead">Amount to be paid : &#x20B9; <?php echo $total;?>/-


<br><h3><br>Select a payment option</h3>

Kindly select a Bank for payment transfer via net banking to
<br> Account number: 5010033xxxx413<br>IFSC: HDFC0000287<br>
Once the payment has been made, kindly return to this page for finalising the order
<br><br>

</center>
<div class="mhead">
<ul>
	<li><a href="https://netbanking.hdfcbank.com/netbanking/?_ga=2.87238237.450370577.1606049217-790045496.1606049217" target="_blank" >HDFC</a></li>
	<li><a href="https://www.onlinesbi.com/personal/neft_rtgs_faq.html"  target="_blank" >State Bank Of India (SBI)</a></li>
	<li><a href="https://www.axisbank.com/bank-smart/internet-banking/transfer-funds/neft" target="_blank">Axis Bank</a></li>
	<li><a href="https://www.pnbindia.in/faq-neft.html" target="_blank">Punjab National Bank</a></li>
	<li><a href="https://www.icicibank.com/html/en/Personal-Banking/onlineservice/online-services/FundsTransfer/neft.html?ITM=nli_cms_IB_NEFT_transfer_menu_navigation" target="_blank">ICICI bank</a></li>
	<li><a href="https://moneyclick.karnatakabank.co.in/BankAwayRetail/AuthenticationController?__START_TRAN_FLAG__=Y&FORMSGROUP_ID__=AuthenticationFG&__EVENT_ID__=LOAD&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=KBL&LANGUAGE_ID=001&USR_TYPE=1" target="_blank">Karnataka Bank</a></li>


</ul>
</div>
<center>

	<input type="hidden" name="nod" value="<?php echo $nod?>">
	<input type="hidden" name="oid" value="<?php echo $oid?>"><br>
	<input type="submit" name="submit" value="Confirm Order"><br>
	
	<br><h4>Please Note</h4> In case there is any discrepancy in recieving the payment of this order according to the said amount, the order would be automatically cancelled within three days of placement and you will be notified by an order cancellation mail on the registered email ID.<br> 
	</p>
	<br><br>

</form>

</center>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


			

</body>
</html>