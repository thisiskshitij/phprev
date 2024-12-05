<!DOCTYPE html>
<head>
    <title>Reg form</title>
</head>
<body>
    <form action ='sanandval.php' method="POST">
        <!-- <h2>Welcome to fakebook boii!</h2> -->
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="submit" value="login">
    </form>
</body>

</html>

<?php

if(isset($_POST["submit"])){
    

    // $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    // $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);

    // $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    // if(empty($age)){
    //     echo "no wasnt valid boii";
    // }
    // else{
    //     echo "you are {$age} years old";
    // }
    if(empty($email)){
        echo "no wasnt valid boii";
    }
    else{
        echo "your email is {$email}";
    }
    // echo "You are {$age} years old";
}
?>