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
    if($_POST['action' == 'fetch'])
    {
    $ret = mysqli_query ($conn, "SELECT * from callcenter");
    echo "<table border= 1>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Title </th>";
    echo "<th> First </th>";
    echo "<th> MI </th>";
    echo "<th> Last </th>";
    echo "<th> Address1 </th>";
    echo "<th> Address2 </th>";
    echo "<th> Address3 </th>";
    echo "<th> City </th>";
    echo "<th> State </th>";
    echo "<th> Postcode </th>";
    echo "<th> Province </th>";
    echo "<th> Vendor </th>";
    echo "<th> Gender </th>";
    echo "<th> Phone </th>";
    echo "<th> Dial code </th>";
    echo "<th> Alt.Phone </th>";
    echo "<th> Show </th>";
    echo "<th> Email </th>";
    echo "<th> Comments </th>";
    while($row=mysqli_fetch_array($ret))
    {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['first'] . "</td>";
        echo "<td>" . $row['mi'] . "</td>";
        echo "<td>" . $row['last'] . "</td>";
        echo "<td>" . $row['address1'] . "</td>";
        echo "<td>" . $row['address2'] . "</td>";
        echo "<td>" . $row['address3'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['state'] . "</td>";
        echo "<td>" . $row['postcode'] . "</td>";
        echo "<td>" . $row['province'] . "</td>";
        echo "<td>" . $row['vendor'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['dialcode'] . "</td>";
        echo "<td>" . $row['altphone'] . "</td>";
        echo "<td>" . $row['showw'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['comments'] . "</td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
    }
    else
    {
        echo"record not fetched";
    }
    $conn->close();

?>