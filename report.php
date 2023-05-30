
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name"viewport" content="width:device-width;initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>bill</title>
<style>
.result
{
	color:red;
}
td
{
	text-align:center;
}</style></head>
<body>
<section class="mt-3">
<div class="container-field">
<center><h1 class="text-center" style="color:red">BAKERY SHOP MANAGEMENT SYSTEM</h1></center>
<h3 class="text-center"></h3>
<div class="col-md-5 mt-4">
<table class="table" style="background-color:#f5f5f5;">
<thread>
<tr>
<th>No</th>
<th>Cake</th>
<th>Qty</th>
<th>Price</th>
</tr>
</thread>
<tbody>
<tr>
<td scope="row">1</td>
<td style="width:60%">
<select name="product" id="pr" class="form-control">
<?php
$sql="SELECT * FROM sal";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
	?><option id="<?php echo$row['pr']; ?>" value="<?php echo$row['productname']?>" class="form-control"></option>
<?php } ?></select></td>
<td style="width:1%">
<input type="number" id="qty" min="0" value="0" class="form-control"></td>
<td><p id="price"></p></td>
<td><button id="add" class="btn btn-primary">Add</button></td></tr></tbody></table>
<div role="alert" id="errorMsg" class="mt-5">
<!--- Error Msg-->
</div>
</div>
<div class="col-md-7 mt-4" style="background-color:#f5f5f5;">
<div class="p-4">
<div class="text-center">
<h4>Receipt</h4>
</div>
<span class="mt-4">Time:</span>
<span class="mt-4" id="time"></span>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<span id="day"></span>
<span id="year"></span></div>
<div class="col-xs-6 col-sm-6 col-md-6 text-right">
<p>Order No:</p></div></div>
<div class="row"></span>
<table id="receipt-bill" class="table">
<thread>
<tr><th>No</th>
<th>Productname</th>
<th>Quantity</th>
<th class="text-center">Price</th>
<th class="text-center">Total</th>
</tr></thread>
<tbody id="new"></tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td class="text-right text-dark"><h5><strong>Subtotal:Rs.</strong></h5>
<p><strong>Tax(5%):Rs.</strong></p></td>
<td class="text-center text-dark">
<h5><strong><span id="subtotal"></strong></h5>
<h5><strong><span id="taxamount"></strong></h5>
</td></tr>
<tr>
<td></td>
<td></td>
<td></td>
<td class="text-right text-dark">
<h5><strong>Grosstotal:Rs.</strong></h5></td>
<td class="text-center text-dark">
<h5 id="Totalpayment"><strong></strong></h5></td>
</tr></table></div></div></div></div></section></body></html>
<script>
$(document).ready(function()
{
	$('#cake').change(function()
	{
		var id=$(this).find(':selected')[0].pn;
		$.ajax({
			method:'POST',
			url:'fetch-product.php',
			data:{id:id},
			datatype:'json',
			success:function(data){
				$('#price').text(data.product.price);
			}
		});
	});
	var count=1;
	$('#add').on('click',function(){
		var name=$('#cake').val();
		var qty=$('#qty').val();
		var price=$('#price').text();
		if(qty==0)
		{
			var errorMsg="<span class="alert alert danger m1-5">Minimum qty should be or more than 1</span>";
			$('#errorMsg').html(errorMsg).fadeout(9000);
		}
		else
		{
			billfunction();
		}
		function billfunction()
		{
			var total=0;
			$('#receipt-bill').each(function)
			{
				var total=price*qty;
				var subtotal=0;
				subtotal+=parseInt(total);
				var table='<tr><td>'+count+'</td><td>'+name+'</td><td>'+qty+'</td><td>'+price+'</td>'
				$('#new').append(table)
				var total=0;
				$('tbody tr td:last-child').each(function(){
					var value=parseInt($('#total',this).val(1));
					if(!isNaN(value))
					{
						total+=value;
					} 
				});
				$('#subtotal').text(total);
				var tax=(total*2)/100;
				$('#taxamount').text(tax.tofind(2));
				var subtotal=$('#subtotal').text();
				var taxamount=$('#taxamount').text();
				var totalpayment=parseFloat(subtotal)+parseFloat(taxamount);
				$('#totalpayment').text(totalpayment.toFixed(2));
			});count++;
		}
	});
	var currentdate=new Date();
	var datetime=currentdate.getDate()+"/"+(currentdate.getMonth()+1)+"/"+currentdate.getFullyear();
	$('#year').text(datetime);
	function myfunction()
	{
		var d=new Date();
		var weekday=new Array(7);
		weekday[0]="sunday";
		weekday[1]="monday";
		weekday[2]="tuesday";
		weekday[3]="wednesday";
		weekday[4]="thursday";
		weekday[5]="friday";
		weekday[6]="saturday";
		var day=weekday[d.getDay()];
		return day;
	}
	var day=myfunction();
	$('#day').text(day);
});
</script>
<script>
window.onload=displayClock();
function displayClock()
{
var time=new date().tolocaleTimeString();
document.getElementById("time").innerHTML=time;
setTimeOut(displayClock,1000);
}
</script>

