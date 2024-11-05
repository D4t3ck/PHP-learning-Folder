<!-- PHP radio buttons -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>

<body>

    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>

</html>

<br>

<?php
if (isset($_POST)) {

    $credit_card = "";

    if (isset($_POST['confirm'])) {
        $credit_card = $_POST['credit_card'];
    }

    switch ($credit_card) {
        case 'Visa':
            echo "You have selected Visa";
            break;
        case 'Mastercard':
            echo "You have selected Mastercard";
            break;
        case 'American Express':
            echo "You have selected American Express";
            break;
        default:
            echo "Please select a credit card";
    }
}


?>