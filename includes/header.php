<?php
// Start session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  $loggedIn = true;
} else {
  $loggedIn = false;
}

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="assets/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</html>
