<?php
include("database.php");
?>

<!DOCTYPE html>
<head>
    <title>Reg form</title>
</head>
<body>
    <form action ="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <h2>Welcome to fakebook boii!</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="reg">
    </form>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);

    //$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)
    //$age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT)
    if(empty($username)){
        echo "Please enter a username";

    }
    elseif(empty($password)){
        echo "Please enter a password";
    }

    else{

        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username,password)
                VALUES('$username','$hash')";

        mysqli_query($conn,$sql);
        echo "You are now registered";
                
    }
}
?>


<?php
mysqli_close($conn);
?>