<?php
// Connect to the database
include '../dbh.php';
session_start();
?>

<!DOCTYPE html>
<html> 
<head>
  <title>Your lab page</title>
  <meta charset = "utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
  <div class = "container"> 
    <div class = "page-header">
      <?php
        // Obtain the name of the course
        $course = "COMP16112"; 
        echo "<h1 class = 'lead text-center'>" . "Your labs and lectures for " . $course . "</h1> <br>";
      ?>
    </div>
    <?php
         // Get all the labs from the course
         $sql = " SELECT * FROM labs WHERE course_id = '$course' "; 
  		 $result = mysqli_query($conn, $sql);

  		 // For each lab
  		 while ($row = mysqli_fetch_assoc($result))
  		 {
  		 	$labID = $row['id'];
  		 	$_SESSION['labID'] = $labID;
       ?>
  		   <input type="text" name="getId" id="<?php  echo $_SESSION['labID'];?>" />
       <?php
  		 	echo "<div class = 'well well-sm'>";

  		 	echo "<p class = 'lead'>" . " Topic: " . $row['topic'] . "</p>";
  		 	echo "<p> Date: " . $row['date'] . "</p>";
  		 	echo "<p> Description: " . $row['lab_description'] . "</p>";

  		 	echo "<form method = 'GET'>";
  		 	echo "<div class = 'btn-group'>";
  		 	echo "<button name = 'Get Help' type = 'button' onclick = 'getHelp()' class = 'btn btn-primary'> Get Help </button>";
  		 	echo "<button name = 'Give Help' type = 'button' onclick = 'giveHelp()' class = 'btn btn-primary'> Give Help </button>";
  		 	echo "</div>";
  		 	echo "</form>";

  		 	echo "</div>";
  		 }
      ?>
  </div>

  <script src="handleGetButton.js"></script>
  <script src="handleGiveButton.js"></script>
</body>
</html>