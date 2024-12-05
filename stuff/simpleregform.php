<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    $errors = [];

    if (empty($username)) {
        $errors[] = "The name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "The email is not valid.";
    }
    if (strlen($password) < 8) {
        $errors[] = "The password must be at least 8 characters long.";
    }

    if ($errors) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Registration successful!</p>";
    }
}
?>

<form method="post">
    Name: <input type="text" name="username" value="<?php echo htmlspecialchars($username ?? '') ?>"><br>
    Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email ?? '') ?>"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Register</button>
</form>
