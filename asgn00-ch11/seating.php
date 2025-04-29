<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/07/2025
		File:	seating.php
		Purpose: Chapter 11 Exercise
-->

<html>
<head>
	<title>SEATING MAINTENANCE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
	print ("<h1>SEATING MAINTENANCE REPORT</h1>");

	$seating = array (
		"OK", "OK", "OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "REPAIR", "OK", "REPAIR", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "REPAIR", "REPAIR", "REPAIR", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "REPAIR", "OK", "OK", "OK", "OK", "OK", "OK", "OK",
		"OK", "OK", "OK", "OK", "OK", "OK", "REPAIR", "OK", "OK", "OK",
		"OK", "OK", "OK", "OK", "OK", "OK", "OK", "REPAIR", "OK", "OK");

	$count = 0;

	for ($i = 0; $i < count($seating); $i++) {
		if ($seating[$i] == "REPAIR") {
			print ("SEAT #" . ($i + 1) . " NEEDS REPAIR<br>");
			$count++;
		}
	}

	print ("<p>$count seats are in need of repair</p>");
?>
</body>
</html>
