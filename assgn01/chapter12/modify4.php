<!DOCTYPE html>
<!--Author: Daniel Filz
  Date: 01/14/2025
  File: modify4.php
  Purpose: Chapter 12 Exercise

  modify4.php uses a print statement to display some demographic information about France.
  Modify this application to use an associative array named $franceInfo to store the four values
  ("65.8", "Paris", "French", and "franc"). Use meaningful names for the array keys.

  Now modify the print statement so that it uses the $franceInfo array to obtain the four values.
  You do not need to change modify4.html which just runs the program.
-->
<html>
<head>
  <title>Modify 4</title>
  <link rel="stylesheet" type="text/css" href="sample.css">
</head>
<body>
  <h1>Modify 4</h1>

  <?php
    // Create an associative array with meaningful keys
    $franceInfo = array(
      "population" => "65.8",
      "capital" => "Paris",
      "language" => "French",
      "currency" => "Franc"
    );

    // Use the associative array in the print statement
    print("<p>France has a population of " . $franceInfo["population"] . " people. The capital city is " . $franceInfo["capital"] . " and the language is " . $franceInfo["language"] . ". The currency is the " . $franceInfo["currency"] . ".</p>");
  ?>
</body>
</html>