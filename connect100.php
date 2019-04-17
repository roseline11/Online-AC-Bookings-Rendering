<html>
<body align = "center" color = "lightgreen">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ac";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST["email"];
$password = $_POST["password"];
mysqli_query($conn,"select * from reg where email = '".$username."' and password = '".$password."';");
$rows = mysqli_affected_rows($conn);
if($rows==1)
{
	//echo '<h1><a href="http://localhost/rose1/main2.html">Account exists </a></h1>';
	header("location:main2.html");
	exit;
}
else
{
//echo '<h1><a href="http://localhost/rose1/login.html">Account donot exists </a></h1>';
header("location:login.html");
	exit;
}
?>
</body>
</html>