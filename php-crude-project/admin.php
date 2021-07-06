<html>
<head>
<style>
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
<body>
<center>
<h1 class="heading">LOGIN FORM </h1>

<form id="form1" name="form1" method="POST" enctype="multipart/form-data" >
<table>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td><input type="text" class="box" name="username" id="" value="username"/></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td><input type="password" class="box" name="password" id="" value="password"/></td>
	<td></td>
</tr>
<tr>
	<td class="cc"></td>
	<td></td>
	<td></td>
	<td><input type="password" class="box" name="confirmpassword" id="" value="confirmpassword"/>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td> <input type="submit" class="b1" id="btnsubmit" name="btnsubmit" class="btn crose-btn" value="LOGIN" />
	</td>
</tr>
</table>
</form>
<?php
include('connection.php');
if (isset($_POST['btnsubmit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	  if (empty($username) ||  empty($password)  || empty($confirmpassword))
		  {
			echo "<script> 
	               alert  ('Input all the Fields');
	              </script>";
		  }
	else if(strcmp($password,$confirmpassword)!=0)
		 {
			 echo "<script> 
	                alert  ('password does not match');
	               </script>";
		 }
			else
			{
				$sql="INSERT INTO login VALUES ('', '$username', '$password', '$confirmpassword')";
					
					if(mysqli_query($conn,$sql))
						{
							echo "<script> 
			                alert  ('Login Succsessfully');
			               </script>";
											}
								else
								{
									echo"Error";
								}		
								
			
						}
			}
?>
</center>
</body>
</head>
</html>