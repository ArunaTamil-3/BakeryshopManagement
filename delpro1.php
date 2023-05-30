<?php
include("delpro.php");
$pi=$_POST['t1'];
$conn=mysqli_connect('localhost','root','','bakery');
$sql="delete from pro where productid='$pi'";
$rs=mysqli_query($conn,$sql);
echo"<script type='text/javascript'>alert('Successfully')</script>";
echo"<center><h1>Product details</h1></center>";
echo"<table border=2>";
echo"<tr><th>Productid</th><th>Product</th><th>Stock Range</th><th>Cost</th><th>Date</th></tr>";
$result=mysqli_query($conn,"select * from pro");
while($rs=mysqli_fetch_array($result))
{
echo"<tr><th>$rs[0]</th><th>$rs[1]</th><th>$rs[2]</th><th>$rs[3]</th><th>$rs[4]</th></tr>";
}
echo"</table>";
echo"<br><br><center><a href='header.html'>BACK</a><br><br></center>";
mysqli_close($conn);
?>