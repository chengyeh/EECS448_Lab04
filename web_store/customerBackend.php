<?php

	setlocale(LC_MONETARY, 'en_US');
	
	$name = $_POST['userName'];
	$password = $_POST['userPassword'];
	$quantity_2006 = $_POST['2006'];
	$quantity_2004 = $_POST['2004'];
	$quantity_1996 = $_POST['1996'];
	$shippingMethod = $_POST['shipping'];

	function subTotal()
	{
		$GLOBALS['subTotal_2006'] = $GLOBALS['quantity_2006'] * 189.99;
		$GLOBALS['subTotal_2004'] = $GLOBALS['quantity_2004'] * 349.00;
		$GLOBALS['subTotal_1996'] = $GLOBALS['quantity_1996'] * 429.00;	
		if($GLOBALS['shippingMethod'] == "7 Day")
		{
			$GLOBALS['subTotal_shipping'] = "Free";
		}
		else if($GLOBALS['shippingMethod'] == "3 Day")
		{
			$GLOBALS['subTotal_shipping'] = "$ 5.00";
		}
		else if($GLOBALS['shippingMethod'] == "Overnight")
		{
			$GLOBALS['subTotal_shipping'] = "$ 50.00";
		}
	}
	
	subTotal();
	
	$itemTotal = $subTotal_2006 + $subTotal_2004 + $subTotal_1996;
	
	function totalCost()
	{
		if($GLOBALS['shippingMethod'] == "7 Day")
		{
			$GLOBALS['total'] = $GLOBALS['itemTotal'];
		}
		else if($GLOBALS['shippingMethod'] == "3 Day")
		{
			$GLOBALS['total'] = $GLOBALS['itemTotal'] + 5.00;
		}
		else if($GLOBALS['shippingMethod'] == "Overnight")
		{
			$GLOBALS['total'] = $GLOBALS['itemTotal'] + 50.00;
		}
		
		return $GLOBALS['total'];
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Order Confirmation</title>
		<link href='css/style.css' rel='stylesheet' type='text/css'>
	</head>
	<body id="backEnd">
		<div id="backEndHeader">
			<h1>Hi <?php echo $name; ?></h1>
			<h2>Your password is: <?php echo $password; ?></h2>
			<p><b>thank you for your purchase.</b><br>we're processing your order.<br><br></p>
		</div>
		<table id="receipt">
			<tr>
				<th colspan="5">ORDER SUMMARY</th>
			</tr>
			<tr>
				<th colspan="2"><br><br></th>
				<th>QUANTITY</th>
				<th>COST PER ITEM</th>
				<th>SUB TOTAL</th>
			</tr>
			<tr>
				<td class="pic"><img src="img/dom_perignon_2006.png" height="102" width="101"></td>
				<td><b>Dom Perignon with Gift Box 2006</b></td>
				<td><?php echo $quantity_2006; ?></td>
				<td>$ 189.99</td>
				<td><?php echo money_format('%(#10n', $subTotal_2006); ?></td>
			</tr>
			<tr>
				<td class="pic"><img src="img/dom_perignon_2004.png" height="102" width="101"></td>
				<td><b>Dom Perignon Rose Ltd. Edition 2004</b></td>
				<td><?php echo $quantity_2004; ?></td>
				<td>$ 349.00</td>
				<td><?php echo money_format('%(#10n', $subTotal_2004); ?></td>
			</tr>	
			<tr>
				<td class="pic"><img src="img/dom_perignon_1996.png" height="102" width="101"></td>
				<td><b>Dom Perignon Oenotheque 1996</b></td>
				<td><?php echo $quantity_1996; ?></td>
				<td>$ 429.00</td>
				<td><?php echo money_format('%(#10n', $subTotal_1996); ?></td>
			</tr>
			<tr>
				<th colspan="2">SHIPPING</th>
				<td colspan="2"><?php echo $shippingMethod; ?></td>
				<td><?php echo $subTotal_shipping; ?></td>
			</tr>
			<tr>
				<th colspan="4">TOTAL COST</th>
				<td><?php echo money_format('%(#10n', totalCost()); ?></td>
			</tr>
		</table>
	</body>
</html>