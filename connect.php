


<?php
// Database configuration
$dbHost     = "business47";
$dbUsername = "spotglgw_user";
$dbPassword = "PhebenDanny1";
$dbName     = "spotglgw_talenthunt";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>