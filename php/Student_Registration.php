<?php
/*$servername = "dbsrv2.cs.fsu.edu";
$username = "syed";
$password = "wpKe*A95XT";
$database = "halfakerdb";
$c = new mysqli($servername, $username, $password, $database);
if($c->connect_error)
{
	die("Connection failed " . $c->connect_error);
}
else
{
	echo ("Connected");
}*/

// Get User Info

$user_email = $_POST["Email"];
$user_username = $_POST["Uname"];
$user_pass = $_POST["pass"];
$user_confirm_pass = $_POST["cpass"];

$user_firstname = $_POST["fname"];
$user_lastname = $_POST["lname"];
$user_phone = $_POST["phone"];
$user_address = $_POST["address"];

echo $user_email . " ". $user_username . " " . $user_pass . " " . $user_firstname . " ". $user_lastname;




?>