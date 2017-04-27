<html>
	<body>
		Name: <?php echo $_POST["your-name"]; ?>
		Email: <?php echo $_POST["your-email"]; ?>
		Message: <?php echo $_POST["your-message"]; ?>
	</body>
</html>
<<<<<<< HEAD

<?php

$servername = "dbsrv2.cs.fsu.edu";
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
}

?>
=======
>>>>>>> 446b1f32880a928f68121e1ce8cfe0f7effb5ee2
