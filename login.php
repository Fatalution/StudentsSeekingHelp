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

    <div class="container">
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <div id="logo-container"></div>
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <form action="includes/login.inc.php" method="POST" id="loginForm">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input class="form-control" type="email" name='email' placeholder="email"/>
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" name='password' placeholder="password"/>
              </div>
              <div class="form-group">
                <button type="submit" value="Login" class="btn btn-def btn-block">Login</button>
              </div>
              Don't have an account ? <br>
              Join the community:<br>
              <div class="form-group">
                <button type="button" class="btn btn-def btn-block"><a href="signup.php">Sign up</a></button>
              </div>
              <form action="includes/logout.inc.php">
       	        <button type="button" class="btn btn-def btn-block">Log out</button><br>
              </form>
            </form>
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
