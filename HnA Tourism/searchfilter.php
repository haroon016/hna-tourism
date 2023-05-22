<?php 

include 'config.php';

session_start();

error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HnA tourism</title>
</head>
<body>
	<form action="view.php">
		<h1>Search by City</h1>
<input type="text" name="city" placeholder="Enter name of City">
<input type="submit" name="submit" value="GO">
</form>
</body>
</html>