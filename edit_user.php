<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE user set first='" . $_POST["first"] . "', last='" . $_POST["last"] . "', id='" . $_POST["id"] . "', mn='" . $_POST["mn"] . "', ad='" . $_POST["ad"] . "', ac='" . $_POST["ac"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "Employee Details Successfully Updated.";
}
$select_query = "SELECT * FROM user WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Employee Details</title>

</head>
<body style="background-color: pink;font-family: sans-serif;"><br><br>
	<div style="text-align: center;"><button style="padding: 10px 15px;background-color: red;border-radius: 5px;cursor: pointer;"><a href="index.php" style="text-decoration: none;color: white">Show Employees</a></button></div><br><br>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="10" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<td colspan="5" align="center" style="font-size: 20px;background-color: blue;color: white;font-weight: bold">Edit Employee Details</td>
<tr>
<td><label>First Name</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>"><input type="text" name="first" class="txtField" value="<?php echo $row['first']; ?>"></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="last" class="txtField" value="<?php echo $row['last']; ?>"></td>
</tr>
<td><label>Id</label></td>
<td><input type="text" name="id" class="txtField" value="<?php echo $row['id']; ?>"></td>
</tr>
<td><label>Mobile Number</label></td>
<td><input type="text" name="mn" class="txtField" value="<?php echo $row['mn']; ?>"></td>
</tr>
<td><label>Address</label></td>
<td><input type="text" name="ad" class="txtField" value="<?php echo $row['ad']; ?>"></td>
</tr>
<td><label>Account Number</label></td>
<td><input type="text" name="ac" class="txtField" value="<?php echo $row['ac']; ?>"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: red" type="submit" name="submit" value="Update"></td>
</tr>
</table><br><br>

</div>
</form>
</body></html>
