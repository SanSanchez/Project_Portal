<?php
	session_start();
/*
	$servername = "dbsrv2.cs.fsu.edu"; 
	$username = "syed"; 
	$password = "wpKe*A95XT"; 
	$database = "halfakerdb"; 
	$c = new mysqli($servername, $username, $password, $database);
*/
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
		$user_type = $_GET["type"];

		if($user_type == "student")
		{

			$user_exists = $c->query("SELECT *, COUNT(*) AS total FROM Student WHERE '$email' = email AND '$password' = password");
			
				$data = $user_exists->fetch_array(MYSQLI_ASSOC);
			

			if($data["total"] == 1)
			{
				$_SESSIONS['result'] = $data;
				header("Location: ../php/html/Student_Profile.html");
	    		exit;
			}
			else if(isset($_POST["newacct"]))
			{
				header("Location: ../html/Student_regForm.html");
				exit;
			}
			else
			{
				echo "<script type='text/javascript'>alert('Incorrect Username or Password');</script>";
				header("Location: ../html/signup.html");
					exit;

			}
				

		}
		else if($user_type == "business")
		{
			$user_exists = $c->query("SELECT *, COUNT(*) AS total FROM Company WHERE '$email' = email AND '$password' = password");
			
				$data = $user_exists->fetch_array(MYSQLI_ASSOC);
			

			if($data["total"] == 1)
			{
				$_SESSION['result'] = $data;
				header("Location: ../php/html/Company_Profile.php");
	    		exit;
			}
			else if(isset($_POST["newacct"]))
			{
				header("Location: ../html/Company_regForm.html");
				exit;
			}
			else
				echo "here: Username or Password incorrect";
		}
		
	}


?>
