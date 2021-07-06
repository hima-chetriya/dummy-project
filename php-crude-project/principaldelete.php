
<?php
ob_start();
?>
  
	<?php
	 include('connection.php');
	 $id=$_REQUEST['id'];
	 
	 $sql="delete from principal where id='$id'";
	 if(mysqli_query($conn,$sql))
	 {
		 header("location: principalmanage.php");
	 }
	 
	 
	 ?>

