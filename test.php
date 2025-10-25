<?php
$conn = new mysqli("localhost", "root", "your_mysql_password", "trackkmate");

if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
} else {
  echo "✅ Connected successfully to your local MySQL!";
}
$conn->close();
?>
