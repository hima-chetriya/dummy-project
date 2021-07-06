<html>
<head>
<title>PRINCIPAL</title>
<style type="text/css">
	body
	{
	background-color:skyblue;
	}
	.heading
	{
	color:white;
	font-family:algerian;
	}
	.box
	{
		border: 2px solid white;
		border-radius:30px;
		margin-top:25px;
		margin-buttom:25px;
		padding:15px;
	}
	.b1
	{
		border:2px solid green;
		border-radius:25px;
		background-color:green;
		color:white;
		margin-buttom:25px;
		margin-right:30px;
		margin-top:25px;
		padding-buttom:15px;
		padding-top:15px;	
	}
</style>
</head>
<body>
	<center>
		<table>
			<form id="form1" name="form1" method="POST" action="">
				<tr>
					<td>HOD NAME</td>
					<td>:</td>
					<td></td>
					<td><input type="text" class="box" name="hodname"  id="" value=""/></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="submit" class="b1" name="btnsubmit" id="btnsubmit" value="SUBMIT"/>
					<td></td>
				</tr>
			</form>
	</table>
			<?php
				error_reporting(0);
				include('connection.php');
				if(isset($_POST['btnsubmit']))
					{
						$hodname=$_POST['hodname'];
						if(empty($hodname))
							{
								echo "<script> 
							          alert  ('Input all the Fields');
							          </script>";
							}
						else
							{
								$sql="insert into hod  values(null,'$hodname')";
									if(mysqli_query($conn,$sql))
										{
											echo "<script> 
									              alert  ('Record inserted Sucssessfully');
									              </script>";
										}
						else
							{
								echo "<script> 
						               alert  ('Error');
						              </script>";
							}
						}
					}
			?>
</center>
</body>
</html>