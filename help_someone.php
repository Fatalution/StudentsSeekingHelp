<?php 
// Connect to the database
include 'dbh.php';
session_start();

// Get  user ID from the ajax function
$userID = $_POST['us_id'];

//search in subscribed labs if the person has subscribed to any labs
$sql = "SELECT * FROM subscribed_user_labs
        WHERE user_id = '$userID' AND status = 'not_active'";
$result = mysqli_query($conn, $sql);


//echo '<script> alert("fdsaf"); </script>';

//for each lab he is subscribed for we look to see if there is someone who needs help
while($row = mysqli_fetch_assoc($result))
{  
	$lab_id = $row['lab_id'];
	$us_id = $row['user_id'];
  $subscribedLabId = $row['id'];
  echo '<script> console.log("NEW SUBSCRIED LAB!!"); </script>';
  echo '<script> var labID = ' .$lab_id. '</script>';
  echo '<script> var usID = ' .$us_id. '</script>';
  echo '<script> console.log("labID : " + labID); </script>';
  echo '<script> console.log("usID : " + usID); </script>';


  
	//look into get help to get the first person who needs help with the current lab
	$sql2 = "SELECT * FROM  help_requests WHERE lab_id = '$lab_id' AND helper_id = '0' ";
	$result2 = mysqli_query($conn, $sql2);
  
	//if we have a person who needs help we get the first row and then do a query update on the get help table
    while($row2 = mysqli_fetch_assoc($result2))
    {
      echo '<script> console.log("Helpee found !!") </script>';
      $user_to_update = $row2['user_id'];
      $lab = $row2['lab_id'];
      ?> 
      <p> You can give help !! </p>
      <p> Helpee: <?php echo $user_to_update ?> </p>
      <p> Lab: <?php echo $lab ?> </p>
      <?php

      echo '<script> var userToUpdate = ' . $user_to_update . '</script>';
      echo '<script> console.log("Helpee id : " + userToUpdate); </script>';
      $sql3 = "UPDATE help_requests SET helper_id = '$us_id', status = 'pending' WHERE user_id = '$user_to_update' and lab_id ='$lab'";
      $result3 = mysqli_query($conn, $sql3);

      $sql3 = "UPDATE subscribed_user_labs SET status = 'active' WHERE id = '$subscribedLabId'";
      $result3 = mysqli_query($conn, $sql3);
      break;
    }
    
}
?>