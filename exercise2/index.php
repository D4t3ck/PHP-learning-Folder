<!-- PHP variables and data types -->
<?php
// variable = a reusable container that holds data
// string, integer, float, boolean, array, object, null
?>

<?php
// string
$name = "Daniel Sinteck <br>";
$food = "Pizza <br>";
$email = "fake@gmail.com <br>";

// integer
$age = 34;
$users = 2;
$quantity = 3;

// float
$gpa = 3.45;
$price = 5.99;
$taxrate = 5.1;

// boolean
$employed = true;
$online = false;
$forSale = true;

// echo $name;

// echo "Hello {$name}";
// echo "You like {$food}";
// echo "Your email is {$email}";

// echo "You are {$age} years old <br>";
// echo "There are {$users} users online<br><br>";

// echo "Your GPA is: {$gpa} <br>";
// echo "The price is \${$price} <br>";
// echo "The tax rate is: {$taxrate}% <br><br>";

// echo "Are you employed? {$employed} <br>";

echo"You have ordered {$quantity} x {$food}s <br>";
$total = $quantity * $price;
echo "Your total is: \${$total}";
?>