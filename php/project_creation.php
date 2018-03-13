<?php
session_start();

$username = 'root';
$password = 'mysql';
$host = 'localhost';
$db_name = "project_portal";
$conn = mysqli_connect($host, $username, $password);

$id = $_GET['id'];
$projname = $_POST['ProjName'];
$projdescription = $_POST['Description'];
$projdate = $_POST['date'];

$sql = "INSERT INTO Projects(company_id, name, description, start_date) VALUES ('$id', '$projname', '$projdescription', '$projdate')";
$result = mysqli_query($conn, $sql);

if(!$result)
{
echo "here";
exit;
}

header("Location: ../html/company_prof.php");
?>