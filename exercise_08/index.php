<!-- 
PHP switches

// switch = replacement to using many elseif statements
// more efficient, less code to write
-->

<a href="./exercise.php">To the exercise</a><br><br>

<?php
$grade = "B";

switch ($grade) {
    case "A":
        echo "You did great!";
        break;
    case "B":
        echo "You did good!";
        break;
    case "C":
        echo "You did okay!";
        break;
    case "D":
        echo "You did poorly!";
        break;
    case "F":
        echo "You failed!";
        break;
    default:
        echo "{$grade} is not valid";
}
?>