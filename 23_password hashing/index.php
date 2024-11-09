<!-- PHP password hashing

 // hashing = transforming sensitive data (password)
 // into letters, numbers, and/or symbols
 // via a mathematical process. (similar to encryption)
 // Hides the original data from 3rd parties.
 // Hashing is a one-way process, meaning it cannot be reversed.
 // Hashing is used to store passwords in a database.
 // Passwords should never be stored in plain text.  Passwords should be hashed before storing in a database.
  -->

<?php

$password = "test123";

$hash = password_hash($password, PASSWORD_DEFAULT); // PASSWORD_DEFAULT = bcrypt algorithm

if (password_verify($password, $hash)) { // password_verify = checks if the password is correct
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}
?>