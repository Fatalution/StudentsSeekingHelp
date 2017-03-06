<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>&ltSSH-Students Seeking Help&gt</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <?php
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if(strpos($url, 'error=incorrectpass') !== false)
      {
        echo "Incorrect username or password";
      }
    ?>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="panel panel-success">
            <div class="panel heading">Login</div>
            <div class="panel body fixed-panel">
              <form action="includes/login.inc.php" method="POST">
                Email:<br>
                <input type="email" name="email"><br>
                Password:<br>
                <input type="password" name="password"><br>
                <input type="submit" class="btn btn-primary btn-lg" value="Login"><br>
              </form>

            <?php
            if(isset($_SESSION['ID']))
              echo $_SESSION['ID'];
            else
      	      echo "You are not logged in";
            ?>

            Don't have an account ? <br>
            Sign up here:<br>
            <button type="button" class="btn btn-primary btn-lg"><a href="signup.php">&ltSIGN UP&gt</a></button>
            <form action="includes/logout.inc.php">
     	        <button type="button" class="btn btn-primary btn-lg">LOG OUT</button><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
