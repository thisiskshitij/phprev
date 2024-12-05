<?php
// Start the session
session_start();

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set session variables
    $_SESSION["username"] = htmlspecialchars($_POST["username"]);
    $_SESSION["email"] = htmlspecialchars($_POST["email"]);

    echo "Session variables are set.<br>";
    echo '<a href="display_session.php">Go to Display Page</a>';
}
?>
