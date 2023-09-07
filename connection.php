<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sneha";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn)
{
//echo "Connection ok";
}
else
{
echo "Connection failed".mysqli_connect_error();
}
?>