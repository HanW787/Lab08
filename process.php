<?php
session_start();

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Define correct credentials
    $correct_user = 'HanLin'; // Example or your name
    $correct_pass = '10234567'; // Example or your student ID

    if ($username === $correct_user && $password === $correct_pass) {
        // Successful login
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        // Failed login, redirect back to login page
        header('Location: login.php?error=1');
        exit();
    }
} else {
    // If accessed directly without posting, redirect to login
    header('Location: login.php');
    exit();
}
?>