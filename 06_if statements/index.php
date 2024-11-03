<!-- PHP if statements
// if statement = if some condition is true, then do something
// if condition is false, don't do it 
-->
<a href="./exercise.php">To the exercise</a><br><br>

<?php

// example 01
$age = 18;

if ($age >= 100) {
    echo "you are too old to enter this site <br>";
} elseif ($age >= 18) {
    echo "You may enter this site <br>";
} elseif ($age <= 0) {
    echo "That wasn´t a valid age <br>";
} else {
    echo "You are not allowed to enter this site <br>";
}

// Example 02
$adult = ($age >= 18); // set $adult to true if age is >= 18, otherwise false

if ($adult) {
    echo "You are an adult";
} else {
    echo "You are not an adult";
}
?>