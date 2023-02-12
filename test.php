<!-- test db connection -->
<?php
$servername = "localhost";
$db = "test";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
