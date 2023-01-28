<?php
$api_key = '47ecd3b21be71c5822571b9f59e52544';
// Create connection
$conn = new mysqli('localhost', 'myusername', 'a_password');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";