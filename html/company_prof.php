<?php
    session_start();
    $username = 'root';
    $password = '';
    $dbname = 'ProjectPortal';
    $host = 'localhost';
    $conn = mysql_connect($host, $username, $password);
     mysql_select_db($dbname, $conn);
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM Company WHERE '$id' = id";
        $result = mysql_query($sql);
        if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
        }
        $row = mysql_fetch_row($result);
        $sql = "SELECT * FROM Projects WHERE '$id' = company_id";
        $projectResult = mysql_query($sql);
        if(!$projectResult)
        {
          $set = 0;
          $projectRow = "No projects";
          echo $set;
        }
        else
        {
          $set = 1;
          $projectRow = mysql_fetch_row($projectResult);
          $sql = "SELECT name FROM Student WHERE id = '$projectRow[1]'";
          $companyRow = mysql_query($sql);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <title>Company Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
        a {color: blue;}
        /*.Headers {font-size: 20px; color: #5e5e5e; padding: 10px}*/
    </style>

<body class="w3-light-grey">
<!-- Page Container -->

<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <!--<img src="" style="width:100%" alt="Avatar">-->

                </div>
                <div class="w3-container">
                    <h1><i class="fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[1] ?></h1>
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[8] ?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[6] ?></p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[2] ?></p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[3] ?></p>
                    <hr>


                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Company Mission</b></p>
                    <hr class="light text-center">
                    <div style="color:#f46242">
                        <p style="text-align:justify" ><?php echo $row[5] ?></p>
                    </div>
                    <p>Company Website</p>
                    <?php echo "<a href=https://www.google.com/#q=". $row[4] .">"; echo $row[4] ?> </a>
                    <hr>
                    <br>
                </div>
            </div><br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Current Available Projects</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>Project Title</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Start Date <span class="w3-tag w3-teal w3-round"></span></h6>
                    <h5 class="w3-opacity" id="DescriptionHeader"><b>Description</b></h5>
                    <p id="Description"></p>
                    <h5 class="w3-opacity" id="ParticipantsHeader"><b>Participants</b></h5>
                    <ul>
                        <li><a href="">Little_Johny</a></li>
                    </ul>
                    <hr>
                </div>
            </div>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find us on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

</body>
</html>