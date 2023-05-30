<html>
<head>
<title>Add New Employee</title>
</head>
<body style="background-color: white;font-family: sans-serif;"><br><br>
	<div style="text-align: center;"><button style="padding: 10px 15px;background-color: blue	;border-radius: 5px;cursor: pointer;"><a href="viewemp.php" style="text-decoration: none;color: white">Show Employees</a></button></div><br><br>
<form name="frmUser" method="post" action="user.php">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>


<table border="10" cellpadding="10" cellspacing="0" width="600" align="center" >
<td colspan="5" align="center" style="font-size: 20px;background-color: blue;color: white;font-weight: bold">Add New Employee</td>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="first" class="txtField"></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="last" class="txtField"></td>
</tr>
<tr>
<td><label>Id</label></td>
<td><input type="text" name="id" class="txtField"></td>
</tr>
<tr>
<td><label>Mobile Number</label></td>
<td><input type="text" name="mn" class="txtField"></td>
</tr>
<td><label>Address</label></td>
<td><input type="text" name="ad" class="txtField"></td>
</tr>
<td><label>Account Number</label></td>
<td><input type="text" name="ac" class="txtField"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: red" type="submit" name="submit" value="submit" id="submit"></td>
</tr>
</table><br><br><br>
</div>
</form>
</body></html>
