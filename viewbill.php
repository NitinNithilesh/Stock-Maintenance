
<?php
include_once 'db.php';
?>
<link rel="stylesheet" type="text/css" href="design.css">


<head>
  <title>View Stock</title>
</head>
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
<div class="table-title">
<center><h3>Available Stock</h3></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Customer Name</th>
<th class="text-left">Product Name</th>
<th class="text-left">Quantity</th>
<th class="text-left">Date & Time</th>
</tr>
</thead>
<?php
$res=mysqli_query($conn,"SELECT * from bill") or die('error');

  while($r=mysqli_fetch_array($res))
  {

    $customer_name=$r['customer_name'];
    $product_name=$r['product_name'];
    $quantity=$r['quantity'];
    $time=$r['time'];


    echo '<tr>
        <td>'.$customer_name.'</td>
        <td>'.$product_name.'</td>
        <td>'.$quantity.'</td>
        <td>'.$time.'</td>
        </tr>';

  }
?>
</table>



  </body>
