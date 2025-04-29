<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/07/2025
	File:	  orders.php
	Purpose:
	
-->

<html>
<head>
	<title>BLUEBERRY ORDERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

<?php
        // Create the $orders array with the specified values
        $orders = [2, 17, 4, 6, 1, 3, 1, 15, 1, 6];
        
        // Initialize variables for total bushes and count of orders with more than one bush
        $totalBushes = 0;
        $countMoreThanOne = 0;

        print ("<h1>BLUEBERRY ORDERS</h1>");
        print ("<table>");
        print ("<tr><th>Order #</th><th>Quantity</th></tr>");
        
        // First FOR loop to display the orders
        for ($i = 0; $i < sizeof($orders); $i++) {
            print ("<tr><td>" . ($i + 1) . "</td><td>" . $orders[$i] . "</td></tr>");
        }
        
        print ("</table>");
        
        // Second FOR loop to calculate total bushes and count orders with more than one bush
        for ($i = 0; $i < sizeof($orders); $i++) {
            $totalBushes += $orders[$i];
            if ($orders[$i] > 1) {
                $countMoreThanOne++;
            }
        }

        print ("<p>TOTAL NUMBER OF BUSHES ORDERED: $totalBushes.</p>");
        print ("<p>TOTAL NUMBER OF ORDERS: " . sizeof($orders) . ".</p>");
        print ("<p>NUMBER OF ORDERS FOR MORE THAN ONE BUSH: $countMoreThanOne.</p>");
    ?>
</body>
</html>
