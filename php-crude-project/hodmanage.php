<?php
include('connection.php');

echo "<table>";
echo "<tr> 
	  <th> ID</th>
	  <th>HOD NAME</th>
	  <th>EDIT</th>
	  <th>DELETE</th>
	 </tr>";
$sql="select * from hod";
$result=mysqli_query($conn,$sql);
while($line=mysqli_fetch_array($result))
{
echo "<tr>";
$id=$line['id'];

echo "<td>";
echo $line['id'];
echo "</td>";

echo "<td>";
echo $line['hodname'];
echo "</td>";

echo "<td>";
echo "<button><a href=\"hodedit.php?id=$id\">Edit </a></button>";
echo "</td>";


echo "<td>";
echo "<button><a href=\"hoddelete.php?id=$id\">Delete</a></button>";
echo"</td>";

}
echo "</table>";
?>
































	




