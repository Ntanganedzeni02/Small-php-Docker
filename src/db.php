<?php

$mysqli = new mysqli("db", "user", "userpassword", "crud_db");

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
?>
