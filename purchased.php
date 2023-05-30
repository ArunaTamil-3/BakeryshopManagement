<?php
$host="localhost";
	$user="root";
	$pas="";
	$database="bakery";
	$conn=mysqli_connect($host,$user,$pas,$database);

if(isset($_POST['submit']))
{
	$dn =$_POST['dn'];
$di =$_POST['di'];
$ca =$_POST['ca'];
$pn =$_POST['pn'];
$dt =$_POST['date'];
$pr =$_POST['pr'];
$ty =$_POST['ty'];
$pp =$_POST['pp'];	
	$query="INSERT INTO room(dealername,dealerid,contactaddress,phonenumber,date,product,qty,productprice)VALUES('$dn','$di','$ca','$pn','$dt','$pr','$ty','$pp')";
	$result=mysqli_query($conn,$query);
	if($result)
		{
			echo"<script type='text/javascript'>alert('Purchase Successfully')</script>";
			header('location:viewpur.php');
		}
		else
		{
			die(mysqli_error($conn));
		}
}
?>