
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ac";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$sql="insert into reg(name,lname,email,password,number)values ('$name','$lname','$email','$password','$number')";
mysqli_query($conn, $sql);

//$sql1="SELECT * FROM reg ";
//mysqli_query($conn, $sql1);
//Print'window.location.assign("localhost/rose1/login.html")
//header('Location: localhost/rose1/login.html');
//header("location:localhost/rose1/login.html");
//echo "Register details ".$name." are succesfully inserted in the Database";

header("location:main2.html");
	exit;
