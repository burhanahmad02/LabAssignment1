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
    $first = $_POST['first'];
    $sql_query = "DELETE FROM callcenter WHERE first = '$first'";
    $result = $conn->query($sql_query);
    if($conn->affected_rows > 0)
        {
            echo $first . " deleted successfully.<br>";
            echo "rows deleted = ". $conn->affected_rows . "<br>";
            $sql_query = "SELECT count(username) as totalUsers FROM users";
            $result = $conn->query($sql_query);
        }
    else
        {
            echo $first . " not found.<br>";
        }
    echo "<a href='delete.html'><button type='button'>Back to Delete</button></a>";      
    $conn->close();
?>