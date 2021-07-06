<html>
<head>
<title>CITY</title>
</head>
<body>

<?php
if(isset($_POST['btnsubmit']))
{
	$cityname=$_POST['cityname'];
	$stateid=$_POST['stateid'];
	
	if(empty($cityname))
	{
		echo "<p style=\"color:red\">input all the fields</p>";
	}
	
	else
	{
		include('connection.php');
		$sql="insert into city  values(null,'$cityname','$stateid')";
		if(mysqli_query($conn,$sql))
		{
			echo "<p style=\"color:green\">Record inserted</p>";
		}
		else
		{
			echo"error";
		}
	}
}
?>

<center>
<table>
<form id="form1" name="form1" method="POST" action="">
<tr>
<td>CITY NAME</td>
<td>:</td>
<td></td>
<td><input type="text" name="cityname"  id="cityname" value=""/></td>
<td></td>
</tr>
<tr>
<td>Stateid</td>
<td>:</td>
<td></td>
<td>
<select id="stateid" name="stateid">
<option value="0"><----select state---></option>
<?php
include ('connection.php');
$sql="select * from state";
$result=mysqli_query($conn,$sql);
while($line=mysqli_fetch_array($result))
	{
		echo "<option value=\"";
		echo $line['stateid'];
		echo "\">";
		echo $line['statename'];
		echo "</option>";
	}
?>
</select>

</td>
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