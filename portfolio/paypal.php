<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">

    <title>PayPal</title>

    <style>
        .nav-link{
            color: aliceblue;
        }
        .tab-content{
            color: pink;
        }
    </style>

</head>
<body>

<nav>
    <div class="nav nav-tabs container" id="nav-tab" role="tablist">
        <a href="index.php" style="text-decoration: none"><button class="nav-link active" data-bs-toggle="tab" type="button" role="tab" >Home</button></a>
    </div>
</nav>

<?php # DISPLAY SHOPPING CART PAGE.

# Access session.
session_start() ;

# Open database connection.
require ( 'connect_db.php' ) ;

# Redirect if not logged in.
//if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ;
# Set page title and display header section.
$page_title = 'PayPal' ;

# Retrieve selective item data from 'movie' database table.
$q = "SELECT * FROM product WHERE id=$id" ;
$r = mysqli_query( $link, $q ) ;
$rs = mysqli_query( $link, $q) ;
if ( mysqli_num_rows( $r ) == 1 ) {
    $row = mysqli_fetch_array($r, MYSQLI_ASSOC);

    echo '<div class="container">
<br>
<h5 class="text-center"><em>Your purchase will be shipped next working day.</em></h5>
<br>
           <br>
			<div class="middlea">
				<h1 class="display-4 text-muted">Your Purchase</h1>
				<hr class="bg-info">
			</div><span style="color:white">
			<div class="table-responsive">
				<table class="table">
				<thead class="thead-dark">
				<tr>
				<th scope="col">Watch Name</th>
				<th scope="col">Price</th>
				<th scope="col">Date of Purchase</th>
				</tr>
				</thead>
				</span>
				<tbody>
			<tr>
			<td>' . $row['watch_name'] . '</td>
			<td>' . $row['price'] . '</td>
			<td>' . date("Y.m.d") . '</td>
  ';
    echo '</tr>
		  </tbody>
		  </table>
';
}
echo '
			<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: \'sandbox\', // sandbox | production

// Specify the style of the button
style: {
  layout: \'vertical\',  // horizontal | vertical
  size:   \'medium\',    // medium | large | responsive
  shape:  \'rect\',      // pill | rect
  color:  \'gold\'       // gold | blue | silver | white | black
},

funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// Enable Pay Now checkout flow (optional)
commit: true,

// PayPal Client IDs - replace with your own

client: {
  sandbox: \'AeClmmvlaMBi5VLuTM5qkVY6C9s8fUf5lK_Py4Pa4kfaD9SL4blXrKgBPlSsqa5nKtIRoVh3CyZt8CeX\',
  production: \'<insert production client id>\'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: ' . $row['price'] . ',
            currency: \'GBP\'
          }
        }
      ]
    }
  })
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert(\'Payment Complete!\');window.location.href = "index2.php";
    });
}
}, \'#paypal-button-container\');
</script>
';
?>
<!--John-->
<!--First name:-->
<!--Doe-->
<!--Last name:-->
<!--sb-7rd1c25073343@personal.example.com-->
<!--Email ID:-->
<!--Qb[L0V$p-->
<!--password-->

</body>
</html>
