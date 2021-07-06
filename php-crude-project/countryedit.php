<html>
<head>
<title></title>
<body>
<form id="form1" name="form1" method="POST" action="">
	<?php
	error_reporting(0);
		include('connection.php');
		$country_id=$_REQUEST['country_id'];
		$sql="select * from country where country_id='$country_id'";
		$result=mysqli_query($conn,$sql);
		while($line=mysqli_fetch_array($result))
		{
					?>
				<tr>
					<td>id:</td>
					<td>
					<p>
					<?php
					echo $line['country_id'];
					?>
					</p>
					</td>
				</tr>
				<tr>
					<td>countryname:</td>
					<td><input type="text" name="countryname" id="" value="<?php echo $line['countryname'];?>"</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btnsubmit" id="btnsubmit" value="update"/></td>
				</tr>
						<?php
						   }
						?>
						</form>
						<?php
							if (isset($_POST['btnsubmit']))
									
								$countryname=$_POST['countryname'];
						

							if (empty($countryname))
								{
									echo " ";
								}
							else
								{
									$country_id=$_REQUEST['country_id'];
									$sql="update country set countryname='$countryname' where country_id='$country_id'";


							if (mysqli_query($conn,$sql))
								{
									echo "record inserted";
									header("location:countrymanage.php");
								}
							else
								{
									echo "error";
								}

						}
				?>

</body>
</head>
</html>