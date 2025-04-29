<?php
	session_start();
?>
<!--Author: Daniel Filz
	Date: 01/14/2025
		File:	raffle.php
		Purpose: Example of a Web Session

-->

<html>
<head>
	<title>RAFFLE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
	$_SESSION['fullName'] = $_POST['fullName'];
	$_SESSION['city'] = $_POST['city'];
	$ticketNum = $_POST['ticketNum'];

	if ($ticketNum == "2178")
	{
		print("<h1>".$_SESSION['fullName'].", you won!!</h1>");
		print("<form action = \"choose-prize.php\" method = \"post\" >
				<label>Choose a prize: 
				<select name = \"prize\"> 
				<option>New TV</option>
				<option>New Laptop</option>
				<option>Nintendo Switch</option>
				</select></label>
			<input class = \"submit\" type = \"submit\" value = \"How to Collect Your Prize\">
			</form>");
	}
	else 
		print("<h1>Sorry ".$_SESSION['fullName'].", you didn't win anything - better luck next time..</h1>");
?>	
</body>
</html>
