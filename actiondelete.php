<?php
$conn = new mysqli('localhost' , 'root' , '' , 'task2')
$sql = "DELETE FROM callcenter WHERE address3 = 'kashmir'";
if ( $conn->query($sql) )
        {
            echo "New record is inserted successfully";
        }
        else
        {
            echo "Error Inserting Record";
        }}
        $conn->close();
?>