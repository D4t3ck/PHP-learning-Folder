<!-- PHP $_GET and $_POST explained -->


<!-- // $_GET and $_POST = special variables used to collect data from an HTML form
//                    data is sent to the file in the action attribute of <form>
//                    <form action="some_file.php" method="get">

// $_GET =            Data is appended to the url
//                    NOT SECURE
//                    char limit
//                    Bookmark is possible w/ values
//                    GET requests can be cached
//                    Better for a search page

// $_POST =           Data is packaged inside the body of the HTTP request
//                    MORE SECURE
//                    NO data limit
//                    Cannot bookmark
//                    GET requests are not cached
//                    Better for submitting credentials -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $_GET and $_POST explained</title>
</head>

<body>
    </div>
    <a href="./exercise.php">To the exercise</a>

    <div>
        <br>

        <form action="index.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <br>
            <input type="submit" value="Log in">
            <br>
        </form>

</body>

</html>

<?php
// echo $_GET['username'] . "<br>";
// echo $_GET['password'];

// echo "{$_GET['username']} <br>";
// echo "{$_GET['password']}";

echo "{$_POST['username']} <br>";
echo "{$_POST['password']}";
?>