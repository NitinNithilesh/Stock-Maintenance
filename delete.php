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
$a=trim($_POST['pc']);
$o=trim($_POST['pn']);
$s=trim($_POST['pna']);



/*$x="select * from enter_stock";*/

$x="SELECT * from enter_stock where product_number='$o'";
$y=$conn->query($x);
if(empty($a&&$o&&$s))
{
	echo "<script type='text/javascript'>alert('Please Fill all the details...!');</script>";
	include "deletestockadmin.php";
}
elseif($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["pn"] = $row["product_number"];


	mysqli_query($conn,"DELETE FROM enter_stock WHERE product_number='$o'");
	echo "<script type='text/javascript'>alert('Item Deleted..!!');</script>";
	include "deletestockadmin.php";
}
else
{
	echo "<script type='text/javascript'>alert('Unable to Delete item...!');</script>";
	include "deletestockadmin.php";
}


}



?>
