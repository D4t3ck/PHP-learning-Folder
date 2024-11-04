<!-- PHP isset() & empty()
    
 // isset() = Returns TRUE if a variable is declared and not null
 // empty() = Returns TRUE if a variable is not declared, false, null, ""
  -->

  <a href="exercise.php">To the exercise</a>
  <br><br>

  <?php
  
    $username = null;

    if(isset($username)) {
        echo "variable is set <br>";
    } else {
        echo "variable is not set <br>";
    }

    if(empty($username)) {
        echo "variable is set <br>";
    } else {
        echo "variable is not set <br>";
    }
  ?>