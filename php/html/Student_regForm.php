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

$email = POST["Email"]
$uname = POST["Uname"] 
$pass = POST["pass"]
$confirm = POST["cpass"]
$fname = POST["fname"]
$lname = POST["lname"]
$phone = POST["phone"]
$addr = POST["address"]

if($uname != $confirm)
{
    echo("ERROR: Passwords do not match\n")
}
else
{
    $c->query("INSERT INTO users(first_name,last_name,email,password,phone)
        VAULES($fname,$lname,$email,$pass,$phone)")
}

?>

