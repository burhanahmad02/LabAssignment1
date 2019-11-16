<?php
$conn = ('localhost','root','','class');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO task(id, username, password)
VALUES('','$username','$password')";
if($conn->query($sql))
{
    echo"success";
    

}
else
{
    echo"fail";
}
$conn->close();
?>
