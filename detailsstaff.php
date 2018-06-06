<head>
  <title>Staff Details</title>
</head>
<?php
include_once 'db.php';
?>
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
  		</li>
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
<div class="table-title">
<center><h3>Staff Details</h3></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Staff Number</th>
<th class="text-left">Username</th>
<th class="text-left">Password</th>
<th class="text-left">Staff Name</th>
<th class="text-left">Staff Address</th>
<th class="text-left">Phone Number</th>
</tr>
</thead>
<?php
$res=mysqli_query($conn,"SELECT * from details_user order by staff_number") or die('error');
  while($r=mysqli_fetch_array($res))
  {
    $staff_number=$r['staff_number'];
    $username=$r['username'];
    $password=$r['password'];
    $staff_name=$r['staff_name'];
    $address=$r['address'];
    $phone_number=$r['phone_number'];
    echo '<tr>
        <td>'.$staff_number.'</td>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td>'.$staff_name.'</td>
        <td>'.$address.'</td>
        <td>'.$phone_number.'</td>
        </tr>';

  }
?>
</table>



  </body>
