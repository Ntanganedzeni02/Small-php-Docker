<?php
// db.php - database connection
$mysqli = new mysqli("db", "user", "userpassword", "crud_db");

// Check connection
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
?>
