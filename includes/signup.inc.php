<?php
// Connect to the database
include '../dbh.php';
session_start();

// Obtain the information the user entered
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = $_POST['email'];
$uniYear =  mysqli_real_escape_string($conn, $_POST['uniYear']);
$programme =mysqli_real_escape_string($conn, $_POST['programme']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$surname =mysqli_real_escape_string($conn, $_POST['surname']);
$confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
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
else if(empty($programme))
{
  header("Location: ../signup.php?error=empty");
  exit();
}
else if(empty($name))
{
  header("Location: ../signup.php?error=empty");
  exit();
}
else if(empty($surname))
{
  header("Location: ../signup.php?error=empty");
  exit();
}

// Check if the user confirmed the password correctly
if($password != $confirmPassword)
{
  header("Location: ../signup.php?error=passmatch");
  exit();
}


// Check if the username already exists
$sql = "SELECT Email FROM user WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
$emailCheck = mysqli_num_rows($result);

if($emailCheck > 0)
{
  header("Location: ../signup.php?error=emailexists");
  exit();	
}

// Check if the username format is valid
if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
{
  header("Location: ../signup.php?error=emailformat");
  exit();
}


// Check if it has the prefix of an UoM username
if(strlen($email) <= 25 or substr($email, -25) != "@student.manchester.ac.uk")
{
  header("Location: ../signup.php?error=manchesteremail");
  exit(); 
}

/*
echo strtolower($name);
echo strtolower($surname);
echo $username;
echo strpos($username, strtolower($name));

// Check if the name and surname are found in the username
if(strpos($username, strtolower($name)) !== True or strpos($username, strtolower($surname)) !== True)
{
  header("Location: ../signup.php?error=manchesterusername");
  exit(); 
} 
*/ 

else
{
  $encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO user (Email, Password, Admin, Course_type, Name, Surname)
          VALUES ('$email', '$encryptedPassword', 0, '$programme', '$name', '$surname')";
  $result = mysqli_query($conn, $sql);
} 

// Go back to the main page
header("Location: ../login.php"); 