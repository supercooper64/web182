<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 01/14/2025
	File:	 my-info.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>My Address</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

<?php
        $myinfo = array(
            "first_name" => "Daniel",
            "last_name" => "Filz",
            "street_address" => "456 Elm St",
            "city" => "Springfield",
            "state" => "IL",
            "zip" => "62701",
            "email" => "danielfilz@example.com",
            "phone" => "987-654-3210"
        );

        echo $myinfo['first_name'] . " " . $myinfo['last_name'] . "," . "<br>";
        echo $myinfo['street_address'] . "," . "<br>";
        echo $myinfo['city'] . ", " . $myinfo['state'] . " " . $myinfo['zip'];
    ?>
</body>
</html>
