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
$sql = "INSERT INTO help_requests (user_id, lab_id, helper_id, status)
        VALUES ('$userID', '$labID', '0', 'unresolved')";
$result = mysqli_query($conn, $sql);
echo "<script>console.log( 'Debug Objects: " . $result . "' );</script>";

$sql_getID = "SELECT id FROM help_requests WHERE user_id = '$userID' AND lab_id = '$labID'";
$result_getID = mysqli_query($conn, $sql_getID);

if($result_getID)
 while ($row = mysqli_fetch_assoc($result_getID))
 {
 	$request_id = $row['id'];
 	break;
 }
echo "<script>console.log('request_id is " .$request_id. "');</script>";
$sql_update = "INSERT INTO chat(request_id) VALUES('$request_id')";
$results_update = mysqli_query($conn, $sql_update);
?> 