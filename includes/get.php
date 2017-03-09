<?php 
// Connect to the database
include '../dbh.php';
session_start();

// Get the lab and user ID from the session
$labID = $_POST['lab_id'];
$userID = $_SESSION['ID'];

echo "<script>console.log( 'Debug Objects: " . $labID . "' );</script>";
echo "<script>console.log( 'Debug Objects: " . $userID. "' );</script>";
// Insert the request in the database
$sql = "INSERT INTO help_requests (user_id, lab_id, helper_id)
        VALUES ('$userID', '$labID', '0')";
$result = mysqli_query($conn, $sql);
echo "<script>console.log( 'Debug Objects: " . $result . "' );</script>";
?>