<?php
include_once 'db.php';
?>
<html>
<head>
	<title>Staff Billing</title>
</head>

<link rel="stylesheet" type="text/css" href="design.css">
<nav>
	<ul>
		<li><a href="homestaff.php">Home</a></li>
		<li><a href="#">Stock</a>
			<ul>
				
				<li><a href="viewstockstaff.php">View Stock</a></li>
				
			</ul></li>
		<li><a href="billingstaff.php">Billing</a>
		</li>

		<li><a href="aboutusstaff.php">About Us</a></li>
		<li><a href="home.php">Log Out</a></li>
	</ul>
</nav>

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Billing</h2>

  <form action="billingstockstaff.php" method="post" class="login-container">
    <p><input type="text" name="c" placeholder="Customer Name"></p>
    <p><input type="text" name="prodname" placeholder="Product Name"></p>
    <p><input type="text" name="quan" placeholder="Quantity"></p>
    <p><input type="submit" name="Login" value="Generate"></p>
  </form>
</div>
