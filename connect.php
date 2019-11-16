<?php
$host = "localhost";
$dbusername = "root";	
$dbpassword = "";
$dbname = "task2";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_errno())
 	 {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$username = $_POST['username'];
	$password = $_POST['password'];		
if ($_POST['action'] == 'Login')	
{
    $sql1 = "SELECT * FROM account WHERE adminn = '$password' AND adminn = '$password' ";
	if ($username=="admin" && $password=="admin"){
		echo "Login successful";
		header("location:login.html");
	}
	else {
		echo "Incorrect Username/Password";
	}
}
else if ($_POST['action'] == 'SignUp') {
	$sql = "INSERT INTO account (username, password)
	values ('$username','$password')";

	if ( $conn->query($sql) )
	{
		echo "New record is inserted successfully";
	}
	else
	{
		echo "Error Inserting Record";
	}} 
else {
    echo "INVALID ACTION <br><br>";
}
$conn->close();
?>
