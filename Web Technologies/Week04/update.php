<?php

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
    # Connect to the database.
    require ('connect_db.php');

    # Initialize an error array.
    $errors = array();

# Check for a item name.
    if ( empty( $_POST[ 'item_id' ] ) )
    { $errors[] = 'Update item ID.' ; }
    else
    { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'item_id' ] ) ) ; }

    # Check for a item name.
    if ( empty( $_POST[ 'item_name' ] ) )
    { $errors[] = 'Update item name.' ; }
    else
    { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }

    # Check for a item description.
    if (empty( $_POST[ 'item_desc' ] ) )
    { $errors[] = 'Update item description.' ; }
    else
    { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }

# Check for a item price.
    if (empty( $_POST[ 'item_img' ] ) )
    { $errors[] = 'Update image address.' ; }
    else
    { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }

    # Check for a item price.
    if (empty( $_POST[ 'item_price' ] ) )
    { $errors[] = 'Update item price.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }
    if ( empty( $errors ) )
    {
        $q = "UPDATE products SET item_id='$id',item_name='$n', item_desc='$d', item_img='$img', item_price='$p'  WHERE item_id='$id'";
        $r = @mysqli_query ( $link, $q ) ;
        if ($r)
        {
            header("Location: read.php");
        } else {
            echo "Error updating record: " . $link->error;
        }

        # Close database connection.

        mysqli_close($link);
        exit();
    }
    # Or report errors.
    else
    {
        echo ' 
	<p>' ;
        foreach ( $errors as $msg )
        { echo "$msg " ; }
        echo 'Please try again.")</p>';
        # Close database connection.
        mysqli_close( $link );
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>user register</title>
</head>
<body>

<form action="update.php" method="post">
    <label for="item_id">Update Item ID</label>
    <label>
        <input type="text" name="item_id" value="<?php if (isset($_POST['item_id'])) echo $_POST['item_id']; ?>">
    </label>
    <br>
    <label for="item_name">Update Item Name</label>
    <label>
        <input type="text" name="item_name" value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>">
    </label>
    <br>
    <label for="item_desc">Update Item Description</label>
    <label>
        <input type="text" name="item_desc" value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>">
    </label>
    <br>
    <label for="item_img">Update Item Image</label>
    <label>
        <input type="text" name="item_img" value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">
    </label>
    <br>
    <label for="item_desc">Update Item Price</label>
    <label>
        <input type="text" name="item_price" value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">
    </label>
    <br>
    <input type="submit" value="Update Record"></p>
</form><!-- closing form -->
<br>
<a href="create_record.php">Add Records</a>  |  <a href="read.php">Read Records</a>  |  <a href="update.php">Update Record</a>  | <a href="delete.php">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
