<?php 

// Connect to the database
include '../dbh.php';
session_start();

// Take the values entered by the user
$email = $_POST['email'];
$password = $_POST['password'];

// Run a query to find the user in the database
//$sql = "SELECT * FROM users
  //      WHERE Email = '$email' AND Password = '$password'";
$sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";

$result = mysqli_query($conn, $sql);

// If the user is found in the database
if(!$row = mysqli_fetch_assoc($result))
{
  echo "Your username or password is incorrect!";
}

// If the user is found in the database
else
{ 
  $_SESSION['ID'] = $row['ID'];
  echo "You are logged in!";
}

// Go back to the login page
header("Location: ../login.php");