<?php
include_once 'db.php';
?>
<html>
<head>
	<title>Admin Login</title>
</head>
<link rel="stylesheet" type="text/css" href="design.css">
<body>

<nav>
	<ul>
		<li><a href="home.php">Home</a></li>
		
		
			
		<li><a href="#">Login</a>
			<ul>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="staff.php">Staff</a></li>
				
			</ul>
		</li>
		
		<li><a href="aboutusindex.php">About Us</a></li>
	</ul>
</nav>

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Admin Log in</h2>

  <form action="logadmin.php" method="post" class="login-container">
    <p><input type="text" name="uid" placeholder="Username"></p>
    <p><input type="password" name="pid" placeholder="Password"></p>
    <p><input type="submit" name="Login" value="Log in"></p>
  </form>
</div>

</body>
</html>