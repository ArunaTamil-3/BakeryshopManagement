<?php
	$conn=mysqli_connect('localhost','root','','bakery');
	if(isset($_POST['submit']))
	{
		$fname=$_POST['first'];
		$lname=$_POST['last'];
		$id=$_POST['id'];
		$mno=$_POST['mn'];
		$add=$_POST['ad'];
		$ac=$_POST['ac'];
		
		$sql="INSERT INTO employee(first,last,id,mn,ad,ac)VALUES('$fname','$lname','$id','$mno','$add','$ac')";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo"<script type='text/javascript'>alert('New Employee Added Successfully')</script>";
			header('location:header.html');
		}
		else
		{
			die(mysqli_error($conn));
		}
	}
?>
