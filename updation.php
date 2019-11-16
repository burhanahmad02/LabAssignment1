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
	
if ($_POST['action'] == 'Update') 
{
	$upd = "UPDATE callcenter SET first = 'abid' WHERE ID = '2'";
	if ( $conn->query($upd) )
	{
        echo "Record Updated successfully <br>";
        $sql_query = "SELECT count(first) as totalUsers FROM callcenter";
        $result = $conn->query($sql_query);
        echo "Total users : " . $result->fetch_object()->totalUsers . "<br>";
	}
	else
	{
		echo "Error Updating Record";
    }}
$conn->close();
?>