<?php
$host = "localhost";        // or your server IP
$user = "root";             // your DB username
$password = "";             // your DB password
$dbname = "attendance_db";  // your database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

