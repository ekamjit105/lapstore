<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="logstyle.css">
    <link rel="stylesheet" type="text/css" href="outerstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  
<body style="background-color: #F5EBFD;" >
	<center>
		
	</center>
	<br><br><br><br>
	<div class="container vertical-center col-sm-5 formdiv" align="center" style="background-color:white ">
    	<!--<img src="logos/logomain.jpg" style="width: 60%;">
   	<h4 style="font-family: 'Arapey', serif;"> LOGIN </h4>
   -->

   	<p class="head"><img src="logos/mouse.jpg" width="24" height="35" alt="" loading="lazy">

	  | LapStore.in</p>
    
<hr style="width: 20% background-color:black;">
	<br>
	
	
	<?php 
	if(isset($_SESSION["loginerr"]))
	{echo '<span style="color:red;">'.$_SESSION["loginerr"].'</span>';
	}
	?>
	<form action="validation.php" method="post">
	<br>
	<input type="mail" name="mail" placeholder="  Enter email" required >
	<br><br>
	<input type="password" name="pass" placeholder="  Enter password" required>
	
	<br><br>

	<input type="submit" name="submit" value="LogIn" id="button" class="loginbtn">

	</form>
	
	<span  class="flink"><a href="forgotpw.php" style="text-align: right; font-size: 13px;">forgot password?</a></span>
	<br><br>

	Don't have an account?<span  class="slink"><a href="signup.php"> Sign Up</a></span>



    </div>



	






















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
