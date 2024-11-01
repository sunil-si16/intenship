<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'faculty_dashboard');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check for job ID and delete if exists
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM jobs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Redirect back to the dashboard
header("Location: dashboard.php");
exit;

$conn->close();
?>
