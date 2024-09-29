<?php
// db.php
$servername = "localhost";  // Your database server
$username = "username";         // Your database username
$password = "password";             // Your database password
$dbname = "login_app";      // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
