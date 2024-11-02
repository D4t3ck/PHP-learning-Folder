<?php
$date = date("l");
// $date = "Pizza";

switch ($date) {
    case "Monday":
        echo "Today is Monday. Watch a movie.";
        break;
    case "Tuesday":
        echo "Today is Tuesday. Go to the gym.";
        break;
    case "Wednesday":
        echo "Today is Wednesday. Go to the park.";
        break;
    case "Thursday":
        echo "Today is Thursday. Go to the beach.";
        break;
    case "Friday":
        echo "Today is Friday. Go to the mall.";
        break;
    case "Saturday":
        echo "Today is Saturday. Go to the zoo.";
        break;
    case "Sunday":
        echo "Today is Sunday. Go to the church.";
        break;
    default:
        echo "{$date} is not a date!";
}
