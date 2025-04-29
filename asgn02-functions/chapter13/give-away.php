<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/20/2025
    File: give-away.php
    Purpose:
-->

<html>

<head>
  <title>GIVE AWAY</title>
  <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>

  <?php

  // Add the freeTrip function here
  function freeTrip()
  {
    $destinations = ["N/A", "Aruba", "Cairo", "London", "Rome", "Tokyo"];

    $trip = rand(1, 5);
    return $destinations[$trip];
  }

  print("<h1>CONGRATULATIONS!</h1>");

  $destination = freeTrip(); // Call the freeTrip function here

  print("<h1>You have won a free trip to $destination!!!</h1>");

  ?>
</body>

</html>