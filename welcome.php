<?php
session_start();

// Check if the user session exists
if (isset($_SESSION['user'])) {
    $username = htmlspecialchars($_SESSION['user']);
} else {
    // Not logged in, redirect back to login page
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<body>
    <?php include('header.inc'); ?>

    <h2>Dashboard</h2>
    <p>Welcome, <?php echo $username; ?>!</p>
    <p><a href="logout.php">Log Out</a></p>

    <?php include('footer.inc'); ?>
</body>
</html>