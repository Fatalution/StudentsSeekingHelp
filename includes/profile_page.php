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

echo "This is your profile page" . "<br>";
echo "Your name is : " . $name . "<br>";
echo "Your surname is : " . $surname . "<br>";
echo "Your database ID is: " . $ID . "<br>";
echo "Your email is: " . $email . "<br>";
echo ($isAdmin) ? "You are an admin" : "You are not an admin" . "<br>";
echo "Your course is : " . $course . "<br>";

