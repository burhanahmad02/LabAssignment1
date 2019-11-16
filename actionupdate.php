<?php
$conn = new mysqli('localhost' , 'root' , '' , 'task2')
$upd = "UPDATE callcenter SET city= 'columus' WHERE city = 'abcd'";
if ( $conn->query($upd) )
        {
            echo "New record is inserted successfully";
        }
        else
        {
            echo "Error Inserting Record";
        }}
?>