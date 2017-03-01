<?php
// Connect to the database
include '../dbh.php';
session_start();

// Take the variables from the session
$ID = $_SESSION['ID'];
$email = $_SESSION['Email'];
$isAdmin = $_SESSION['Admin'];
$course = $_SESSION['Course_type'];
$name = $_SESSION['Name'];
$surname = $_SESSION['Surname'];

?> 

<!DOCTYPE html>
<html>
<head>
	<title> Profile page </title>
</head>

<body>
  This is 
</body>
</html>

