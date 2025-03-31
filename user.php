<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "webs_db"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Database connection successful!";

// You can now perform database operations using $conn
// ...

$conn->close();
?>