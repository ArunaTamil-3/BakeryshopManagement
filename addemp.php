<html>
<head>
<title>Add New Employee</title>
</head>
<body style="background-color: white;font-family: sans-serif;"><br><br>
<h1><center>SALARY DETAILS</center></h1>
<form name="frmUser" method="post" action="empdb.php">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>


<table border="10" cellpadding="10" cellspacing="0" width="600" align="center" >
<td colspan="5" align="center" style="font-size: 20px;background-color: blue;color: white;font-weight: bold">Add New Employee</td>
<tr>
<td><label>Employee Name</label></td>
<td><input type="text" name="employeename" class="txtField"></td>
</tr><tr>
<td><label>Employee ID</label></td>
<td><input type="text" name="empid" class="txtField"></td>
</tr>
<tr>
<td><label>Designation</label></td>
<td><input type="text" name="designation" class="txtField"></td>
</tr>
<tr>
<td><label>Attendance</label></td>
<td><input type="text" name="mobilenumber" class="txtField"></td>
</tr>
<tr>
<td><label>Date</label></td>
<td><input type="date" name="date" class="txtField"></td>
</tr>
<tr>
<td><label>Salary</label></td>
<td><input type="text" name="salary" class="txtField"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: white" type="submit" name="submit" value="Submit"></td>
</tr>
</table><br><br><br>
</div>
</form>
</body></html>
