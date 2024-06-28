<?php
$hostname = "localhost"; 
$username = "u363266489_WITlibrarian"; 
$password = "2024@WITLIBRAry"; 
$database = "u363266489_WITLibrary"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>