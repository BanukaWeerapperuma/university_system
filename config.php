<?php
$servername = "localhost";
$username = "root";  // default username for WAMP
$password = "";      // default password for WAMP
$dbname = "university";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
