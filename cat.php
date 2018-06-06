<?php
if(isset($_POST['Login']))
{
session_start();
include_once 'db.php';


$category=$_POST['c'];


$a=$_POST['c'];


if(empty($a))
{

	echo "<script type='text/javascript'>alert('Enter all the Details..!!');</script>";
	include "category.php";
}
else
{	
	$r=mysqli_query($conn,"INSERT into cat values('$category')");	
	echo "<script type='text/javascript'>alert('Stock Added..!!');</script>";
	include "category.php";
}

}



?>