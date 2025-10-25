<?php
$servername = "localhost";
$username = "root";           
$password = "ROHAN123";  
$dbname = "trackkmate";    
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];


  $sql = "INSERT INTO user(name, email, pass) VALUES ('$user', '$email', '$pass')";

  if ($conn->query($sql) === TRUE) {
    echo "✅ Registration successful!";
  } else {
    echo "Error: " . $conn->error;
  }
}

$conn->close();
?>
