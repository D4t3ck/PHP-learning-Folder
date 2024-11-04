<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="exercise.php" method="post">
        <label for="country">Enter a country:</label>
        <input type="text" name="country" id="country">
        <input type="submit" value="Submit">
    </form>

</body>

</html>

<?php

$capitals = array(
    "germany" => "Berlin",
    "france" => "Paris",
    "italy" => "Rome",
    "japan" => "Tokyo",
    "uk" => "London"
);

$country = strtolower($_POST["country"]);

if (array_key_exists($country, $capitals)) {
    $capital = $capitals[$country];
    echo "The capital is $capital";
} else {
    echo "Sorry, country not found.";
}

?>
