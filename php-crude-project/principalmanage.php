<?php
include('connection.php');

echo "<table>";

echo "<tr> 
     
	  <th> ID</th>
	  <th>principalname</th>
	  <th>EDIT</th>
	  <th>DELETE</th>
	</tr>";
$sql="select * from principal";
$result=mysqli_query($conn,$sql);
while($line=mysqli_fetch_array($result))
{
echo "<tr>";
$id=$line['id'];

echo "<td>";
echo $line['id'];
echo "</td>";

echo "<td>";
echo $line['principalname'];
echo "</td>";

echo "<td>";
echo "<a href=\"principaledit.php?id=$id\">
Edit </a>";
echo "</td>";


echo "<td>";
echo "<button>s<a href=\"principaldelete.php?id=$id\">Delete</a></button>";
echo"</td>";

}
echo "</table>";
?>
































	




