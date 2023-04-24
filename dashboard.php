<?php

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if not logged in
  exit();
}

// Get the user's account information from the session
$username = $_SESSION['username'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <?php include('includes/header.php'); ?>
</head>
<body>
  <h1>Welcome, <?php echo $username; ?>!</h1>
  <p>Here is your account information:</p>
  <ul>
    <li>Username: <?php echo $username; ?></li>
    <li>Email: <?php echo $email; ?></li>
  </ul>
  <a href="logout.php">Logout</a>
</body>
</html>