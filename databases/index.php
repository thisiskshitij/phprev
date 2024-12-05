<?php
include("database.php");



//INSERTING INTO DATABASE

// $username = "Patrick";
// $password = "rock3";
// $hash = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (username,password)
//         VALUES ('$username','$hash')";

// try {
//     mysqli_query($conn, $sql);
//     echo "user is now registered";
// } 

// catch (mysqli_sql_exception) {
//     echo "Could not register user";
// }

//FETCHING DATA FROM DB

$sql = "SELECT * FROM users WHERE username = 'Spongebob' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {



        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    ;

} else {
    'No user found !!';
}

mysqli_close($conn);
?>