<?php
session_start();
$username = 'root';
$password = '';
$dbname = 'ProjectPortal';
$host = 'localhost';


$c = new mysqli($host, $username, $password, $dbname); 


if($c->connect_error) 
{ 
	echo "Connection failed" . $c->connect_error; 
} 
else 
{ 
	echo "Connected";
} 

$email = $_POST["Email"];
$uname = $_POST["Uname"];
$pass = $_POST["pass"];
$confirm = $_POST["cpass"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$addr = $_POST["address"];
$rows = $c->query("SELECT COUNT(email) FROM Student WHERE '$email' = email");

//confirm the passwords
if(strcmp($pass,$confirm) !== 0)
{
	echo "ERROR: Passwords do not match\n";
}

//prevents duplicate users
elseif($rows > 0)
{
	echo "ERROR: This email has already been used\n";
}

else
{
	if($c->query("INSERT INTO Student(fname, email, password, lname,  phone)VALUES ('$fname', '$email','$pass','$lname', '$phone')"))
	{
		$SESSION["id"] = $c->query("SELECT id FROM Student WHERE '$email' = email");;
		header("Location: ../../html/Student_Prof.php");
	}
	else
	{
		echo "An error occured creating ". $fname . "'s account\n";
	}
}

?>
