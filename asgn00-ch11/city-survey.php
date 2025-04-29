<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/07/2025
	File:	  city-survey.php
	Purpose:

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

<?php
        $citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
        "Paris", "Paris", "London", "Rome", "Rome",
        "Paris", "London", "Paris", "London", "London",
        "London", "Paris", "London", "Paris", "Rome");

        // Count the number of times each city occurs in the array
        $cityCount = array_count_values($citySurvey);

        print ("<h1>CITY SURVEY RESULTS</h1>");
        // Display the results in a table
        print ("<table border='1'>");
        print ("<tr><th>City</th><th>Count</th></tr>");
        foreach ($cityCount as $city => $count) {
            print ("<tr><td>$city</td><td>$count</td></tr>");
        }
        print ("</table>");
    ?>
</body>
</html>
