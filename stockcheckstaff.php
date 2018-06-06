<?php

$z=mysqli_query($conn,"SELECT quantity from enter_stock where quantity<=2");
if(mysqli_num_rows($z)!=0)
{
	echo "<script type='text/javascript'>alert('Please Update the stock!!!');</script>";
	include "content_staff.php";
}
else
{
	include "content_staff.php";
}
?>
