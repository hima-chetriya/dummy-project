
<?php
ob_start();
?>
<?php
	 include('connection.php');
	 $id=$_REQUEST['id'];
	 
	 $sql="delete from hod where id='$id'";
	 if(mysqli_query($conn,$sql))
	 {
		 header("location: hodmanage.php");
	 } 
	 
?>
