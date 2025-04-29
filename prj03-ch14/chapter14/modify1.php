<!DOCTYPE html>
<!--Author: Daniel Filz
	Date: 03/11/2025
	File:	  modify1.php
	Purpose:  This program lists the complete names and job titles of all employees with the last name of King or Jones.
-->
<html>
<head>
	<title>Modify 1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 1 </h1>
<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect)
{
	die("ERROR: Cannot connect to database $db on server $server
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
else
{
	$userQuery = "SELECT firstName, lastName, jobTitle FROM personnel WHERE lastName IN ('King', 'Jones')";
	$result = mysqli_query($connect, $userQuery);

	if (!$result)
	{
		die("Could not successfully run query ($userQuery) from $db: " . mysqli_error($connect) );
	}

	if (mysqli_num_rows($result) == 0)
	{
		print("No records found with query $userQuery");
	}
	else
	{
		 while ($row = mysqli_fetch_assoc($result))
		{
			print (	"<p>".$row['firstName']." ".$row['lastName']."'s job title is ".
			$row['jobTitle']."</p>");
		}

	}
     mysqli_close($connect);   // close the connection
}
?>
</body>
</html>