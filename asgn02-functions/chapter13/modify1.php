<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/20/2025
	File:	modify1.php
	Purpose:Chapter 13 Exercise

	modify1.html asks the user to submit their hours worked and pay rate.
	The current version of modify1.php updates the hourly wage to 8.00
	if it is less than 8.00, then calculates the weekly pay and a bonus,
	and displays the results. The program does this without using any
	functions.

	Change modify1.php so that it uses the setMinimumWage(), getWage() and
	getBonus() functions that are provided in the inc-wage-functions.php file
	instead of performing these calculations directly.Note that your program
	becomes much simpler.

-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify1</h1>

  <?php
        // Include the functions file
        include('inc-wage-functions.php');

        $hoursWorked = $_POST['hoursWorked'];
        $hourlyWage = $_POST['hourlyWage'];

        // Use the setMinimumWage function
        $hourlyWage = setMinimumWage($hourlyWage);

        // Use the getWage function
        $wage = getWage($hourlyWage, $hoursWorked);

        // Use the getBonus function
        $bonus = getBonus($wage);

        // Format the wage to include two decimal places
        $formattedWage = sprintf("%.2f", $wage);

        print("<p>Your hourly wage is $$hourlyWage and you worked $hoursWorked hours.</p>");
        print("<p>Your wages are $$formattedWage.</p>");
        print("<p>Your bonus is $$bonus.</p>");
    ?>

</body>
</html>
