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
        echo $id;
        $sql = "SELECT * FROM Company WHERE '$id' = id";
        $result = mysql_query($sql);
        if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
        }
        $row = mysql_fetch_row($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
        <html>
        <title>Company Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
            a {color: blue;}
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
                    <div class="w3-display-bottomleft w3-container w3-text-blue" >
                        <h2><?php echo $row[3]?></h2>
                    </div>
                </div>
                <div class="w3-container">
                    <h1><i class="fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[1] ?></h1>
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Investment  Company</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>New York, New York</p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>leopardinvestors@gmail.com</p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>(321)506-5343</p>
                    <hr>


                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Company Mission</b></p>
                    <hr class="light text-center">
                    <div style="color:#f46242">
                        <p style="text-align:justify" >	Leopard Investments Inc, Founded in 1894, Ameriprise offers wealth advice and management, annuities and protection and asset management. It is globally active, with offices in the US, Europe and Asia-Pacific. Our main invenstment services forcus on technology and engineering innovations. </p>
                    </div>
                    <p>Company Website</p>
                    <a href="https://www.google.com"> www.leopardinvestors.com </a>
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
                    <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
                    <hr>
                </div>
            </div>
            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Current Participants</h2>
                <div class="w3-container">
                    <h3>Profile</h3>
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
