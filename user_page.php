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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <p class="lead">Your courses</p>
                <div class="list-group">
                  <?php
                    $courseType = $_SESSION['Course_type'];

                    echo $courseType;
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

            
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
