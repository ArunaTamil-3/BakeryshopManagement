<?php
	$conn=mysqli_connect('localhost','root','','bakery');
	if(isset($_POST['submit']))
	{
		$ename=$_POST['employeename'];
		$eid=$_POST['empid'];
		$des=$_POST['designation'];
		$mn=$_POST['mobilenumber'];
		$date=$_POST['date'];
		$sal=$_POST['salary'];
		

		$sql="INSERT INTO salary(employeename,empid,designation,mobilenumber,date,salary)VALUES('$ename','$eid','$des','$mn','$date','$sal')";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo"<script type='text/javascript'>alert('Successfully')</script>";
			header('location:viewsalary.php');
		}
		else
		{
			die(mysqli_error($conn));
		}
	}
?>
