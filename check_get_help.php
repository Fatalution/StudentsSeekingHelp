<?php 
// Connect to the database
include '../dbh.php';
session_start();

// Get  user ID from the ajax function
$userID = $_POST['us_id'];

//search in subscribed labs if the person has subscribed to any labs
$sql = "SELECT * FROM subscribed_user_labs WHERE user_id = '$userID'";
$result = mysqli_query($conn, $sql);

//for each lab he is subscribed for we look to see if there is someone who needs help
while($row = mysqli_fetch_assoc($result))
{  
	$lab_id = $row['lab_id'];
	$us_id - $row['user_id'];
	echo '<script>console.log($lab_id);</script>'; 
	echo '<script>console.log($us_id);</script>'; 
	//look into get help to get the first person who needs help with the current lab
	$sql2 = "SELECT * FROM  help_request WHERE lab_id = '$lab_id' AND helper_id = '0' AND done = '0'";
	$result2 = mysqli_query($conn, $sql2);
	//if we have a person who needs help we get the first row and then do a query update on the get help table
    if(mysqli_num_rows($result2) > 0)
    {
      $row2 = mysqli_fetch_assoc($result2);
      $user_to_update = $row2['user_id'];
      $lab = $row2['lab_id'];
      $sql3 = "UPDATE help_requests SET helper_id = '$us_id' WHERE user_id = '$user_to_update' and lab_id ='$lab'";
      $result3 = mysqli_query($conn, $sql3);
    }
    


}


?>