<?php
$servername = "localhost";
$username = "root"; // Default user in XAMPP
$password = ""; // Default password is empty in XAMPP
$database = "webs_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment to test connection
?>