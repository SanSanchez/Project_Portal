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
        $sql = "SELECT * FROM Student WHERE '$id' = id";
        $result = mysql_query($sql);
        if (!$result) {
        echo 'Could not run query: ' . mysql_error();
        exit;
        }
        $row = mysql_fetch_row($result);

        $sql = "SELECT * FROM Projects WHERE '$id' = student_id";
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
            $projectRow =  mysql_fetch_row($projectResult);
            $sql = "SELECT name FROM Company WHERE id = '$projectRow[2]'";
            $companyResult = mysql_query($sql);

            if(!$companyResult)
            {

            }
            else
            {
                $companyRow = mysql_fetch_row($companyResult);

            }

           
        }
    }

    


?>

<!DOCTYPE html>
<html>
<title>Student Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/button.css" >
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
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
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        
                    </div>
                </div>
                <div class="w3-container">
                    <h1><i class="fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[0] . " " . $row[3];?></h1>
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[10]?></p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[17]?></p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[1]?></p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row[4]?></p>
                    <hr>

                    <!--<p>Perhaps programming languages go here</p>-->


                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Proficient Languages</b></p>
                    <p><?php echo $row[14]?></p>
                    <p><?php echo $row[15]?></p>
                    <p><?php echo $row[16]?></p>
					<hr>
					<a href="#" class="button"><span>✓</span>View Open Projects</a>
                    <br>
                </div>
            </div><br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b><?php echo $row[9] . " " . $row[10]?></b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row[11]?> - <span class="w3-tag w3-teal w3-round"><?php echo $row[12]?></span></h6>
                    <p><?php echo $row[13]?></p>
                    <hr>
                </div>
                </div>

            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b><?php echo $row[5]?></b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row[7]?> - <span class="w3-tag w3-teal w3-round"><?php echo $row[8]?></span></h6>
                    <p><?php echo $row[6]?></p>
                    <hr>
                </div>
            </div>

            <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-trophy fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b><?php if($set == 1) {echo $projectRow[3];} else{echo $projectRow;}?></b></h5>
                    <p><?php if($set == 1) {echo $companyRow[0];} else{echo $projectRow;}?></p>
                    <p><?php if($set == 1) {echo $projectRow[4];} else{echo $projectRow;}?></p>
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
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

</body>
</html>
