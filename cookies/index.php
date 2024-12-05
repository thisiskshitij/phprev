<?php
// setcookie("fav_food","burger",time()+86400,"/");
setcookie("fav_food","burger",time()-0,"/");
// setcookie("fav_drink","coffee",time()+86400,"/");
setcookie("fav_drink","coffee",time()-0,"/");
// setcookie("fav_dessert","rasgulla",time()+86400,"/");
setcookie("fav_dessert","rasgulla",time()-0,"/");

foreach($_COOKIE as $key=>$value){
    echo "{$key} = {$value} <br>";
}

// if(isset($_COOKIE['fav_food'])){
//     echo " your fav food is {$_COOKIE["fav_food"]}";
// }
// else{
//     echo "idk ur fav food";
// }
?>