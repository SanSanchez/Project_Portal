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

$email = $_POST["Email"];
$uname = $_POST["Uname"];
$pass = $_POST["pass"];
$confirm = $_POST["cpass"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$addr = $_POST["address"];
$schoolname = $_POST["schoolname"];
$degree = $_POST["degree"];
$schoolstart = $_POST["schoolstart"];
$schoolend = $_POST["schoolend"];
$work = $_POST["work"];
$position = $_POST["position"];
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$workDesc = $_POST["workDesc"];
$lang1 = $_POST["lang1"];
$lang2 = $_POST["lang2"];
$lang3 = $_POST["lang3"];

$sql = "SELECT COUNT(email) FROM Student WHERE '$email' = email";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);

//confirm the passwords
if(strcmp($pass,$confirm) !== 0)
{
	echo "ERROR: Passwords do not match\n";
}

//prevents duplicate users
elseif(count($row) > 1)
{
	echo "ERROR: This email has already been used\n";
}

else
{
	$sql = "INSERT INTO Student(fname, email, password, lname,  phone, school_name, school_degree, school_start, school_end, work_name, work_title, workstart, workend, word_description, language1, language2, language3, address) VALUES ('$fname', '$email','$pass','$lname', '$phone', '$schoolname', '$degree', '$schoolstart', '$schoolend', '$work', '$position', '$startDate', '$endDate', '$workDesc', '$lang1', '$lang2', '$lang3', '$addr')";
	$result = mysql_query($sql);
	if(!$result)
	{
		echo "here";
		exit;
	}

		$query = "SELECT id FROM Student WHERE '$email' = email";

		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		$_SESSION['id'] = $row[0];
		echo $row[0];
		header("Location: ../../html/Student_Prof.php");


}

?>
