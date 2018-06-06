<?php
include_once 'db.php';


$a=$_POST['u'];
$b=$_POST['op'];
$c=$_POST['np'];



//$res=mysqli_query($conn,"INSERT into details values('$username','$password')");
//$d = mysqli_query($conn,"SELECT * FROM details WHERE username='$a'");
$x=mysqli_query($conn,"SELECT * FROM details_user WHERE username='$a' AND password='$b'");
if(empty($a&&$b&&$c)) 
{
	
	echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
	include "changepassstaff.php";
	
}
elseif(mysqli_num_rows($x)!=0)
{
	mysqli_query($conn,"UPDATE details_user SET password='$c' WHERE username='$a'");
	echo "<script type='text/javascript'>alert('Password Changed..!!');</script>";
	include "changepassstaff.php";
		
}
else{
	echo "<script type='text/javascript'>alert('Password not Changed...Old Password Does Not Match...!!');</script>";
	include "changepassstaff.php";	
}	

/*($res)
{
	echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
	include "registeradmin.php";
}*/



?>