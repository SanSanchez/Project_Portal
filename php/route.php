<?php
	session_start();

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
				$_SESSION['id'] = $data['id'];

				header("Location: ../../ProjectPortal/html/Student_Prof.php");
	    		exit;
			}
			else if(isset($_POST["newacct"]))
			{
				header("Location: ../html/Student_regForm.html");
				exit;
			}
			else
			{
				echo $data['total'];
				//header("Location: ../html/studentsignup.html");

				//exit;

			}


		}
		else if($user_type == "company")
		{
			$user_exists = $c->query("SELECT *, COUNT(*) AS total FROM Company WHERE '$email' = email AND '$password' = password");

				$data = $user_exists->fetch_array(MYSQLI_ASSOC);

				echo $data['total'];
			if($data["total"] == 1)
			{
				$_SESSION['result'] = $data;
				header("Location: ../html/company_prof.php");
	    		exit;
			}
			else if(isset($_POST["newacct"]))
			{
				header("Location: ../html/company_regform.html");
				exit;
			}
			else
			{
				header("Location: ../html/companysignup.html");

				exit;
			}

		}
	}
?>
