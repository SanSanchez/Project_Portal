<?php
session_start();

$username = 'root';
$password = '';
$dbname = 'ProjectPortal';
$host = 'localhost';
$conn = mysql_connect($host, $username, $password);
 mysql_select_db($dbname, $conn);

 $id = $_GET['id'];
 $projname = $_POST['ProjName'];
 $projdescription = $_POST['Description'];
 $projdate = $_POST['date'];

 $sql = "INSERT INTO Projects(company_id, name, description, start_date) VALUES ('$id', '$projname', '$projdescription', '$projdate')";
 $result = mysql_query($sql);

 if(!$result)
 {
   echo "here";
   exit;
 }

 header("Location: ../html/company_prof.php");
?>
