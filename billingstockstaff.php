<?php
include_once 'db.php';

$customer_name=$_POST['c'];
$product_name=$_POST['prodname'];
$quantity=$_POST['quan'];
$n=$_POST['quan'];
$p=$_POST['prodname'];
$pp=$_POST['c'];


$x=mysqli_query($conn,"SELECT * FROM enter_stock where product_name='$p' AND quantity>=$n");
//$h="select quantity from enter_stock where quantity>'$n'";

if(empty($n&&$p&$pp))
{
	echo "<script type='text/javascript'>alert('Bill not Generated..Fill the details correctly..!!');</script>";
	include "billingstaff.php";
}
elseif(mysqli_num_rows($x)!=0)
{
	mysqli_query($conn,"UPDATE enter_stock SET quantity=quantity-$n WHERE product_name='$p'");
	mysqli_query($conn,"INSERT INTO bill values('$customer_name','$product_name','$quantity',NOW())");
	echo "<script type='text/javascript'>alert('Bill Generated..!!');</script>";
	include "billingstaff.php";
}
else
{
	echo "<script type='text/javascript'>alert('Stock is Less..!!');</script>";
	include "billingstaff.php";
}



//if($_POST['quan']==2);
//{

//	$res=mysqli_query($conn,"UPDATE enter_stock SET quantity=quan-2 WHERE product_name='prodname'");
//}

/*	if($res)
{
	echo "<script type='text/javascript'>alert('Bill Generated..!!');</script>";
	include "billingadmin.php";
}
else{

	echo "<script type='text/javascript'>alert('Enter the details Correctly..!!');</script>";
	include "billingadmin.php";
}*/


		//values('$serial_number','$product_number','$product_name','$quantity','$rate')");



//$res=mysqli_query($conn,"INSERT into enter_stock values('$serial_number','$product_number','$product_name','$quantity','$rate')");

//if($res)
//{
//	echo "inserted";
//}



?>