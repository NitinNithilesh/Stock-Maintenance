<?php
if(isset($_POST['Login']))
{
include_once 'db.php';

$a=$_POST['u'];
$b=$_POST['p'];

$c=mysqli_query($conn,"SELECT * FROM details WHERE username='$a' AND password='$b'");

if(empty($a&&$b))
{
  echo "<script type='text/javascript'>alert('Enter all the details..!!');</script>";
  include "deleteadmin.php";
}
elseif(mysqli_num_rows($c)!=0)
{
  mysqli_query($conn,"DELETE FROM details WHERE username='$a' AND password='$b'");
  echo "<script type='text/javascript'>alert('Admin Deleted..!!');</script>";
  include "deleteadmin.php";
}
else
{
  echo "<script type='text/javascript'>alert('Wrong Username or Password...Unauthorised Entry..!!');</script>";
  include "deleteadmin.php";
}
}

 ?>
