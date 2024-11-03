<?php
$age = 33;
$citizen = true;
$child = false;
$senior = true;
$ticket = null;

if ($age >= 18 && $citizen && !$child && $senior) {
    echo "You are allowed to vote. <br>";
} else {
    echo "You are not allowed to vote. <br>";
}

if (!$age >= 18 || !$citizen) {
    echo "You cannot drink alcohol. <br><br>";
} else {
    echo "You can drink alcohol. <br><br>";
}



if($child || $senior){
    $ticket = 10;
} else {
    $ticket = 15;
}

echo "The ticket price is: \$$ticket <br>";
?>