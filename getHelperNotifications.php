<?php
// Connect to the database
include 'dbh.php';
session_start();

echo '<script> console.log("I ENTERED"); </script>';

$userID = $_POST['us_id'];

// Select all the subscribed labs the user has found someone to help with
$sql = "SELECT * FROM  subscribed_user_labs WHERE user_id = '$userID' AND status = 'active'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
  // Obtain the variables from the database
  $lab_id = $row['lab_id'];
  $request_id = $row['id'];
  $help_request_id = $row['request_id'];

  echo '<script> var request_id = ' . $request_id . '</script>';
  echo '<script> var id = ' . $userID . '</script>';
  echo '<script> var help_request_id = ' . $help_request_id . '</script>';

  // Update the request entry to show that it is displayed
  $sql3 = "UPDATE subscribed_user_labs SET status = 'active_loaded' WHERE id = '$request_id' ";
  $result3 = mysqli_query($conn, $sql3);
  ?>

  <!-- Display the results --> 
  <p> YOU GOT MATCHED !!! </p>
  <p> YOU CAN HELP SOMEONE </p>
  <p> For lab: <?php echo $lab_id ?> </p>
  <p> Click accept in order to start a chat with this person</p>
  <button type = 'button' onClick = 'chatConfirmation2(help_request_id)'> Accept </button>

  <script>
    function chatConfirmation2(request_id) {
       console.log("user accepted. now lets update the table");
       var user = 2;
       $.ajax({
        type: 'post',
        url : 'includes/chatConfirm.php',
        data : {
        us_id : id,
        user_type : user,
        requestID : request_id,
       },
         success: function(response){
         //console.log("The whole response: " + response);
         $("body").append(response);
         //$('#response').html(response);
         //console.log("Successful");
        },
         failure: function(message){
          alert("It failed");
         }
      })
    }
  </script>

  <?php
  /*echo '<script> var lab_id = '. $lab_id .  '</script>';
  echo '<script> console.log("lab_id : " + lab_id); </script>';
  echo '<script> var helper_id = '. $helper_id .  '</script>';
  echo '<script> console.log("Helper id : " + helper_id); </script>';*/
}