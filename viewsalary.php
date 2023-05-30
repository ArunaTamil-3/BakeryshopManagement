<?php
include("report1.html");
$conn=mysqli_connect("localhost","root","","bakery");
echo"<center><h1>Salary Details</h1>";
echo"<table border='2'>";
echo"<tr><th>Employee Name</th><th>Emp ID</th><th>Designation</th><th>Mobile num</th><th>Date</th><th>Salary</th></tr>";
$result=mysqli_query($conn,"select * from salary");
while($rs=mysqli_fetch_array($result))
{
echo"<tr><th>$rs[0]</th><th>$rs[1]</th><th>$rs[2]</th><th>$rs[3]</th><th>$rs[4]</th><th>$rs[5]</th></tr></center>";
}
echo"</table>";
echo"<br><br><center><a href='header.html'>BACK</a><br><br>";
mysqli_close($conn);
?>