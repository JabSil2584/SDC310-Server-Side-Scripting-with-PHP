<?php
// Connect to Database
$hostname = "localhost";
$username = "ecpi_user";     // Change to "ecpi_user" if using your class lab credentials
$password = "Password1";         // Change to "Password1" if using your class lab credentials
$dbname = "jo & sno storefront"; // Matches your phpMyAdmin database name

$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>