<?php # DISPLAY COMPLETE REGISTRATION PAGE.

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
    # Connect to the database.
    require ('connect_db.php');


    # Initialize an error array.
    $errors = array();

    # Check for a first name.
    if ( empty( $_POST[ 'first_name' ] ) )
    { $errors[] = 'Enter your first name.' ; }
    else
    { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

    # Check for a last name.
    if (empty( $_POST[ 'last_name' ] ) )
    { $errors[] = 'Enter your last name.' ; }
    else
    { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

    # Check for an email address:
    if ( empty( $_POST[ 'email' ] ) )
    { $errors[] = 'Enter your email address.'; }
    else
    { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

    # Check for a password and matching input passwords.
    if ( !empty($_POST[ 'pass1' ] ) )
    {
        if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
        { $errors[] = 'Passwords do not match.' ; }
        else
        { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
    }
    else { $errors[] = 'Enter your password.' ; }

    # Check if email address already registered.
    if ( empty( $errors ) )
    {
        $q = "SELECT user_id FROM users WHERE email='$e'" ;
        $r = @mysqli_query ( $link, $q ) ;
        if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>' ;
    }


    # On success register user inserting into 'users' database table.
    if ( empty( $errors ) )
    {
        $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) 
	VALUES ('$fn', '$ln', '$e', SHA2('$p',256), NOW() )";
        $r = @mysqli_query ( $link, $q ) ;
        if ($r)
        { echo '<div class="container">
<div class="alert alert-secondary" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
    <h4 class="alert-heading"Registered!</h4>
    <p>You are now registered.</p>
    <a class="alert-link" href="login.php">Login</a>'; }

        # Close database connection.
        mysqli_close($link);

        exit();
    }
    # Or report errors.
    else
    {
        echo '<div class="container">
	   <div class="alert alert-secondary" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		 <span aria-hidden="true">×</span>
	      </button>
		<h4 class="alert-heading" id="err_msg">The following error(s) occurred:</h4>' ;
        foreach ( $errors as $msg )
        { echo " - $msg<br>" ; }
        echo '<p>or please try again.</p></div>';
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

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>First Name</label>
                <label>
                    <input type="text" name="first_name" class="form-control" placeholder="* First Name " value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                </label>
            </div>
        </div><!--closing col-->
        <div class="col">
            <div class="form-group">
                <label>Last Name</label>
                <label>
                    <input type="text" name="last_name" class="form-control" placeholder="* Last Name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                </label>
            </div>
        </div><!--closing col-->
    </div><!--closing row-->
    <div class="form-group">
        <label>Email</label>
        <label>
            <input type="email" name="email" class="form-control" placeholder="* email@example.com" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
        </label>
    </div>
    <small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>
    <br>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Create New Password</label>
                <label>
                    <input type="password" name="pass1" class="form-control" placeholder="* Create New Password" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">
                </label>
            </div>
        </div><!-- closing col-->
        <div class="col">
            <div class="form-group">
                <label>Confirm Password</label>
                <label>
                    <input type="password" name="pass2" class="form-control" placeholder="* Confirm Password" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
                </label>
            </div>
        </div><!--closing col-->
    </div><!-- closing row -->
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Create Account Now">
</form><!-- closing form -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>