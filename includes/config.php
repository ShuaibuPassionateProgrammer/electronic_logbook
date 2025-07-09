<?php
// Database configuration
$db_host = "localhost";           // Your database host
$db_user = "root";        // Your database username
$db_pass = "";    // Your database password
$db_name = "eleclogbook";        // Your database name

// Create connection
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}