<?php
if(isset($_POST['Login']))
{
session_start();
include_once 'db.php';

$product_category=$_POST['sno'];
$product_number=$_POST['prono'];
$product_name=$_POST['proname'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];

$a=$_POST['sno'];
$c=$_POST['prono'];
$d=$_POST['proname'];
$e=$_POST['quantity'];
$f=$_POST['rate'];

$r = mysqli_query($conn,"SELECT product_name,product_number FROM enter_stock WHERE product_number='$c' AND product_name='$d'");
$n = mysqli_query($conn,"SELECT product_number FROM enter_stock WHERE product_number='$c'");
$p = mysqli_query($conn,"SELECT product_name FROM enter_stock WHERE product_name='$d'");

/*if(empty($a&&$c&&$d&&$e&&$f))
{
	echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
		include "enterstockadmin.php";
}
elseif(mysqli_num_rows($n)!=0)
{
	echo "<script type='text/javascript'>alert('Product already exists..!!');</script>";
		include "enterstockadmin.php";
}
else
{
	$r=mysqli_query($conn,"INSERT into enter_stock values('$product_category','$product_number','$product_name','$quantity','$rate')");
	echo "<script type='text/javascript'>alert('Stock Added..!!');</script>";
	include "enterstockadmin.php";
}
*/
if(!empty($a&&$c&&$d))
{
	if(mysqli_num_rows($n)!=0)
	{
		if(mysqli_num_rows($n)!=0 AND mysqli_num_rows($p)!=0)
		{
			echo "<script type='text/javascript'>alert('Product already exists..!!');</script>";
			include "enterstockadmin.php";
		}
		elseif(mysqli_num_rows($p)!=0)
		{
			echo "<script type='text/javascript'>alert('Check the Product Name...Product Name exists..!!');</script>";
			include "enterstockadmin.php";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Check the Product Number...Product Number exists..!!');</script>";
			include "enterstockadmin.php";
		}
	}
	elseif(mysqli_num_rows($p)!=0)
	{
		if(mysqli_num_rows($p)!=0 AND mysqli_num_rows($n)!=0)
		{
			echo "<script type='text/javascript'>alert('Product already exists..!!');</script>";
			include "enterstockadmin.php";
		}
		elseif(mysqli_num_rows($n)!=0)
		{
			echo "<script type='text/javascript'>alert('Check the Product Number...Product Number exists..!!');</script>";
			include "enterstockadmin.php";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Check the Product Name...Product Name exists..!!');</script>";
			include "enterstockadmin.php";
		}
		/*echo "<script type='text/javascript'>alert('Check the Product Name...Product Name exists..!!');</script>";
		include "enterstockadmin.php";*/
	}
	else
	{
		goto label;
	}
	/*else
	{
	$r=mysqli_query($conn,"INSERT into enter_stock values('$product_category','$product_number','$product_name','$quantity','$rate')");
	echo "<script type='text/javascript'>alert('Stock Added..!!');</script>";
	include "enterstockadmin.php";
	}
	*/
}
elseif(empty($a&&$c&&$d))
{

	if(empty($a))
	{
		if(empty($c))
		{
			if(empty($d))
			{
				echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
				include "enterstockadmin.php";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Enter the Product Category and Product Number..!!');</script>";
				include "enterstockadmin.php";
			}

		/*echo "<script type='text/javascript'>alert('Enter the Product Category and Product Number..!!');</script>";
		include "enterstockadmin.php";*/
		}
		elseif(empty($d))
		{
			echo "<script type='text/javascript'>alert('Enter the Product Category and Product Name..!!');</script>";
			include "enterstockadmin.php";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Enter the Product Category..!!');</script>";
			include "enterstockadmin.php";
		}
	}
	elseif(empty($c))
	{

		if(empty($a))
		{
			if(empty($d))
			{
				echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
				include "enterstockadmin.php";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Enter the Product Category and Product Number..!!');</script>";
				include "enterstockadmin.php";
			}
		/*echo "<script type='text/javascript'>alert('Enter the Product Category and Product Number..!!');</script>";
		include "enterstockadmin.php";
		}*/
		}
		elseif(empty($d))
		{
			echo "<script type='text/javascript'>alert('Enter the Product Number and Product Name..!!');</script>";
			include "enterstockadmin.php";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Enter the Product Number..!!');</script>";
			include "enterstockadmin.php";
		}
	}
	else
	{
		if(empty($a))
		{
			if(empty($c))
			{
				echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
				include "enterstockadmin.php";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Enter the Product Category and Product Name..!!');</script>";
				include "enterstockadmin.php";
			}
		/*echo "<script type='text/javascript'>alert('Enter the Product Category and Product Name..!!');</script>";
		include "enterstockadmin.php";*/
		}
		elseif(empty($c))
		{
			echo "<script type='text/javascript'>alert('Enter the Product Number and Product Name..!!');</script>";
			include "enterstockadmin.php";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Enter the Product Name..!!');</script>";
			include "enterstockadmin.php";
		}

	}
}
else
{
	label:$r=mysqli_query($conn,"INSERT into enter_stock values('$product_category','$product_number','$product_name','$quantity','$rate')");
	echo "<script type='text/javascript'>alert('Stock Added..!!');</script>";
	include "enterstockadmin.php";
}

/*elseif(empty($a&&$c&&$d))
{

	echo "<script type='text/javascript'>alert('Enter all the Details..!!');</script>";
	include "enterstockadmin.php";

}
elseif
{
	$r=mysqli_query($conn,"INSERT into enter_stock values('$product_category','$product_number','$product_name','$quantity','$rate')");
	echo "<script type='text/javascript'>alert('Stock Added..!!');</script>";
	include "enterstockadmin.php";
}


}
else
{
      session_destroy();
  }

*/
}
?>
