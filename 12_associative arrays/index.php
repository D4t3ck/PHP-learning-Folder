<!-- PHP associative arrays

 // associative array = An array made of key => value pairs
 // countries => capitals
 // id => username
 // item => price
  -->

<?php
$capitals = array(
    "Germany" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome",
    "Japan" => "Tokyo"
);

// echo $capitals["Germany"]; // show the value of the key 
// $capitals["Germany"] = "Hamburg"; // set the value of the key
// $capitals["China"] = "Beijing"; // add a new key value pair
// array_pop($capitals); // remove the last element
// array_shift($capitals); // remove the first element
// $keys = array_keys($capitals); // get the keys of the array
// $values = array_values($capitals); // get the values of the array 
// $capitals = array_flip($capitals); // flip the keys and values 
// $capitals = array_reverse($capitals); // reverse the array 
// echo count($capitals); // 

foreach ($capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
}

// foreach ($keys as $key) {
//     echo "{$key} <br>";
// }

// foreach ($values as $value) {
//     echo "{$value} <br>";
// }
?>