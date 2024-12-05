<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get post isset empty</title>
</head>

<body>


    <!--Login form-->


    <!-- <form action="index.php" method="POST">
    <label>Username: </label><br>
    <input type="text" name="username"><br>
    <label>Password: </label><br>
    <input type="password" name="password">
    <br>
    <input type="submit" name="login" value="Log in">
    </form> -->


    <!--Radio button -->

    <!-- <form action="index.php" method="post">

        <input type="radio" name="card" value="visa">Visa</input><br>
        <input type="radio" name="card" value="mastercard">Mastercard</input><br>
        <input type="radio" name="card" value="rupay">Rupay</input><br>
        <button type="submit" name="submit" value="submit">Submit</button>

    </form> -->

    <!-- Checkboxes-->

    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Burger">Burger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="submit" name="submit">

    </form>

</body>

</html>


<?php

// Login form

//   if(isset($_POST["login"])){

//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     if(empty($username)){
//         echo "Username is blank";
//     }

//     elseif(empty($password)){
//         echo "Password is blank";
//     }
//     else{
//         echo "Welcome {$username}";
//     }
//   }

// foreach($_POST as $key => $value){
//     echo"{$key} => {$value} <br>";
// }

// --------------------------------------------

//Radio button

// $card = null;

// if (isset($_POST["submit"])) {

//     if (isset($_POST["card"])) {
//         $card = $_POST["card"];
//         echo "You have selected " . $card;
//     } 
//     else {
//         echo "please select one";
//     }
// }

//checkboxes


if(isset($_POST["submit"])){

    if(isset($_POST["foods"])){
        $foods = $_POST["foods"];
       
        foreach($foods as $food){
            echo $food;
        }
        
    }
    // else{echo "please choose one";}
}


?>