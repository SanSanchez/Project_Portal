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
        <link rel="stylesheet" href="../css/project_list.css">
    </head>

    <body>
        <div id="List_Item">
        <?php 
            $array = array();
            while($row = mysql_fetch_array($result))
            {
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
                echo "<input type=\"submit\" name=$projID id=\"add_button\">";
                echo "</form>";

            }

        ?>
            
        </div>
    <!--End List Items-->
    </body>
</html>