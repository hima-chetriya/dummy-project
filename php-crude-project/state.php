<html>
<head>

<title>STATE</title>

<?php
include('connection.php');
if(isset($_POST['btnsubmit']))
{
$statename=trim($_POST['statename']); 
$country_id= $_POST['country_id'];

if(empty($statename))
{
	echo "<center><p style=\"color:Red\" >Please Enter State name</p><center>";
}
else
{		$sql="insert into state values(NULL,'$statename',$country_id');";
		if(mysqli_query($conn,$sql))
			{
				echo "<center><p style=\"background-color:#000;width:450px;color:#fdd000\" >Statename is successfully inserted !!!</p><center>";
			}
			else
			{
				echo "error".mysqli_error();
			}
}			
}
?>
</head>
<body>
<center>
<h1>Create State</h1>
<form id="form1" name="form1" method="POST"  action="">
<table>
</tr>
<tr><td>StateName</td><td><input type="text" name="statename" value="" /></td></tr>
<tr><td>country_id</td><td><input type="text" name="country_id" value="" /></td></tr>

<tr><td></td><td><input type="submit" name="btnsubmit" value="submit" /> 
<input type="reset" name="reset" value="reset">
</td>
</tr>
</table>


</center>
</form>
</body>

</html>