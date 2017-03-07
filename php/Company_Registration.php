<?php
$servername = "dbsrv2.cs.fsu.edu"; 
$username = "syed"; 
$password = "wpKe*A95XT"; 
$database = "halfakerdb"; 
$c = new mysqli($servername, $username, $password, $database);

if($c->connect_error)
{
<<<<<<< HEAD
	die("Connection failed " . $c->connect_error);
}
else
{
	echo ("Connected");
=======
    die("Connection failed " . $c->connect_error);
}
else
{
    echo ("Connected");
>>>>>>> ab81c706d6e673830c4469310d9491a74959ed31
}

// Get Company Info

$company_email = $_POST["Email"];
$company_name = $_POST["Uname"];
$company_pass = $_POST["pass"];
$company_confirm_pass = $_POST["cpass"];
$company_phone = $_POST["phone"];


//Verify Password

if($company_pass != $company_confirm_pass)
{
    echo("ERROR: Passwords do not match\n");
}

$rows = $c->query("SELECT COUNT(email) FROM Company WHERE $company_email = email");

//Make sure Company doesn't already exist

if($rows > 0)
{
<<<<<<< HEAD
	echo("ERROR: Company already registered\n");
=======
    echo("ERROR: Company already registered\n");
>>>>>>> ab81c706d6e673830c4469310d9491a74959ed31
}

else
{

    if($c->query("INSERT INTO Company(password, name, email, phone)
        VALUES ('$company_pass', '$company_name', '$company_email', '$company_phone')"))
    {
<<<<<<< HEAD
    	echo "Successfull entered ". $company_name . " into DB!\n";
    }
    else
    {
    	echo "Failed to insert ". $company_name . " into DB\n";
=======
        echo "Successfull entered ". $company_name . " into DB!\n";
    }
    else
    {
        echo "Failed to insert ". $company_name . " into DB\n";
>>>>>>> ab81c706d6e673830c4469310d9491a74959ed31
    }
}

//Need to direct user to next page, wherever we decide that is //






?>