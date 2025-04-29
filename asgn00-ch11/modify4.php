<!DOCTYPE html>
<!--Author: Daniel Filz
    Date: 01/07/2025
    File: modify4.php
    Purpose: Chapter 11 Exercise

    modify4.php calculates the average age of a class of students. It now works for ANY number of students.
-->
<html>

<head>
  <title>Modify 4</title>
  <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>
  <h1>AVERAGE AGE</h1>

  <?php

  $studentAges = array(21, 24, 37, 29, 55, 33, 47, 24, 19, 22);

  $total = 0;
  $numStudents = sizeof($studentAges);
  for ($i = 0; $i < $numStudents; $i++) {
    $total = $total + $studentAges[$i];
  }

  $averageAge = $total / $numStudents;

  print("<p>The average student age is ".round($averageAge)."</p>");

  ?>
</body>

</html>