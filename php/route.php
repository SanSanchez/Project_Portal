<?php
	/*$servername = "dbsrv2.cs.fsu.edu"; 
	$username = "syed"; 
	$password = "wpKe*A95XT"; 
	$database = "halfakerdb"; 
	$c = new mysqli($servername, $username, $password, $database);*/

	$username = 'root';
	$password = '';
	$dbname = 'ProjectPortal';
	$host = 'localhost';
	$c = new mysqli($host, $username, $password, $dbname);

	
	if($c->connect_error)
	{
		die("Connection failed " . $c->connect_error);
	}
	else
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		$user_type = $_POST["user_type"];

		if($user_type == "student")
		{
			echo "Here";
			$user_exists = $c->query("SELECT COUNT(email) FROM Student WHERE '$email' = email AND '$password' = password");

			if($user_exists == 1)
			{

				header("Location: ../html/Student_Profile.html");
	    		exit;
			}
		}
	}
	
		
	
	

?>