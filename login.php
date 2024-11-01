<?php
// Start the session
session_start();

// Hardcoded sample credentials (for testing purposes)
$valid_username = "admin";
$valid_password = "password123";

// Get the username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the provided credentials are correct
if ($username === $valid_username && $password === $valid_password) {
    // Set session variables
    $_SESSION['username'] = $username;
    // Redirect to a success page
    header("Location: success.php");
    exit();
} else {
    // Redirect back to the login page with an error message
    echo '<script>alert("Invalid username or password. Please try again."); window.location.href="index.html";</script>';
}
?>
