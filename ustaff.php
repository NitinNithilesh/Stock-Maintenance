<html>
<head>
</head>
<?php
if(isset($_POST['Login']))
{
session_start();
include_once "db.php";

$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$x="select * from details where username='$a' and BINARY password='$b'";
$y=$conn->query($x);
if($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] = $row["username"];
	$_SESSION["pwd"]=$row["password"];
		
	
	echo "<script type='text/javascript'>alert('Welcome Admin..!!');</script>";
	include "updatestaff.php";
}
else
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] != $row["username"];
	echo "<script type='text/javascript'>alert('Please Register to Continue!!!');</script>";
	include "updatestaff.php";
}/* else
{

	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "admin.php";
}
$conn->close();*/
}

?> 
<body>
</body>
</html>