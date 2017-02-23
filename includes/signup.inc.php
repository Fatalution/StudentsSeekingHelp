<?php
// Connect to the database
include '../dbh.php';
session_start();

// Obtain the information the user entered
$email = $_POST['email'];
$password = $_POST['password'];
$uniYear = $_POST['uniYear'];

if(empty($email))
{
  header("Location: ../signup.php?error=empty");
  exit();
}
else if(empty($password))
{
  header("Location: ../signup.php?error=empty");
  exit();
}
else if(empty($uniYear))
{
  header("Location: ../signup.php?error=empty");
  exit();
}

$sql = "SELECT Email FROM user WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
$emailCheck = mysqli_num_rows($result);

if($emailCheck > 0)
{
  header("Location: ../signup.php?error=email");
  exit();	
}

else
{
  $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO user (Email, Password, Year)
        VALUES ('$email', '$encryptedPassword', '$uniYear')";
  $result = mysqli_query($conn, $sql);
}

// Go back to the main page
header("Location: ../login.php");