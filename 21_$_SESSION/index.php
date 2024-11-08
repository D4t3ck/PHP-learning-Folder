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
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"> <br>
        password: <br>
        <input type="text" name="password"> <br> <br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>

<?php
if (isset($_POST['login'])) { // if the login button is clicked


    if (!empty($_POST['username']) && !empty($_POST['password'])) { // if the username and password fields are not empty
        $_SESSION['username'] = $_POST['username']; // store the username in the session
        $_SESSION['password'] = $_POST['password']; // store the password in the session

       header("Location: home.php"); // redirect to the home page
    } else {
        echo "Please fill in all fields";
    }

}
?>