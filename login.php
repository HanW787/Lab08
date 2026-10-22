<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <?php include('header.inc'); ?>

    <h2>User Login</h2>
    <form action="process.php" method="post">
        <!-- Hidden field for user token -->
        <input type="hidden" name="token" value="H10234567"> 

        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" value="Log In">
        </p>
    </form>

    <?php include('footer.inc'); ?>
</body>
</html>