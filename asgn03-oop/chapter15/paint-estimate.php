<!DOCTYPE html>
<!--Author: Daniel Filz
    Date: 01/27/2025
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>

<head>
  <title>OOP Exercise</title>
  <link rel="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
  <h1>Paint Estimate</h1>
  <?php

  // your code here
  include "inc-rectangle-object.php";

  // gather input
  $length = $_POST['length'];
  $width = $_POST['width'];
  $height = $_POST['height'];

  // create two rectangle instances

  $longWall = new Rectangle();
  $shortWall = new Rectangle();

  $longWall->setX($height);
  $longWall->setY($length);
  $shortWall->setX($height);
  $shortWall->setY($width);

  // calculate total area
  $totalArea = (2 * $longWall->getArea()) + (2 * $shortWall->getArea());

  print("The total area is $totalArea square feet.");
  ?>
</body>
</html>