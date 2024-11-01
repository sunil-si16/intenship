<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - UpToSkills</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to UpToSkills</h1>
    </header>
    <p>Hello, <?php echo $_SESSION['username']; ?>! You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
