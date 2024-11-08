<!-- PHP $_SESSION

 // session = Super Global Variable (SGB) used to store information on a user
 // to be used across multiple pages.
 // A user is assigned a session-id
 // ex. login credentials, shopping cart items, etc.
  -->

<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the login page
    <br>
    <a href="home.php">To the home page</a>
    <br>
</body>

</html>

<?php
$_SESSION['username'] = "testuser";
$_SESSION['password'] = "test123";

// echo $_SESSION['username'] . "<br>";
// echo $_SESSION['password'] . "<br>";
?>