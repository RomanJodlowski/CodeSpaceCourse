<!-- A simple HTML form that submits data to the same page using POST -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <label>
        <input type="text" name="name">
    </label><br>
    Email: <label>
        <input type="text" name="email">
    </label><br>
    <input type="submit" value="Submit">
</form>

<?php
// Get the values submitted via the form, using $_POST
$name = $_POST['name'];
$email = $_POST['email'];

// Display the submitted values
echo "Name: $name <br>";
echo "Email: $email <br>";
