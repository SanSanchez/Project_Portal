<?php
$username = 'id1475524_project';
    $password = 'project123';
    $dbname = 'id1475524_projectportal';
    $host = 'localhost';
$c = new mysqli($servername, $username, $password, $database);
if($c->connect_error)
{
	die("Connection failed " . $c->connect_error);
}
else
{
	echo ("Connected");
}

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


//Verify Password

if($user_pass != $user_confirm_pass)
{
    echo("ERROR: Passwords do not match\n");
}

$rows = $c->query("SELECT COUNT(email) FROM user WHERE $user_email = email");

//Make sure user doesn't already exist

if($rows > 0)
{
	echo("ERROR: user already registered\n");
}

else
{

    if($c->query("INSERT INTO Company(password, firstname, lastname, email, phone)
        VALUES ('$user_pass', '$user_firstname', '$user_lastname', '$user_email', '$user_phone')"))
    {
        echo "Successfull entered ". $user_firstname . " into DB!\n";
    }
    else
    {
        echo "Failed to insert ". $user_firstname . " into DB\n";
    }
}

//Need to direct user to next page, wherever we decide that is //

?>