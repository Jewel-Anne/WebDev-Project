<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect the user to the desired page (e.g., login.php)
header("Location: login.php");
exit();
?>
