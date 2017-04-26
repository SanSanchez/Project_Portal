<?php
session_start();
$username = 'root';
$password = '';
$dbname = 'ProjectPortal';
$host = 'localhost';
$conn = mysql_connect($host, $username, $password);
 mysql_select_db($dbname, $conn);



if($conn == false)
{
	echo "Connection failed" . $c->connect_error;
}

$email = $_POST["company_email"];
$name = $_POST["company_name"];
$pass = $_POST["company_pass"];
$confirm = $_POST["cpass"];
$website = $_POST["website"];
$phone = $_POST["phone"];
$mission = $_POST["mission"];
$address = $_POST["address"];
$industry = $_POST["industry"];

$sql = "SELECT COUNT(email) FROM Company WHERE '$email' = email";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

//confirm the passwords
if(strcmp($pass,$confirm) !== 0)
{
	echo "ERROR: Passwords do not match\n";
	header("Location: ../index.html");
	exit;
}

//prevents duplicate users
if(count($row) > 1)
{
	echo "ERROR: This email has already been used\n";
	header("Location: ../index.html");
	exit;
}

echo $email;
echo $name;
echo $pass;
echo $confirm;
echo $website;
echo $phone;
echo $mission;
echo $address;
echo $industry;

	$sql = "INSERT INTO Company(password, name, email, phone, website, mission, address, industry) VALUES ('$pass', '$name','$email','$phone', '$website', '$mission', '$address', '$industry')";
	$result = mysql_query($sql);
	if(!$result)
	{
		echo "here";
		exit;
	}

		$query = "SELECT id FROM Company WHERE '$email' = email";

		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		$_SESSION['id'] = $row[0];
		echo $row[0];
		header("Location: ../html/company_prof.php");




?>
