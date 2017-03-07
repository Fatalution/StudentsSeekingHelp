<?php 

// Connect to the database
include '../dbh.php';
session_start();

// Take the values entered by the user
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Decrypt the entered password
$sql = "SELECT * FROM user WHERE Email = '$email'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hashPassword = $row['Password'];
$hash = password_verify($password, $hashPassword);

// If the passwords don't match 
if($hash == 0)
{
  header("Location: ../login.php?error=incorrectpass");
  exit();
}

// If they do match
else 
{
  $sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$hashPassword'"; 
  $result = mysqli_query($conn, $sql);

  // If the user is not found in the database
  if(!$row = mysqli_fetch_assoc($result))
  {
    header("Location: ../login.php?error=incorrectpass");
    exit();
  }

  // If the user is found in the database
  else
  { 
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Admin'] = $row['Admin'];
    $_SESSION['Course_type'] = $row['Course_type'];
    $_SESSION['Name'] = $row['Name'];
    $_SESSION['Surname'] = $row['Surname'];
  }
}

// Go back to the login page
header("Location: ../user_page.php");