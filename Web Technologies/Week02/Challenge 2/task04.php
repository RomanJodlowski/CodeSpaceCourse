<!DOCTYPE html>
<html lang="eng">
<body>
<h2>Age Calculator</h2>
<br>
<form method="post">
    Enter your age: <label>
        <input type="number" name= "age">
    </label><br><br>
    <input type="submit" value="Calculate">
</form>
<br>
<?php
// Get the input number from the user
$age = $_POST['age'];
//$age = 30;

if ($age < 0) {
    echo "Invalid age";
} elseif ($age < 13) {
    echo "You are a child";
} elseif ($age < 20) {
    echo "You are a teenager";
} elseif ($age < 65) {
    echo "You are an adult";
} else {
    echo "You are a senior citizen";
}
?>

</body>
</html>
