<?php
include_once 'db.php';

$username=$_POST['u'];
$password=$_POST['p'];
$admin_name=$_POST['adn'];
$address=$_POST['add'];
$phone_number=$_POST['adph'];
$d=$_POST['u'];
$a=$_POST['p'];
$b=$_POST['adn'];
$c=$_POST['add'];
$e=$_POST['adph'];


//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
$c = mysqli_query($conn,"SELECT * FROM details WHERE username='$d'");

if (mysqli_num_rows($c)!=0) 
{
	echo "<script type='text/javascript'>alert('Username already exists..!!');</script>";
	include "registeradmin.php";	
}
elseif(empty($d&&$a&&$b&&$c&&$e))
{

	echo "<script type='text/javascript'>alert('Not Registered Sucessfully..Please Fill all the Details..!!');</script>";
	include "registeradmin.php";
}
else
{

	mysqli_query($conn,"INSERT into details values('$username','$password','$admin_name','$address','$phone_number')");
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}	

/*($res)
{
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}*/



?>