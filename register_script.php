<?php include('includes/header.php'); ?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the submitted data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connect to the database
  require_once 'config/config.php';
  $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert the new user into the database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    // Registration successful
    echo '<p>Registration successful. Please <a href="login.php">log in</a>.</p>';
  } else {
    // Registration failed
    echo '<p>Registration failed. Please try again.</p>';
  }

  // Close the database connection
  mysqli_close($conn);
}
?>