<html>
<head>
<title>SELECT</title>
</head>
<body>
<center>
<table>
<form id="form1" name="form1" method="POST" action="">
<?php
      include('connection.php');
	  echo "<table>";
	   echo "<tr>
	   <th>countryid</th>
	   <th>countryname</th>
	   <th>EDIT</th>
	   <th>DELETE</th>
	   
	   </tr>";
			 
			 $sql="select * from  country";
			 $result=mysqli_query($conn,$sql);
			 
			 while($line=mysqli_fetch_array($result))
			 {
				 
	 
	 echo "<tr>";
	 
				 echo "<td>";
				 echo $line['country_id'];
				 echo "</td>";
				 
				
				 echo "<td>";
				 echo $line['countryname'];
				 echo "</td>";
				 
				 $country_id=$line['country_id'];
	 echo "<td>";
	 echo "<a href=\"countryedit.php?country_id=$country_id\">Edit</a>";
	 echo "</td>";
	 
	 echo "<td>";
	 echo "<a href=\"countrydelete.php?country_id=$country_id\">Delete</a>";
	 echo "</td>";
				 
				
				 
				 echo "</tr>";
				 
				 }
			 echo "<table>";
			 ?>
			 </form>
			 </table>
			 </center>
			 </body>
			 </html>
			 
    