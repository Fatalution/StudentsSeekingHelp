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

  <!-- Custom styles for this template -->
  <link href="../css/labs_page.css" rel="stylesheet">

 <!-- javascript -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
  <div class = "container">
    <div class = "page-header">
      <?php
        // Obtain the name of the course
        $course = $_GET['courseType'];
        //$course = "COMP16121";
        //echo $course;
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
            ?>
            <div class = "well">
              <p id='response'></p>
              <p class = 'lead'>  Topic :  <?php echo $row['topic']; ?> </p>
              <p> Date: <?php echo $row['date'] ?></p>
              <p> Description: <?php echo $row['lab_description'] ?> </p>
              <form method = 'POST'>
                <div class = 'btn-group' id = 'buttonGroup'>
                  <button name = 'Get Help' id="get" class="editedGetHelp" type ="button" class ='btn btn-primary' value =' <?php echo $labID;?>' > Get Help </button>
                  <button name = 'Give Help' id="give" class="editedGiveHelp" type = 'button'  class = 'btn btn-primary' value =' <?php echo $labID;?>'> Give Help </button>
                </div>
              </form>
            </div>
       <?php
       }
     ?>

  <script>
   $( document ).ready(function() {

     // Method called when the get help is pressed
     function getHelp(lab_id) {
       var id = lab_id;
       //console.log("asd" + id);
       $.ajax({
         type: 'post',
         url : 'get.php',
         data : {
           lab_id : id,
         },
         success: function(response){
          $('#response').html(response);
        }
      })
     }

     // Method called when the give help is pressed
     function giveHelp(lab_id) {
       var id = lab_id;

       $.ajax({
         type: 'post',
         url : 'give.php',
         data : {
           lab_id : id,
         },
         success: function(response){
          $('#response').html(response);
        }
      })
     }


  // Action listener for the button
  $("button").click(function(){
    var id = $(this).val();

    // If the user pressed the get help button
    if (($(this)).attr("id")== "get")
    {
      getHelp(id);
      alert("Help requested successfully");

      /*
      document.getElementById("get").disabled = true;
      document.getElementById("give").disabled = true;*/
    }

    // If the user pressed the give help button
    else if (($(this)).attr("id")== "give")
    {
      giveHelp(id);
      alert("You requested to give help successfully");

      /*
      document.getElementById("get").disabled = true;
      document.getElementById("give").disabled = true; */
    }
  });
});


   </script>
</body>
</html>
