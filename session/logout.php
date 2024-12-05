<?php
// Start the session
session_start();

// Destroy the session
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>Logged Out</h1>
    <p>Your session has been destroyed.</p>
    <a href="form.php">Go Back to Form</a>
</body>
</html>
