<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$query="select * from products";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>

	<title>
		database
	</title>
<body>
		<?php 
	if(isset($_SESSION['pregister']))
	{
		echo '<script>alert("Product successfully added")</script>'; 
		unset($_SESSION['pregister']);
	}?>
		<table align="center" border="1px" style="width: 600px; line-height: 40px;">
			
			<tr>
				<th colspan="9"><h2> List of all products</h2></th>
			</tr>

			<t>
				<th>ID</th>
				<th>Name</th>
				<th>Image</th>
				<th>category</th>
				<th>profession</th>	
				<th>type</th>	
				<th>brand</th>	
				<th>gaming</th>	
				<th>price</th>	
				<th>discount</th>		
			</t>

			<?php
				while($rows=mysqli_fetch_assoc($result))
				{
			?>		<tr>
					<td><?php echo $rows['pid'];?></td>
					<td><?php echo $rows['pname'];?></td>
					<td><?php echo $rows['pimage'];?></td>
					<td><?php echo $rows['category'];?></td>
					<td><?php echo $rows['prof'];?></td>
					<td><?php echo $rows['type'];?></td>
					<td><?php echo $rows['brand'];?></td>
					<td><?php echo $rows['gaming'];?></td>
					<td><?php echo $rows['price'];?></td>
					<td><?php echo $rows['discount'];?></td>
				</tr>
					<?php
				}	
				?>

			
			</table>
			<br><br>
			<center><a href="addprod.php">Add a new product</a></center>


</body>
</html>