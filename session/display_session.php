<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Session</title>
</head>
<body>
    <h1>Session Details</h1>
    <?php
    if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
        echo "<p>Welcome, " . $_SESSION["username"] . "!</p>";
        echo "<p>Your email is: " . $_SESSION["email"] . "</p>";
    } else {
        echo "<p>No session variables found. Please <a href='form.php'>enter your details</a>.</p>";
    }
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>
