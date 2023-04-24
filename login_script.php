<?php include('includes/header.php'); ?>
<?php

// Include the config file
require_once('config/config.php');

// Connect to the database
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Process the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Query the database for the user
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) == 1) {
		// User found, set session id and redirect to the homepage
		$user = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['email'] = $user['email'];
		header("Location: index.php");
		exit();
	} else {
		// Invalid username or password, show error message
		echo "Invalid username or password";
	}
}

// Close the database connection
mysqli_close($conn);
?>
