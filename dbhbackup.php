<?php

//Connect to the local database
$dbname = 'SSH';
$conn = mysqli_connect('127.0.0.1', 'root', 'root', $dbname, '8889');

// If connection failed, display the connection error
if(!$conn)
{
	echo "SHITFUCK:" . $dbname;
	die("Connection failed: " . mysqli_connect_error());
}

?>
