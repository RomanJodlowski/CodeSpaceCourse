<!DOCTYPE html>
<html lang="eng">
<body>


<?php

// Get the input number from the user
    $num = $_POST['num'];

// Display the multiplication table of the input number
    echo "Multiplication table of $num: <br>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $num * $i;
        echo "$num x $i = $result <br>";
    }
?>
<br>
<form method="post">
    Enter a number: <label>
        <input type="number" name= "num">
    </label><br><br>
    <input type="submit" value="Generate multiplication table">
</form>

</body>
</html>
