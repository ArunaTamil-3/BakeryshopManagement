<?php
include("db.php");
$sql = "SELECT * FROM user ORDER BY id DESC";
$result = mysqli_query($con,$sql);
?>
<html>
<head>
<title>Employee Details</title>
</head>
<body style="background-color: pink;font-family: sans-serif;">
	<h2 style="text-align: center;">SALARY DETAILS</h2><br>
<form name="frmUser" method="post" action="add_user.php">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="10" cellpadding="10" cellspacing="1" width="900" align="center">
<tr style="color: black;font-weight: bold;background-color: red">
<td>First Name</td>
<td>Last Name</td>
<td>Id</td>
<td>Mobile Number</td>
<td>Address</td>
<td>Account Number</td>
<td>Actions</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["first"]; ?></td>
<td><?php echo $row["last"]; ?></td>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["mn"]; ?></td>
<td><?php echo $row["ad"]; ?></td>
<td><?php echo $row["ac"]; ?></td>
<td><a style="text-decoration: none;padding: 10px 15px;background-color: green;color: white;border-radius: 5px" href="edit_user.php?userId=<?php echo $row["userId"]; ?>">Edit</a>&nbsp; <a style="text-decoration: none;padding: 10px 15px;background-color: red;color: white;border-radius: 5px" href="delete_user.php?userId=<?php echo $row["userId"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table><br><br><br>
<div style="text-align: center;"><button style="padding: 10px 15px;background-color: red;border-radius: 5px;cursor: pointer;"><a href="add_user.php" style="text-decoration: none;color: black">Add New Employee</a></button></div>
</form>
</div>
</body></html>
