<?php
// Connect to the database
include 'dbh.php';
session_start();

echo '<script> console.log("I ENTERED"); </script>';

$userID = $_POST['us_id'];

// Look for the help requests from the user
$sql = "SELECT * FROM  help_requests WHERE user_id = '$userID' AND helper_id != '0' AND status = 'pending'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
  // Obtain the variables from the database
  $helper_id = $row['helper_id'];
  $lab_id = $row['lab_id'];
  $request_id = $row['id'];

  // Update the request entry to show that it is displayed
  $sql3 = "UPDATE help_requests SET status = 'pending_loaded' WHERE id = '$request_id' ";
  $result3 = mysqli_query($conn, $sql3);
  ?>

  <!-- Display the results --> 
  <p> YOU GOT MATCHED !!! </p>
  <p> You will get help from : <?php echo $helper_id ?> </p>
  <p> For lab: <?php echo $lab_id ?> </p>

  <?php
  echo '<script> var lab_id = '. $lab_id .  '</script>';
  echo '<script> console.log("lab_id : " + lab_id); </script>';
  echo '<script> var helper_id = '. $helper_id .  '</script>';
  echo '<script> console.log("Helper id : " + helper_id); </script>';
}