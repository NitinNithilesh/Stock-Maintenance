<?php
if(isset($_POST['Login1']))
{
include_once 'db.php';

$a=$_POST['u'];
$b=$_POST['p'];

$c=mysqli_query($conn,"SELECT * FROM details_user WHERE staff_number='$a' AND password='$b'");

if(empty($a&&$b))
{
  echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
  include "deletestaff.php";
}
elseif(mysqli_num_rows($c)!=0)
{
  mysqli_query($conn,"DELETE FROM details_user WHERE staff_number='$a' AND password='$b'");
  echo "<script type='text/javascript'>alert('Staff Deleted..!!');</script>";
  include "deletestaff.php";
}
else
{
  echo "<script type='text/javascript'>alert('Wrong Username or Password...Unauthorised Entry..!!');</script>";
  include "deletestaff.php";
}
}

 ?>
