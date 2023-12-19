<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">

    <title>index</title>

    <style>
        .nav-link{
            color: aliceblue;
        }
        .tab-content{
            color: pink;
        }

        /*Div filter */
        .dropbtn {
            background-color: #2980B9;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: white;
        }

        /*.dropup {*/
        /*    position: relative;*/
        /*    display: block;*/
        /*}*/

        .dropup-content {
            display: none;
            position: absolute;
            background-color: #2980B9;
            min-width: 160px;
            bottom: 50px;
            z-index: 1;
        }

        .dropup-content a {
            font-style: oblique;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropup-content a:hover {
            background-color: darkslateblue
        }

        .dropup:hover .dropup-content {
            display: contents;
        }

        .dropup:hover .dropbtn {
            background-color: #2980B9;
        }

        /*Style the div filters*/
        .filterDiv {
            float: left;
            width: 250px;
            line-height: 100px;
            text-align: center;
            margin: 10px;
            display: none;
        }

        .show {
            display: block;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 9.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }

    /*    glow*/
        .glow {
            font-size: 80px;
            color: #fff;
            text-align: center;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }

    /*    card style*/
        .cardP {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: auto;
        }

        .cardP:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        /* Style the icon bar links */
        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        /* Style the social media icons with color, if you want */
        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }

    /*    alert*/
        .alert {
            padding: 20px;
            background-color: darkgoldenrod;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: azure;
            font-weight: bold;
            float: right;
            font-size: 32px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: #2980B9;
        }
        .alert-link {
            color: azure;
        }

    </style>

</head>
<body>
<!--Navigation -->
<nav>
    <div class="nav nav-tabs container" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-ourBrand-tab" data-bs-toggle="tab" data-bs-target="#nav-ourBrand" type="button" role="tab" aria-controls="nav-ourBrand" aria-selected="true">Our Brand</button>
        <button class="nav-link" id="nav-ourCollection-tab" data-bs-toggle="tab" data-bs-target="#nav-ourCollection" type="button" role="tab" aria-controls="nav-ourCollection" aria-selected="false">Our Collection</button>
        <a href="contactForm.php" style="text-decoration: none"><button class="nav-link" type="button" role="tab">Contact</button></a>
        <a href="login.php" style="text-decoration: none"><button class="nav-link"   type="button" role="tab">Login / Register</button></a>
    </div>
</nav>

<div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

<!--Navigation output-->
<div class="tab-content" id="nav-tabContent">


<!--    Our brand page section-->

    <div class="tab-pane fade show active" id="nav-ourBrand" role="tabpanel" aria-labelledby="nav-ourBrand-tab" tabindex="0">
        <br>
<!--        body context-->
        <div class="container overflow-hidden text-center">
            <!--        alert -->
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong><a href="login.php" class="alert-link">Register! </a></strong>To receive  newsletter and special offers!
            </div>

            <div class="row g-5">
                <div class="col-md-12">
                    <div class="card text-bg-dark">
                        <img src="image/imgBrand.jpg" class="card-img" alt="brand">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-light bg-secondary">OUR PASSION</h5>
                            <p class="card-text text-light">It's more than just a watch. It is a work of art that combines not only excellent workmanship, but also passion and creativity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="p-3 border bg-bisque">
                        <h1 class="glow">EDWatches</h1>
                        <hr>
                        <p class="fs-4 bg-transparent text-white-50">The moment has finally come! Our team at Edi Watches is proud to announce the new brand has arrived!
                            We transformed the passion into a true masterpiece thanks to enormous effort, passion and unwavering commitment. From now on, every watch will stand out not only for its character but also for its style and the highest quality.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <hr class="bg-info">
            <br>
            <!-- footer section-->
            <footer class="text-center text-lg-start bg-light text-muted">

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2023 Copyright:
                    <a class="text-reset fw-bold" href="#">Roman Jodlowski</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div>


<!--Collection page section-->

    <div class="tab-pane fade" id="nav-ourCollection" role="tabpanel" aria-labelledby="nav-ourCollection-tab" tabindex="0">
        <br>

<br>
        <div class="container overflow-hidden text-center">
            <div class="row g-5">
                <div class="col-md-12">
                    <div class="card text-bg-dark">
                        <img src="image/imgBrand.jpg" class="card-img" alt="brand">
                        <div class="card-img-overlay">
                            <h5 class="card-title text-light bg-secondary">OUR PASSION</h5>
                            <p class="card-text text-light">It\'s more than just a watch. It is a work of art that combines not only excellent workmanship, but also passion and creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

<!--        card body-->
<?php
# Access session.
               # session_start() ;

        #Open database connection.
        require ( 'connect_db.php' ) ;
        echo '
<div class="dropup">
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="dropbtn" type="button"> Filter Of The Content </button>
  <div class="dropup-content">
    <a type="button" onclick="filterSelection(\'all\')"> Show all </a>
    <a type="button" onclick="filterSelection(\'women\')"> Women </a>
    <a type="button" onclick="filterSelection(\'men1\')"> Men </a>
  </div>
</div>
</div>
<div class="container future-movie">
<br>
<hr class="bg-info">

<div class="card-body">
				<div class="row">
';
# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve women watches  from 'product' database table.
$qw = "SELECT * FROM product WHERE cat='women'" ;
$rw = mysqli_query( $link, $qw ) ;

# women's watches
if ( mysqli_num_rows( $rw ) > 0 )
{
    while ( $row = mysqli_fetch_array( $rw, MYSQLI_ASSOC ))
    {
        echo '
<div class="filterDiv women">
<div class="cardP text-center text-white bg-transparent mb-4">
    <a href="paypal.php?id='.$row['id'].'">
    <img class="card-img-top" src='. $row['img'].' alt="Product"></a>
  <ul class="list-group list-group-flush">
    <li class="list-group-item lh-1"><h4>' . $row['watch_name'] . '</h4></li>
    <li class="list-group-item lh-sm">' . $row['further_info'] . '</li>
    <li class="list-group-item lh-1">Availability: ' . $row['availability'] . '</li>
    <li class="list-group-item lh-1">Category: ' . $row['cat'] . '</li>
  </ul>
  <div class="card-body">
    <a href="paypal.php?id=' . $row['id'] . '" type="button" class="btn btn-outline-light">An item price £' . $row['price'] . '</a>
  </div>
    </div>
    </div>
';
    }
# Close database connection.
#mysqli_close( $link) ;
}

# Retrieve men watches  from 'product' database table.
$q = "SELECT * FROM product WHERE cat='men'" ;
$r = mysqli_query( $link, $q ) ;

# women's watches
if ( mysqli_num_rows( $r) > 0 )
{
    while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
    {
        echo '
<div class="filterDiv men1">
<div class="cardP text-center text-white bg-transparent mb-4">
    <a href="paypal.php?id='.$row['id'].'">
    <img class="card-img-top" src='. $row['img'].' alt="Product"></a>
  <ul class="list-group list-group-flush">
    <li class="list-group-item lh-1"><h4>' . $row['watch_name'] . '</h4></li>
    <li class="list-group-item lh-sm">' . $row['further_info'] . '</li>
    <li class="list-group-item lh-1">Availability: ' . $row['availability'] . '</li>
    <li class="list-group-item lh-1">Category: ' . $row['cat'] . '</li>
  </ul>
  <div class="card-body">
    <a href="paypal.php?id=' . $row['id'] . '" type="button" class="btn btn-outline-light">An item price £' . $row['price'] . '</a>
  </div>
    </div>
    </div>
';
    }
# Close database connection.
#mysqli_close( $link) ;
}
?>
        <br>
        <hr class="bg-info">
        <br>
        <!-- footer section-->
        <footer class="text-center text-lg-start bg-light text-muted">

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright:
                <a class="text-reset fw-bold" href="#">Roman Jodlowski</a>
            </div>
            <!-- Copyright -->
        </footer>

    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c === "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) === -1) {element.className += " " + arr2[i];}
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
    </script>
        <br>
        <hr class="bg-info">
    </div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>