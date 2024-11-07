<!-- PHP sanitize/validate input -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    // Sanitize den Benutzernamen, um Sonderzeichen zu entfernen oder zu entschärfen
    $username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    // Sanitize das Alter, um nur numerische Zeichen zuzulassen
    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_SANITIZE_NUMBER_INT
    );

    // Sanitize die E-Mail-Adresse, um unerwünschte Zeichen zu entfernen
    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );

    // Validiere das Alter als eine Ganzzahl (INTEGER), nachdem es bereinigt wurde
    // Falls das Alter keine gültige Ganzzahl ist, wird $age_valid `false` sein
    $age_valid = filter_var($age, FILTER_VALIDATE_INT);

    // Validiere die E-Mail als gültige E-Mail-Adresse, nachdem sie bereinigt wurde
    // Falls die E-Mail ungültig ist, wird $email_valid `false` sein
    $email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);

    // Überprüfen, ob der Benutzername leer ist
    if (empty($username)) {
        echo "username ist erforderlich <br>";
    } else {
        // Falls der Benutzername gültig ist, wird er ausgegeben
        echo "username: {$username} <br>";
    }

    // Prüfen, ob das Alter gültig ist (d.h. es ist eine ganze Zahl)
    if ($age_valid === false) {
        echo "ungültiges Alter <br>";
    } else {
        // Falls das Alter gültig ist, wird es ausgegeben
        echo "age: {$age} <br>";
    }

    // Prüfen, ob die E-Mail gültig ist (d.h. sie entspricht einem gültigen E-Mail-Format)
    if ($email_valid === false) {
        echo "ungültige E-Mail <br>";
    } else {
        // Falls die E-Mail gültig ist, wird sie ausgegeben
        echo "email: {$email} <br>";
    }
}
?>
