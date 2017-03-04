<?php 
// Connect to the database
include '../dbh.php';
session_start();

// Get the lab and user ID from the session
$labID = $_SESSION['labID'];
$userID = $_SESSION['ID'];

// Insert the request in the database
$sql = "INSERT INTO help_requests (user_id, lab_id)
        VALUES ('$userID', '$labID')";
$result = mysqli_query($conn, $sql);
?>