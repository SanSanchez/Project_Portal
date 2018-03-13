<?php
session_start();

$username = 'id1475524_project';
    $password = 'project123';
    $dbname = 'id1475524_projectportal';
    $host = 'localhost';
$conn = mysql_connect($host, $username, $password); 
 mysql_select_db($dbname, $conn);

 $projID = $_GET['proj_id'];
 $studID = $_GET['stud_id'];

 $sql = "UPDATE Projects SET student_id = $studID WHERE '$projID' = proj_id";
 $result = mysql_query($sql);

 header("Location: ../../ProjectPortal/html/Student_Prof.php");

?>