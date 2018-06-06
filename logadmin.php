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
		
	
	echo "<script type='text/javascript'>alert('Welcome $a - Admin..!!');</script>";
	include "stockcheckadmin.php";
}
elseif(empty($a&&$b))
{
	if(empty($a) AND !empty($b))
	{
		echo "<script type='text/javascript'>alert('Enter the Username..!!!');</script>";
		include "admin.php";
	}
	elseif(empty($b) AND !empty($a))
	{
		echo "<script type='text/javascript'>alert('Enter the Password..!!!');</script>";
		include "admin.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Enter the Username and Password..!!!');</script>";
		include "admin.php";
	}
}
else
{	
	$r=mysqli_query($conn,"SELECT * FROM details WHERE username='$a'");
	$t=mysqli_query($conn,"SELECT * FROM details WHERE password='$b'");

	if(mysqli_num_rows($r)==0 AND mysqli_num_rows($t)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Username..!!!');</script>";
		include "admin.php";
	}
	elseif(mysqli_num_rows($t)==0 AND mysqli_num_rows($r)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Password..!!!');</script>";
		include "admin.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong Username and Password..!!!');</script>";
		include "admin.php";
	}
}
$conn->close();
}

?> 
<body>
</body>
</html>