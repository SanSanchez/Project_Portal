<?php
session_start();
    $username = 'root';
    $password = '';
    $dbname = 'ProjectPortal';
    $host = 'localhost';
    $conn = mysql_connect($host, $username, $password);
     mysql_select_db($dbname, $conn);

     $sql = "SELECT * FROM Projects";
     $result = mysql_query($sql);
     if(!$result)
     {
        echo "FAIL";
     }
     $studentID = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Project List</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/button.css" >
    </head>

    <body>
    <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-trophy fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
        <div id="List_Item">
        
        <?php 
            $array = array();
            while($row = mysql_fetch_array($result))
            {
                echo "<div class=\"w3-container w3-card-2 w3-white w3-margin-bottom\">";
                $projID = $row[0];
                $companyID = $row['company_id'];
                array_push($array, $companyID);
                $q = "SELECT name FROM Company WHERE id = '$companyID' ";
                $r = mysql_query($q);
                $companyName = mysql_fetch_row($r);
                echo "<form action=\"../../ProjectPortal/php/addproject.php?proj_id=$projID&stud_id=$studentID\" method=\"POST\">";
                echo "<p id=\"ProjName\">" .$row['name'] . "</p>";
                echo "<p id=\"CompName\">" .$companyName[0] . "</p>";
                echo "<p id=\"Description\">" .$row['description'] . "</p>";
                echo "<input type=\"submit\" name=$projID id=\"add_button\" value=\"Apply\">";
                echo "</form>";
                echo "</div>";

            }

        ?>
        
        </div>
        </div>
    <!--End List Items-->
    </body>
</html>
