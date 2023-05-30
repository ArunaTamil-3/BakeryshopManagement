<html>
<head>
<!----- Start Menu ------>
<title>SALES PAGE</title>
<body>
<LINK REL="STYLESHEET" TYPE="TEXT/CSS"HREF="salestyle.css">
<div class="page-blocks">
<div class="title">
SALES
</div>
<div class="flex-block">
<div class="appointment-flex-item">
<div class="appointment-flex-img">
<div class="appointment-text">
</div>
</div>
</div>
<div class="appointment-flex-item">
<div class="appointment-form">
<form action="salesdb.php" method="POST">
<input type="text" placeholder="Customer Name" name="cn" required><br/>
<input type="date" placeholder="Date" name="dt" required><br/>
<select class="option" name="pr">
<option disabled="disabled" selected="selected">--Choose Option--</option>
<option> Cake</option>
<option> Biscuit</option>
<option>Sweet</option>
<option>chocolate</option>
<option>Juice</option>
<option>Bread</option>
</select>
<input type="text" placeholder="Quantity" name="ty" required><br/>
<input type="text" placeholder="Price" name="pp" required><br/>

<br><br>
<input type="submit" value="submit" id="submit" name="submit">
<center><a href="header.html" name="bk">BACK</a></center>

</form>
</div>
</div>
</body>
</head>
</html>
