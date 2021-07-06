<html>
<head>
<title>PRINCIPAL</title>
</head>
<body>

<?php
if(isset($_POST['btnsubmit']))
{
	$n=$_POST['principalname'];
	if(empty($n))
	{
		echo "<script> 
	               alert  ('Input all the Fields');
	              </script>";
	}
	
	else
	{
		include('connection.php');
		$sql="insert into principal  values(null,'$n')";
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

<center>
<table>
<form id="form1" name="form1" method="POST" action="">
<tr>
<td>PRINCIPAL NAME</td>
<td>:</td>
<td></td>
<td><input type="text" name="principalname"  id="principalname" value=""/></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><input type="submit" name="btnsubmit" id="btnsubmit" value="SUBMIT"/>
    <input type="reset" name="btnreset" id="btnreset" value="RESET"/></td>
<td></td>
</tr>
</form>
</table>
</center>
</body>
</html>