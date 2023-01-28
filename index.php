<?php
// Create connection
$conn = new mysqli('localhost', 'myusername', 'a_password');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";