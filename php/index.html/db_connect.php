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
