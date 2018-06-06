
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
<div class="table-title">
<center><h3>Available Stock</h3></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Product Category</th>
<th class="text-left">Product Number</th>
<th class="text-left">Product Name</th>
<th class="text-left">Quantity</th>
<th class="text-left">Rate</th>
</tr>
</thead>
<?php
$res=mysqli_query($conn,"SELECT * from enter_stock") or die('error');

  while($r=mysqli_fetch_array($res))
  {

    $product_category=$r['product_category'];
    $product_number=$r['product_number'];
    $product_name=$r['product_name'];
    $quantity=$r['quantity'];
    $rate=$r['rate'];


    echo '<tr>
        <td>'.$product_category.'</td>
        <td>'.$product_number.'</td>
        <td>'.$product_name.'</td>
        <td>'.$quantity.'</td>
        <td>'.$rate.'</td>
        </tr>';

  }
?>
</table>



  </body>
