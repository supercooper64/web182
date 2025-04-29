<!DOCTYPE html>
<!--Author: Daniel Filz
    Date: 01/27/2025
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php
	include('inc-order-object.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$order = new Order();
		$order->setItemCost($_POST['cost']);
		$order->setNumItems($_POST['items']);

		$subTotal = $order->getSubtotal();
		$tax = $order->getSalesTax();
		$shippingHandling = $order->getShippingHandling();
    $total = $order->getTotal();
	}

	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
?>
</body>
</html>