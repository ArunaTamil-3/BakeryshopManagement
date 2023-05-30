<?php
include("report1.html");
$conn=mysqli_connect("localhost","root","","bakery");
echo"<center><h1>Product Details</h1>";
echo"<table border='2'>";
echo"<tr><th>Productid</th><th>Product</th><th>Stock Range</th><th>Cost</th><th>Date</th></tr>";
$result=mysqli_query($conn,"select * from pro");
while($rs=mysqli_fetch_array($result))
{
echo"<tr><th>$rs[0]</th><th>$rs[1]</th><th>$rs[2]</th><th>$rs[3]</th><th>$rs[4]</th></tr></center>";
}
echo"</table>";
echo"<br><br><center><a href='header.html'>BACK</a><br><br>
<center><a href='delpro.php'>DELETE</a><br><br>";
mysqli_close($conn);
?>