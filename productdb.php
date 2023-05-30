<?php
$pi =$_POST['pi'];
$pr =$_POST['pr'];
$sc =$_POST['sc'];
$cn =$_POST['cn'];
$dt =$_POST['dt'];	
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
	$query="INSERT INTO pro(productid,product,stockrange,cost,date)VALUES('$pi','$pr','$sc','$cn','$dt')";

	if($conn->query($query)==true)
	{
		echo"<script type='text/javascript'>alert('Successfully')</script>";
		header('location:viewpro.php');
	}
echo "</form>";
}
?>
