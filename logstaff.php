<html>
<head>
</head>
<?php
if(isset($_POST['Login']))
{
session_start();
include_once "db.php";

$a=trim($_POST["uidu"]);
$b=trim($_POST["pidu"]);
$x="select * from details_user where username='$a' and BINARY password='$b'";

$y=$conn->query($x);
if($y->num_rows>0)
{

	$row = $y->fetch_assoc();
	$_SESSION["uidu"] = $row["username"];
	$_SESSION["pidu"]=  $row["password"];
		
	
	echo "<script type='text/javascript'>alert('Welcome $a - User..!!');</script>";
	include "content_staff.php";
}
elseif(empty($a&&$b))
{
	if(empty($a) AND !empty($b))
	{
		echo "<script type='text/javascript'>alert('Enter the Username..!!!');</script>";
		include "staff.php";
	}
	elseif(empty($b) AND !empty($a))
	{
		echo "<script type='text/javascript'>alert('Enter the Password..!!!');</script>";
		include "staff.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Enter the Username and Password..!!!');</script>";
		include "staff.php";
	}
}
else
{	
	$r=mysqli_query($conn,"SELECT * FROM details WHERE username='$a'");
	$t=mysqli_query($conn,"SELECT * FROM details WHERE password='$b'");

	if(mysqli_num_rows($r)==0 AND mysqli_num_rows($t)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Username..!!!');</script>";
		include "staff.php";
	}
	elseif(mysqli_num_rows($t)==0 AND mysqli_num_rows($r)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Password..!!!');</script>";
		include "staff.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong Username and Password..!!!');</script>";
		include "staff.php";
	}
}
$conn->close();
}

?> 
<body>
</body>
</html>