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
  <link rel="stylesheet" href="css/signup.css">

  <script src="js/ie-emulation-modes-warning.js"></script>
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

  <div class="container">
    <div class="row">
      <div class="Absolute-Center is-Responsive">
        <div id="logo-container"></div>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
          <form action="includes/signup.inc.php" method="POST" id="loginForm">
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" type="text" name='name' placeholder="name"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input class="form-control" type="text" name='surname' placeholder="surname"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input class="form-control" type="email" name='email' placeholder="email"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input class="form-control" type="password" name='password' placeholder="password"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input class="form-control" type="password" name='confirmPassword' placeholder="confirm password"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
              <input class="form-control" type="number" min = "1" max ="4" name="uniYear" placeholder="year in university"/>
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
              <input class="form-control" list="programmes" name='programme' placeholder="select course"/>
              <datalist id="programmes">
                <option value="Computer Science">
                <option value="Computer Sceince and Mathematics">
                <option value="Computer Science and Business">
                <option value="Human Computer Interaction">
              </datalist>
            </div>
            <div class="form-group">
              <button type="submit" value="Sign up" class="btn btn-def btn-block">Sign up</button>
            </div>
          </form>
          Already a member?
            Login here:
            <div>
              <button type="button" class="btn btn-def btn-block"><a href="login.php">Log in</a></button>
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
