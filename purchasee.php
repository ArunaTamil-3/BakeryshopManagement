<html>
<head>
<!----- Start Menu ------>
<title>PURCHASE PAGE</title>
<body>
<LINK REL="STYLESHEET" TYPE="TEXT/CSS"HREF="purchasestyle.css">
<div class="page-blocks">
<div class="title">
PURCHASE
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
<form action="purchased.php" method="POST">
<input type="text" placeholder="Dealer Name" name="dn" required><br/>
<input type="text" placeholder="Dealer ID" name="di" required><br/>
<input type="text" placeholder="Contact Address" name="ca" required><br/>
<input type="text" placeholder="Phone num" name="pn" required><br/>
<input type="date" placeholder="Date" name="date" required><br/>
<select class="option" name="pr">
<option disabled="disabled" selected="selected">--Choose Option--</option>
<option> Wheat</option>
<option> Milk</option>
<option> Sugar</option>
<option> Cream</option>
<option> Oil</option>
<option> Gas</option>
</select>
<input type="text" placeholder="Quantity" name="ty" required><br/>
<input type="text" placeholder="Product Price" name="pp" required><br/>
<br>
<input type="submit" value="submit" id="submit" name="submit">
<center><a href="header.html" name="bk">BACK</a></center>
</form>
</div>
</div>
</body>
</head>
</html>
