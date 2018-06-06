<?php
include_once 'db.php';
?>
<html>
<head>
	<title>Enter Stock</title>
</head>

<link rel="stylesheet" type="text/css" href="design.css">
<nav>
	<ul>
		<li><a href="homeadmin.php">Home</a></li>
		<li><a href="#">Stock</a>
			<ul>
				<li><a href="enterstockadmin.php">Enter Stock</a></li>
				<li><a href="viewstockadmin.php">View Stock</a></li>
				<li><a href="updatestockadmin.php">Update Stock</a></li>
				<li><a href="deletestockadmin.php">Delete Stock</a></li>
			</ul></li>
		<li><a href="#">Billing</a>
			<ul>
				<li><a href="billingadmin.php">Billing</a></li>
				<li><a href="viewbill.php">View Bills</a></li>
			</ul>
		</li>

		<li><a href="#">Register</a>
			<ul>
				<li><a href="registeradmin.php">Admin</a></li>
				<li><a href="registerstaff.php">Staff</a></li>
			</ul></li>

			<li><a href="#">Details</a>
			<ul>
				<li><a href="detailsadmin.php">Admin</a></li>
				<li><a href="detailsstaff.php">Staff</a></li>

			</ul>
			<li><a href="#">Change Password</a>
			<ul>
				<li><a href="changepassadmin.php">Admin</a></li>
				<li><a href="changepassstaff.php">Staff</a></li>

			</ul>
		
		<li><a href="#">Delete</a>
		<ul>
			<li><a href="deleteadmin.php">Admin</a></li>
			<li><a href="deletestaff.php">Staff</a></li>

		</ul>
		</li>
		<li><a href="aboutus.php">About Us</a></li>
		</li>
		<li><a href="home.php">Log Out</a></li>
	</ul>
</nav>

<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Enter Stock</h2>

  <form action="insert.php" method="post" class="login-container">
    <p><input type="text" name="sno" placeholder="Product Category"></p>
    <p><input type="text" name="prono" placeholder="Product Number"></p>
    <p><input type="text" name="proname" placeholder="Product Name"></p>
    <p><input type="text" name="quantity" placeholder="Quantity"></p>
    <p><input type="text" name="rate" placeholder="Rate"></p>
    <p><input type="submit" name="Login" value="Submit"></p>
  </form>
</div>
