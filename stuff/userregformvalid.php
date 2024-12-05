<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"] ?? '';
    $lastName = $_POST["last_name"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';
    $confirmPassword = $_POST["confirm_password"] ?? '';

    $errors = [];

    // Validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errors[] = "All fields are required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[\W_]/', $password)) {
        $errors[] = "Password must be at least 8 characters long, include an uppercase letter, a number, and a special character.";
    }
    if ($password !== $confirmPassword) {
        $errors[] = "Password and confirm password do not match.";
    }

    // Display errors or success message
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
    First Name: <input type="text" name="first_name" value="<?php echo htmlspecialchars($firstName ?? '') ?>"><br>
    Last Name: <input type="text" name="last_name" value="<?php echo htmlspecialchars($lastName ?? '') ?>"><br>
    Email: <input type="email" name="email" value="<?php echo htmlspecialchars($email ?? '') ?>"><br>
    Password: <input type="password" name="password"><br>
    Confirm Password: <input type="password" name="confirm_password"><br>
    <button type="submit">Register</button>
</form>
