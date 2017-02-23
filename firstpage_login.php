<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
session_start();
$emailError="";
$nameError="";
$message="";
require_once('config.inc.php');
$name=$_POST['yourname'];
$email=$_POST['email'];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 if(empty($name))
 {
  $nameError="Please enter your name";
 }
  $name_test= test_input($name);
  if(!preg_match("/^[a-zA-Z ]*$/",$name_test))
  { // check if name only contains alpha characters
    $nameError="Please use only letters and white spaces for name";
  }

if(empty($email))
{
  $emailError="Please input your email";
} else{
  //check if email is  valid
$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
  if (preg_match($pattern, $email) === 0) {
    // Michael Ruston Regex pattern

      $emailError = "Invalid email format";
   }
 }

$mysqli = new mysqli($database_host, $database_user, $database_pass, $group_dbnames);
 if($emailError=="" && $nameError=="" && (preg_match($pattern, $email)) )
 {
   $message="";
   $result = $mysqli->query("SELECT id FROM users WHERE user_name = '$name' AND email_adress='$email' ");
    if ($result ->num_rows == 0)
    {
      $message= "Your e-mail or password do not correspond to any account in our database";


   }//if num_rows==0
   else
   {
     $_SESSION['username'] = $name;
     header("Location: user_firstpage.php");
   }

  } //  else
echo $message;

  }

else
{
echo "<h1>".$emailError."</h1>";
echo "<h1>".$nameError."</h1>";


}
mysqli_close($mysqli);
?>
<h2><a href="index.html">Go back</a></h2>

</body>
