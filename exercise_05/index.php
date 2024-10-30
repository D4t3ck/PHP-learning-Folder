<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP useful math functions you should know</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: .5rem;

        }

        .form_actions {
            display: flex;
            gap: .5rem;
            width: 200px;
        }

        button {
            width: 200px;


        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <div class="form_actions">
            <label>x:</label>
            <input type="text" name="x">
            <label>y:</label>
            <input type="text" name="y">
            <label>z:</label>
            <input type="text" name="z">
            <input type="submit" value="total">
        </div>



    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

// $total = abs($x); // absolute value function
// $total = round($x); // round function
// $total = floor($x); // floor function
// $total = ceil($x); // ceil function
// $total = sqrt($x); // sqrt function
// $total = pow($x, $y); // pow function
// $total = max($x, $y, $z); // max function
// $total = min($x, $y, $z); // min function
// $total = rand($x, $y); // rand function
// $total = pi(); // pi function

echo $total;
?>