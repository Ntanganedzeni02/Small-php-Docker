<?php
include 'db.php'; // gives us $mysqli

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $mysqli->query("DELETE FROM users WHERE id=$id");

    // Redirect back to index.php after deleting
    header("Location: index.php");
    exit;
} else {
    echo "No ID provided!";
}
?>
