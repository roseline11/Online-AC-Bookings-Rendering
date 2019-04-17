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
$cardname=$_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$sql="insert into pay(cardname,cardnumber,expmonth,expyear,cvv)values ('$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
mysqli_query($conn, $sql);

$sql1="SELECT * FROM pay ";
mysqli_query($conn, $sql1);
//Print'window.location.assign("localhost/rose1/login.html")
//header('Location: localhost/rose1/login.html');
//header("location:localhost/rose1/login.html");
//echo "Register details ".$name." are succesfully inserted in the Database";
//echo("<H1><a href='http://localhost/rose1/address.html'>PAYMENT SUCCESSFUL</a></H1>");
header("location:address.html");
	exit;
?>
</body>
</html