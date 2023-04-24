<?php

// Database configuration
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "tony";

// Site configuration
$siteName = "Tony's Pizzeria";
$siteUrl = "http://localhost/";
$adminEmail = "admin@tonyp.com";

// Connect to the database
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
