<!-- PHP $_COOKIE

 // cookie = information about a user storred in a user´s web-browser
 //          targeted advertisements, browsing preferences, and    
 //          other non-sensitive data
  -->

<?php

setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); // 86400 = 1 day
setcookie("fav_drink", "tea", time() + (86400 * 3), "/");
setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "/");

// foreach ($_COOKIE as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }

if (isset($_COOKIE["fav_food"])) {
    echo "BUY SOME {$_COOKIE["fav_food"]} !!! <br>";
} else {
    echo "I don't know your favourite food <br>";
}
?>