<?php
if(isset($_POST['Login']))
{
session_start();
include_once 'db.php';

/*$serial_number=$_POST['usno'];
$product_number=$_POST['uprono'];
$product_name=$_POST['uproname'];
$quantity=$_POST['uquantity'];
$rate=$_POST['urate'];*/

$o=trim($_POST['uprono']);
$s=trim($_POST['uquantity']);
$t=trim($_POST['uproname']);
$r=trim($_POST['urate']);


/*$x="select * from enter_stock";*/

$x = mysqli_query($conn,"SELECT * FROM enter_stock WHERE product_number='$o'");
if(empty($o))
{
	echo "<script type='text/javascript'>alert('Please Fill all the details..!!');</script>";
	include "updatestockadmin.php";
}

elseif(mysqli_num_rows($x)!=0)
{
	mysqli_query($conn,"UPDATE enter_stock SET product_name='$t',quantity=quantity+'$s',rate='$r' WHERE product_number='$o'");
	echo "<script type=''text/javascript'>alert('Stock Updated..!!');</script>";
	include "updatestockadmin.php";
}
else
{
	echo "<script type='text/javascript'>alert('Unable to Update Stock...Please fill the Product Number correctly..!!');</script>";
	include "updatestockadmin.php";
}

$conn->close();
}



?>
