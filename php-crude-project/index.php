<head>
<title>
</title>
</head>
<body>
<div>
<span style="float:left">
<img src="logo.png" height="125px"  width="200px" />
</span>
<span>
<h1 style="height:125px;padding:30px;">My Website</h1>
</span>
</div>
<div>
<a href="index.php">HOME </a> <a href="manage9.php">MANAGE</a> <a href="show9.php">SHOW</a>
</div>
<div>
<h1>Home Page</h1>
<?php
session_start();
if(empty($_SESSION['admin']))
{
	header("location:login.php");
	
}
else
{
	$s=$_SESSION['admin'];
	echo "<b>welcome,$s";
	echo "<a href=\"logout.php\">LOGOUT</a>";
}
?>
</body>
</html>