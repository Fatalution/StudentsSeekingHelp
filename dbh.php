<?php

//Connect to the local database
$conn = mysqli_connect('localhost', 'root', '', 'groupproject');

// If connection failed, display the connection error
if(!$conn)
{
	die("Failed to connect: " . mysqli_connect_error());
}
