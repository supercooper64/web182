<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/07/2025
	File:	  parking.php
	Purpose:

-->

<html>
<head>
	<title>PARKING PERMIT CHECKING SYSTEM</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

<?php
    $parkingPermits = array("LYD EW25", "XYZ 1234", "BDA 3AGT", "HJA 5TY2", "AAA B24W",
    "NBD EW25", "XYZ 67RT", "KL6 TY6J", "KEA H3JK", "AND 3G4W",
    "HJS EF19", "XYZ KL2W", "LKG KL1T", "R25 3KLJ", "BNA UW4W",
    "HJS JG34", "JKS 98RT", "KL3 3AGT", "KL2 5TY2", "JK2 LK1D");

    $permitNumber = $_POST['permitNumber'];

    print ("<h1>PARKING PERMIT CHECKING SYSTEM</h1>");
    
    print ("<p>The license plate number for parking space $permitNumber is $parkingPermits[$permitNumber]</p>");
	?>
</body>
</html>
