<?php

$z=mysqli_query($conn,"SELECT quantity from enter_stock where quantity<=2");
if(mysqli_num_rows($z)!=0)
{
	echo "<script type='text/javascript'>alert('Please Check the Available Stock and Update it..!!!');</script>";
	include "content_admin.php";
}
else
{
	include "content_admin.php";
}
?>