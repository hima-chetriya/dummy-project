<html>
<head>
<title></title>
<body>
<form id="form1" name="form1" method="POST" action="">
	<?php
	error_reporting(0);
		include('connection.php');
		$id=$_REQUEST['id'];
		$sql="select * from principal where id='$id'";
		$result=mysqli_query($conn,$sql);
		while($line=mysqli_fetch_array($result))
		{
					?>
				<tr>
					<td>id:</td>
					<td>
					<p>
					<?php
					echo $line['id'];
					?>
					</p>
					</td>
				</tr>
				<tr>
					<td>principalname:</td>
					<td><input type="text" name="principalname" id="" value="<?php echo $line['principalname'];?>"</td>
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
									
								$principalname=$_POST['principalname'];
						

							if (empty($principalname))
								{
									echo " ";
								}
							else
								{
									$id=$_REQUEST['id'];
									$sql="update principal set principalname='$principalname' where id='$id'";


							if (mysqli_query($conn,$sql))
								{
									echo "record inserted";
									header("location:principalmanage.php");
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