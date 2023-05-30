<?php
include("delete1.php");
$fname=$_POST['t1'];
$conn=mysqli_connect('localhost','root','','bakery');
$sql="delete from employee where first='$fname'";
$rs=mysqli_query($conn,$sql);
echo"<script type='text/javascript'>alert('Deleted Successfully')</script>";
echo"<center><h1>Employee details</h1></center>";
echo"<table border=2>";
echo"<center><tr><th>First Name</th><th>Last Name</th><th>ID</th><th>Mobile Num</th><th>Address</th><th>Ac num</th></tr></center>";
$result=mysqli_query($conn,"select * from employee");
while($rs=mysqli_fetch_array($result))
{
echo"<tr><th>$rs[0]</th><th>$rs[1]</th><th>$rs[2]</th><th>$rs[3]</th><th>$rs[4]</th><th>$rs[5]</th></tr>";
}
echo"</table>";
echo"<br><br><center><a href='header.html'>BACK</a><br><br></center>";
mysqli_close($conn);
?>