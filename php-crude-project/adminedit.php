<html>
<head>
<title></title>
<body>
<form id="form1" name="form1" method="POST" action="">
	<?php
	error_reporting(0);
		include('connection.php');
		$id=$_REQUEST['id'];
		$sql="select * from login where id='$id'";
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
					<td>username:</td>
					<td><input type="text" name="username" id="" value="<?php echo $line['username'];?>"</td>
				</tr>


				<tr>
					<td>password:</td>
					<td><input type="password" name="password" id="" value="<?php echo $line['password'];?>"</td>
				</tr>

				<tr>
					<td>confirmpassword:</td>
					<td><input type="gender" name="confirmpassword" id="" value="<?php echo $line['confirmpassword'];?>"</td>
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
									
								$username=$_POST['username'];
								$password=$_POST['password'];
								$confirmpassword=$_POST['confirmpassword'];


							if (empty($username) ||  empty($password) ||  empty($confirmpassword))
								{
									echo " ";
								}
							else
								{
									$id=$_REQUEST['id'];
									$sql="update login set username='$username',password='$password',confirmpassword='$confirmpassword' where id='$id'";


							if (mysqli_query($conn,$sql))
								{
									echo "record inserted";
									header("location:adminmanage.php");
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