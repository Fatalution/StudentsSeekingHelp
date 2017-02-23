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
    else if(strpos($url, 'error=email') !== false)
    {
      echo "Email already exists!";
    }
  ?>
  <h1><a href="login.php">&ltSSH&gt</a></h1>
    <p> Sign up </p>
    <form action="includes/signup.inc.php" method="POST">
    Email: <br>
    <input type="email" name="email"><br>
    Password: <br>
    <input type="password" name="password"><br>
    Confirm password: <br>
    <input type="password" name="confirmPassword"><br>
    Year in university: <br>
    <input type="number" min="1" max="4" name="uniYear"><br>
    <input type="submit" value="Sign up">
    </form>
</body>
</html>

