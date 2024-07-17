<?php
// Validate and process signup here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Example: Store user information in database (you should use prepared statements for security)
  // Insert code to save to database goes here

  // Redirect to login page after successful signup
  header("Location: login.html");
  exit();
}
?>
