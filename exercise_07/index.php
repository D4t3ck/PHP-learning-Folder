<!-- PHP logical operators 

 // Logical operators = combine conditional statements
 // if(condition1 && condition2)

 // && = True if both conditions are true
 // || = True if at least one condition is true
 // ! = True if false. False if true.
--> 

<a href="./exercise.php">To the exercise</a><br><br>

<?php
$temp = 15;
$cloudy = true;

if ($temp >= 0 && $temp <= 30) {
    echo "The weather is good. <br>";
} else {
    echo "The weather is bad. <br>";
}

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad. <br>";
} else {
    echo "The weather is good. <br>";
}

if ($cloudy) {
    echo "It's sunny. <br>";
} else {
    echo "It's cloudy <br>";
}
?>