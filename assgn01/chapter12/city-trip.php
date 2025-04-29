<!DOCTYPE html>
<!--	
	Author: Daniel Filz
	Date: 01/14/2025
	File: city-trip.php
	Purpose: Chapter 12 Exercise
-->

<html>
<head>
	<title>City Trip</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
		// Define distances from NYC to each city in miles
		$distances = array(
			"Atlanta" => 880,
			"Boston" => 225,
			"Chicago" => 788,
			"Detroit" => 614,
			"Miami" => 1275
		);

		// Get form data
		$mpg = $_POST['mpg'];
		$costPerGallon = $_POST['costPerGallon'];
		$city = $_POST['city'];

		// Calculate fuel cost
		if (isset($distances[$city]) && is_numeric($mpg) && is_numeric($costPerGallon) && $mpg > 0) {
			$distance = $distances[$city];
			$fuelNeeded = $distance / $mpg;
			$totalCost = $fuelNeeded * $costPerGallon;

			echo "<p>The total fuel cost for a trip from NYC to $city is $" . number_format($totalCost, 2) . ".</p>";
			echo "<p>Distance to $city: $distance miles.</p>";
		} else {
			echo "<p>Please enter valid values for MPG and cost per gallon.</p>";
		}
	?>

</body>
</html>
