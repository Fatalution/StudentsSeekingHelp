<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
  <title>&ltSSH-Students Seeking Help&gt</title>
</head>

<body>
    <p> Login </p>
    <form action="includes/login.inc.php" method="POST">
    Email: <br>
    <input type="email" name="email"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" value="Login"> <br>
    </form>

    <?php
      if(isset($_SESSION['ID']))
        echo $_SESSION['ID'];
      else 
      	echo "You are not logged in";
    ?>

    <p> Don't have an account ? <br>
        Sign up here: </p>
     <h1><a href="signup.php">&ltSIGN UP&gt</a></h1> <br>

     <form action="includes/logout.inc.php">
     	 <button>LOG OUT</button>
     </form>

</body>
</html>