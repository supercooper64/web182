<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/20/2025
    File:   paint-estimate.php
    Purpose:Chapter 13 Exercise
-->

<html>
<head>
    <title>King Painting</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

    <h1>King Painting: Paint Estimate</h1>

    <?php
        // Include the functions file
        include('inc-paint-functions.php');

        // Get the input values
        $roomLength = $_POST['roomLength'];
        $roomWidth = $_POST['roomWidth'];
        $roomHeight = $_POST['roomHeight'];
        $paint = $_POST['paint'];

        // Calculate the areas and costs using the functions
        $wallArea = getWallArea($roomLength, $roomWidth, $roomHeight);
        $ceilingArea = getCeilingArea($roomLength, $roomWidth);
        $totalArea = getTotalArea($wallArea, $ceilingArea);
        $paintCost = getPaintCost($totalArea, $paint);
        $laborCost = getLaborCost($totalArea);

        // Calculate the total cost
        $totalCost = $paintCost + $laborCost;

        // Display the results
        print("<p>Length of room: $roomLength<br>");
        print("Width of room: $roomWidth<br>");
        print("Height of room: $roomHeight</p>");
        print("<p>Total wall area: $wallArea<br>");
        print("Ceiling area: $ceilingArea<br>");
        print("Total wall and ceiling area: $totalArea</p>");
        print("<p>Type of paint: <strong>$paint</strong><br>");
        print("Paint Cost: $$paintCost<br>");
        print("Labor Cost: $$laborCost<br>");
        print("Total Cost: $$totalCost</p>");
    ?>

</body>
</html>