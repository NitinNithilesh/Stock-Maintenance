<?php
include_once 'db.php';
?>
<html>
<head>
	<title>Delete Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="design.css">
<body>
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

  <h2 class="login-header">Delete Admin</h2>

  <form action="dele.php" method="post" class="login-container">
    <p><input type="text" name="u" placeholder="Username"></p>
    <p><input type="password" name="p" placeholder="Password"></p>
    <p><input type="submit" name="Login" value="Delete"></p>
  </form>
</div>

</body>
</html>
