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
$fname=$_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$sql="insert into address(fname,email,address,city,state,pin)values ('$fname','$email','$address','$city','$state','$pin')";
mysqli_query($conn, $sql);
echo "<h1><center>ok Details have been saved<br><br> For Home <a href=\"ac.html\">Click Here</a></center></h1>";
//$sql1="SELECT * FROM address ";
//mysqli_query($conn, $sql1);
//header("location:ac.html");
//echo'<script language="javascript">';
//echo'alert("data saved")';
//echo'</script>';
//header("location:a.php");
//exit;
//Print'window.location.assign("localhost/rose1/login.html")
//header('Location: localhost/rose1/login.html');
//header("location:localhost/rose1/login.html");
//echo("<H1><a href='http://localhost/rose1/ac.html'> ADDRESS ENTERED SUCCESSFULLY THANK YOU</a></H1>");
//header("location:ac.html");
	

?>
</body>
</html