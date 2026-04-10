<?php
include 'db.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $mysqli->query("DELETE FROM users WHERE id=$id");

    header("Location: index.php");
    exit;
} else {
    echo "No ID provided!";
}
?>
