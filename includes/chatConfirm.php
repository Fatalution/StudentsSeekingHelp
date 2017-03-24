<?php
// Connect to the database
include '../dbh.php';
session_start();

// Take the input from POST
$user_type = $_POST['user_type'];
$userID = $_POST['us_id'];
$request_id = $_POST['requestID'];


if($user_type == '1')
  {$sql = "UPDATE chat SET user1_id = '$userID' WHERE request_id = '$request_id'";
   echo '<script> console.log("Tinashe apashe"); </script>';}
else
  {$sql = "UPDATE chat SET user2_id = '$userID' WHERE request_id = '$request_id'";
  echo '<script> console.log("Tinashe fsdfds"); </script>';}

$result = mysqli_query($conn, $sql);
echo '<script> var katyPerry = ' . $result . '</script>';
echo '<script> console.log(katyPerry);';