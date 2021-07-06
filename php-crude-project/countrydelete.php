
<?php
ob_start();
?>
  
	<?php
	 include('connection.php');
	 $country_id=$_REQUEST['country_id'];
	 
	 $sql="delete from country where country_id='$country_id'";
	 if(mysqli_query($conn,$sql))
	 {
		 header("location: countrymanage.php");
	 }
	 
	 
	 ?>

