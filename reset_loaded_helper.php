<?php 
// Connect to the database
include 'dbh.php';
session_start();

echo '<script> console.log("Updating loaded helper"); </script>';

// Take the id from the post
$userID = $_POST['us_id'];

echo "<script> console.log('AAAAAA'); </script>";
// Find already loaded requests, set them to not loaded
$sql = "UPDATE subscribed_user_labs SET status = 'active' WHERE user_id = '$userID' AND status = 'active_loaded' ";
$result = mysqli_query($conn, $sql);