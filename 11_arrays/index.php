<!-- PHP arrays
 
// array = "variable" which can hold more than one value at a time 
-->

<?php

$foods = array("apple", "banana", "orange", "mango");

// $foods[0] = "tangerine"; // changing the value of the first element
// array_push($foods, "pineapple", "kiwi"); // adding a new element to the end of the array
// array_pop($foods); // removing the last element of the array
// array_shift($foods); // removing the first element of the array
// array_unshift($foods, "grapes"); // adding a new element to the beginning of the array
// $foods = array_reverse($foods); // reversing the order of the elements in the array
// echo count($foods); // counting the number of elements in the array

// echo $foods[0] . "<br>"; // apple
// echo $foods[1] . "<br>"; // banana
// echo $foods[2] . "<br>"; // orange
// echo $foods[3] . "<br>"; // mango

foreach($foods as $food) {
    echo $food . "<br>";
}
?>