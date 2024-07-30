<?php
$servername = "db";
$username = "sqluser";
$password = "sqlpassword123";
$dbname = "connection_check";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the database.";
?>
