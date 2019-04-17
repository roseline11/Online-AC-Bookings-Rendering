<html>
<body  >
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
$email=$_POST['email'];
$rating = $_POST['rating'];
$problem = $_POST['problem'];
$review= $_POST['review'];

$sql="insert into service(email,rating,problem,review)values ('$email','$rating','$problem','$review')";
mysqli_query($conn, $sql);

$sql1="SELECT * FROM service ";
mysqli_query($conn, $sql1);
//Print'window.location.assign("localhost/rose1/login.html")
//header('Location: localhost/rose1/login.html');
//header("location:localhost/rose1/login.html");
//echo "Register details ".$name." are succesfully inserted in the Database";
echo '<h1><a href="http://localhost/rose1/ac.html">RESPONSE HAS BEEN RECORDED </a></h1>';
?>
</body>
</html