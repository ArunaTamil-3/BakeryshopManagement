<?php
include("report1.html");
$conn=mysqli_connect("localhost","root","","bakery");
echo"<center><h1>Employee Details</h1>";
echo"<table border='2'>";
echo"<tr><th>First Name</th><th>Last Name</th><th>ID</th><th>Mobile Num</th><th>Address</th><th>Aadhar Num</th></tr>";
$result=mysqli_query($conn,"select * from employee");
while($rs=mysqli_fetch_array($result))
{
echo"<tr><th>$rs[0]</th><th>$rs[1]</th><th>$rs[2]</th><th>$rs[3]</th><th>$rs[4]</th><th>$rs[5]</th></tr></center>";
}
echo"</table>";
echo"<br><br><center><a href='header.html'>BACK</a><br><br>
<a href='delete1.php'>DELETE</a><br><br>";
mysqli_close($conn);
?>