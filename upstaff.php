<?php
include_once 'db.php';


$username=$_POST['uid'];
$password=$_POST['pid'];

$t=$_POST['uid'];
$r=$_POST['pid'];

$res=mysqli_query($conn,"UPDATE details_user SET password='$r' WHERE username='$t'");

if($res)
{
	echo "<script type='text/javascript'>alert('Password Changed..!!');</script>";
	include "updatestaff.php";
}



?>