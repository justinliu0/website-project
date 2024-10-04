<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}

// Content visible only to logged-in users
echo "Welcome, " . $_SESSION['username'] . "!";
?>
