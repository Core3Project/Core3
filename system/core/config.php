<?php
$server = "localhost";
$user = "root";
$pass = "root";
$dbname = "cms";
// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
