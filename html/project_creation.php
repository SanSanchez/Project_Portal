<?php
session_start();
$username = 'root';
$password = '';
$dbname = 'ProjectPortal';
$host = 'localhost';
$conn = mysql_connect($host, $username, $password);
 mysql_select_db($dbname, $conn);
 $id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Project Creation</title>
        <link rel="stylesheet" href="../css/project_creation.css">
        <script href="../js/project_creation.js"></script>

    </head>
    <body>
        <div id="form-main">
            <div id="form-div">
                <?php echo "<form id=\"form1\" action=\"../php/project_creation.php?id=$id\" method=\"post\">"?>

                        <label class="Labels" for="ProjName">Project Name</label>
                        <input name="ProjName" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="ProjName" />

                         <label class="Labels" for="Description">Project Description</label>
                        <textarea name="Description" class="validate[required,length[6,300]] feedback-input" id="Description"></textarea>

                        <div class="nativeDatePicker">
                            <label class="Labels" for="date">Enter Date</label>
                            <input type="date" id="date" name="date">
                            <span class="validity"></span>
                        </div>

                    <div class="submit">
                        <input type="submit" value="Submit" id="SubmitButton"/>
                        <div class="ease"></div>
                    </div>
                      <!--  </div> -->
                </form>
            </div>
        </div>
    </body>
</html>