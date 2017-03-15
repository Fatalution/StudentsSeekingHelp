<?php
// Connect to the database
include 'dbh.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>user page</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user_page.css">
    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Page Content -->
    <div class ="header" style="padding-top:100px;">
        <div class ="row">



            </div>

        </div>
    </div>
    <div class="container" style="padding-top:60px">

        <div class="row">

            <div class="col-md-3">
              <div class="list-group">
              <?php
                $courseType = $_SESSION['Course_type'];
                echo '<span>' . $courseType . '</span>';
                ?>
                <p class="lead">Your courses:</p>
                  <?php
                    switch($courseType)
                    {
                      case "Computer Science":
                      //echo 1;
                      $sql = " SELECT * FROM courses WHERE ComputerScience = '1' ";
                      //echo 2;
                      break;

                      case "Computer Science and Mathematics":
                      $sql = " SELECT * FROM courses WHERE 'ComputerScienceAndMathematics'  = '1' ";
                      break;

                      case "Computer Science and Business":
                      $sql = " SELECT * FROM courses WHERE 'ComputerScienceAndBusiness' = '1' ";
                      break;

                      case "Human Computer Interaction":
                      $sql = " SELECT * FROM courses WHERE 'HumanComputerInteraction' = '1' ";
                      break;
                    }

                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                      //$_SESSION['course'] = $row['Name'];
                      $courseName = $row['Name'];
                      //echo $courseName;
                      echo "<a class='list-group-item' href='includes/labs_page.php?courseType=".$courseName."'>". $row['Name'] . "</a>";
                    }
                  ?>
                </div>
            </div>

  <script>
  	$( document ).ready(function() {
  	//alert("Function is called!");
  	var id ='<?php echo $_SESSION['ID'];?>';
    console.log("ID: " + id);

	function helpSomeone() {

       $.ajax({
         type: 'post',
         url : 'help_someone.php',
         data : {
           us_id : id,
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

     function getNotifications() {

       console.log("Search started");
       $.ajax({
         type: 'post',
         url : 'get_notifications.php',
         data : {
           us_id : id,
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

      //giveHelpSearch();
      //getHelpSearch();
	  setInterval(helpSomeone, 10000);
	  setInterval(getNotifications, 10000);

   });
  	//alert("Php ends");
  </script>
</body>

</html>
