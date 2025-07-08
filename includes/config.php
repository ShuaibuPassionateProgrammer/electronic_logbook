<?php
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'eleclogbook';

// Establish a connection to the database
$db = new mysqli($host, $user, $password, $database);

// Check for connection errors
if ($db->connect_error) {
    // Log the error internally (for development)
    error_log("Database connection failed: " . $db->connect_error);

    // Show user-friendly error message
    echo "<span style='color: red; font-weight: bold; font-size: 20px;'>Unable to connect to the database. Please try again later.</span>";
    exit; // Stop script execution if the connection fails
}
?>