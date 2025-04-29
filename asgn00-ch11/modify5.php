<!DOCTYPE html>
<!--Author: Daniel Filz
    Date: 01/07/2025
    File: modify5.php
    Purpose: Chapter 11 Exercise

    modify5.php calculates the total income from each of your Web programming contracts. The income amounts are first assigned to an array named $income and the total is $32,800.00. The program would be MUCH more useful if the income amounts were read from a file into the array. That way you can add numbers to the file as you complete new contracts, and the program will still work without changes. 
    
    Your chapter folder includes a file named contracts.txt that contains the amounts received from each contract (one number to each line). Change modify5.php so that it reads the values from the contracts.txt file into the array instead of assigning the values directly. Use a WHILE NOT FEOF loop so that your solution will work no matter how many numbers are stored in the contracts.txt file. The total should now be $34,600.00.
    
    Note that the code to calculate the total of the values in the array does not need to be changed. 
-->

<html>

<head>
  <title>Modify 5</title>
  <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>
  <h1>INCOME FROM WEB CONTRACTS</h1>

  <?php

  // Open the file for reading
  $file = fopen("contracts.txt", "r");

  // Initialize the income array
  $income = array();

  // Read the file line by line until the end of the file
  while (!feof($file)) {
    $line = fgets($file);
    if ($line !== false) {
      $income[] = (float)$line;
    }
  }

  // Close the file
  fclose($file);

  // The following code does not need to be changed
  $total = 0;
  for ($i = 0; $i < sizeof($income); $i = $i + 1) {
    $total = $total + $income[$i];
  }

  print("<p>Total income is $".$total."</p>");

  ?>
</body>

</html>