<?php
session_start();
$conn = new mysqli("localhost", "root", "ROHAN123", "trackkmate");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['pass'];

  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if ($password == $user['pass']) {
      $_SESSION['username'] = $user['name'];
      echo "✅ Welcome, " . $user['name'] . "!";
    } else {
      echo "❌ Incorrect password!";
    }

  } else {
    echo "❌ No user found with that email!";
  }
}

$conn->close();
?>

