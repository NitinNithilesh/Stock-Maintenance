<?php
include_once 'db.php';

$staff_number=$_POST['sn'];
$username=$_POST['u'];
$password=$_POST['p'];
$staff_name=$_POST['n'];
$address=$_POST['a'];
$phone_number=$_POST['phno'];
$d=$_POST['u'];


//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
$c = mysqli_query($conn,"SELECT * FROM details_user WHERE username='$d'");
$e = strlen((string)$phone_number);
$r = strlen((string)$password);

if (mysqli_num_rows($c)!=0)
{
	echo "<script type='text/javascript'>alert('Username already exists..!!');</script>";
	include "registerstaff.php";
}elseif(empty($d)){

	echo "<script type='text/javascript'>alert('Not Registered Sucessfully..Please Fill all the Details..!!');</script>";
	include "registerstaff.php";
}
else{
	if($e!=10)
	{
		if($r<5)
		{
			echo "<script type='text/javascript'>alert('Please enter a valid Mobile Number..!!');</script>";
			echo "<script type='text/javascript'>alert('Password must be more than 4 characters..!!');</script>";
			include "registerstaff.php";
		}
		else {
			echo "<script type='text/javascript'>alert('Please enter a valid Mobile Number..!!');</script>";
			include "registerstaff.php";
		}

	}

	else {


	mysqli_query($conn,"INSERT into details_user values('$staff_number','$username','$password','$staff_name','$address','$phone_number')");
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registerstaff.php";
	}
}
/*($res)
{
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}*/



?>
