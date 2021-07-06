<html>
<head>
<title></title>
<body>
<form id="form1" name="form1" method="POST" action="">
	<?php
			error_reporting(0);
			include('connection.php');
			$id=$_REQUEST['id'];
			$sql="select * from hod where id='$id'";
			$result=mysqli_query($conn,$sql);
			while($line=mysqli_fetch_array($result))
		{
	?>
				<tr>
					<td>id:</td>
					<td><p><?php echo $line['id'];?></p></td>
				</tr>
				<tr>
					<td>username:</td>
					<td><input type="text" name="hodname" id="" value="<?php echo $line['username'];?>"</td>
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
									
								$hodname=$_POST['hodname'];
						

							if (empty($hodname))
								{
									echo " ";
								}
							else
								{
									$id=$_REQUEST['id'];
									$sql="update hod set hodname='$hodname' where id='$id'";


							if (mysqli_query($conn,$sql))
								{
									echo "record inserted";
									header("location:hodmanage.php");
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