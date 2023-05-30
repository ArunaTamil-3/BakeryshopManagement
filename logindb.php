<?php
$host="localhost";
	$user="root";
	$pas="";
	$database="bakery";
	$conn=mysqli_connect($host,$user,$pas,$database);
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
	$query="INSERT INTO log (username,password) VALUES('$username','$password')";
	if($conn->connect_error)
	{
		echo"connection failed";
	}
	if($conn->query($query)==true)
	{
		echo"<script type='text/javascript'>alert('data inserted successfully')</script>";
		header('location:header.html');
	}
}
echo"</form>";
?>