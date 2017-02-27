<?php 
  session_start();
?> 

<!DOCTYPE html>
<html>

<head>
  <title>&ltSSH-Students Seeking Help&gt</title>
</head>

<body>
  <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'error=empty') !== false)
    {
      echo "Fill out all fields!";
    }
    else if(strpos($url, 'error=emailexists') !== false)
    {
      echo "Email already exists!";
    }
    else if(strpos($url, 'error=passmatch') !== false)
    {
      echo "You didn't confirm you password correctly";
    }
    else if(strpos($url, 'error=manchesteremail') !== false)
    {
      echo "Please enter your University of Manchester email";
    }
    else if(strpos($url, 'error=emailformat') !== false)
    {
      echo "The email is not valid";
    }

  ?>

  <h1><a href="login.php">&ltSSH&gt</a></h1>
    <p> Sign up </p>

    <form action="includes/signup.inc.php" method="POST">
    First name: <br> 
    <input type = "text" name = "name"><br>
    Last name: <br> 
    <input type = "text" name = "surname"><br>
    Email: <br>
    <input type = "email" name = "email"><br>
    Password: <br>
    <input type = "password" name = "password"><br>
    Confirm password: <br>
    <input type = "password" name = "confirmPassword"><br>
    Year in university: <br>
    <input type = "number" min = "1" max ="4" name="uniYear"><br>
    Course type: <br> 
    <input list="programmes" name = "programme">
    <datalist id="programmes">
      <option value="Computer Science">
      <option value="Computer Sceince and Mathematics">
      <option value="Computer Science and Business">
      <option value="Human Computer Interaction">
    </datalist> 
    <input type="submit" value="Sign up">
    </form>

</body>
</html>

