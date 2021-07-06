<html>
<head>

<title>STATE</title>

<?php
include('connection.php');
if(isset($_POST['btnsubmit']))
{
$countryname=trim($_POST['countryname']); 

if(empty($countryname))
{
	echo "<center><p style=\"color:Red\" >Please Enter State name</p><center>";
}
else
{		$sql="insert into country values(NULL,'$countryname');";
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
<h1>Create Country</h1>
<form id="form1" name="form1" method="POST"  action="">
<table>
</tr>
<tr><td>ContryName:</td><td><input type="text" name="countryname" value="" /></td></tr>
<tr><td></td><td><input type="submit" name="btnsubmit" value="submit" /> 
<input type="reset" name="reset" value="reset">
</td>
</tr>
</table>


</center>
</form>
</body>

</html>