<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bio_form";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>