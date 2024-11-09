<!-- PHP $_SERVER

 // $_SERVER = Super Global Variable (SGB) that contains headers, paths and script locations.
 // The entries is this array are created by the web server.
 // Shows nearly everything you need about rhe current web page environment.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>

</html>
<?php

// foreach($_SERVER as $key => $value){
//     echo $key . "=>" . $value . "<br>";
// }                                        // This will display all the server variables

if ($_SERVER["REQUEST_METHOD"] == "POST") { // checks if request is POST to be saved in the server variables array 
    echo "Hello " . $_POST['username'];      // This will display the username entered in the form
}
?>