<?php 
// Connect to the database
include 'dbh.php';
session_start();

echo '<script> console.log("Updating loaded"); </script>';

// Take the id from the post
$userID = $_POST['us_id'];

// Find already loaded requests, set them to not loaded
$sql = "UPDATE help_requests SET status = 'pending' WHERE user_id = '$userID' AND status = 'pending_loaded' ";
$result = mysqli_query($conn, $sql);