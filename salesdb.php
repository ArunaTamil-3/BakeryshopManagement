<?php
$cn =$_POST['cn'];
$dt =$_POST['dt'];
$pr =$_POST['pr'];
$ty =$_POST['ty'];
$pp =$_POST['pp'];
if(isset($_POST['submit']))
{
	$host="localhost";
	$user="root";
	$pas="";
	$database="bakery";
	$conn=mysqli_connect($host,$user,$pas,$database);
	if($conn->connect_error)
	{
		echo "connection failed";
	}
	$query="INSERT INTO sal(customername,date,product,qty,productprice)VALUES('$cn','$dt','$pr','$ty','$pp')";
	if($conn->query($query)==true)
	{
		echo"<script type='text/javascript'>alert('Sales Successfully')</script>";
		header('location:header.html');
	}
echo "</form>";
}
?>
