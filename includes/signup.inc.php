<?php
// Connect to the database
include '../dbh.php';
session_start();

// Obtain the information the user entered
$email = $_POST['email'];
$password = $_POST['password'];
$uniYear = $_POST['uniYear'];
$confirmPassword = $_POST['confirmPassword'];

// ERROR HANDLING  

// Check if any of the fields is empty
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

// Check if the user confirmed the password correctly
else if($password != $confirmPassword)
{
  header("Location: ../signup.php?error=passmatch");
  exit();
}

// Check if the email already exists
$sql = "SELECT Email FROM user WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
$emailCheck = mysqli_num_rows($result);

if($emailCheck > 0)
{
  header("Location: ../signup.php?error=emailexists");
  exit();	
}

// Check if the email format is valid
else if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
{
  header("Location: ../signup.php?error=emailformat");
  exit();
}

// Check if it is an UoM email
if(strlen($email) <= 17 or substr($email, -17) != "@manchester.ac.uk")
{
  header("Location: ../signup.php?error=manchesteremail");
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