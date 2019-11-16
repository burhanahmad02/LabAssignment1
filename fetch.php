<?php
    $conn = new mysqli('localhost', 'root', '', 'task2');
    $ret = mysqli_query ($conn, "SELECT * from callcenter");
   
    echo "<table border= 1>";

    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> first </th>";
    echo "<th> mi </th>";
    echo "<th> last </th>";
    echo "<th> address1 </th>";
    

    while($row=mysqli_fetch_array($ret))
    {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['first'] . "</td>";
        echo "<td>" . $row['mi'] . "</td>";
        echo "<td>" . $row['last'] . "</td>";
        echo "<td>" . $row['address1'] . "</td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
    $conn->close();

?>