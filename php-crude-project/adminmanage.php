<?php
include('connection.php');

echo "<table>";

echo "<tr> 
	  <th> ID</th>
	  <th>USERNAME</th>
	  <th>PASSWORD</th>
	  <th>CONFIRMPASSWORD</th>
	  <th>EDIT</th>
	  <th>DELETE</th>
	</tr>";
$sql="select * from login";
$result=mysqli_query($conn,$sql);
while($line=mysqli_fetch_array($result))
{
echo "<tr>";
$id=$line['id'];

echo "<td>";
echo $line['id'];
echo "</td>";

echo "<td>";
echo $line['username'];
echo "</td>";

echo "<td>";
echo $line['password'];
echo "</td>";

echo "<td>";
echo $line['confirmpassword'];
echo "</td>";


echo "<td>";
echo "<a href=\"adminedit.php?id=$id\">
Edit </a>";
echo "</td>";


echo "<td>";
echo "<a href=\"admindelete.php?id=$id\">
Delete</a>";
echo"</td>";

}
echo "</table>";
?>
































	




