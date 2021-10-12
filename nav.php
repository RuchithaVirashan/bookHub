<?php

// session_start();
if (isset($_SESSION['cart'])) {
    $numItems = count($_SESSION['cart']);
} else {
    $numItems = 0;
}

$loginStatus = false;
// $_SESSION["userId"] = false;

if (isset($_SESSION["userId"])) {
    if ($_SESSION["userId"] = true) {
        $loginStatus = true;
        $userName = $_SESSION["userUid"];
    } else {
        $loginStatus = false;
    }
}

// if (($_SESSION["userId"]) && ($_SESSION["userId"]) == true) {

//     $loginStatus = true;
// } else {

//     $loginStatus = false;
// }




?>



<!-- <head>
    <link rel="stylesheet" href="./styles/navbar.css" />
</head>

<body> -->
<nav class="navbar navbar-expand-md navbar-light" id="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" id="brand" href="home.php">
            <img src="./image/bookgroup2.png" id="logo" width="80px" height="40px" alt="bookstore" />
            Sarasi Bookstore</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto" id="navbarItems">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
                <a class="nav-link" href="categories.php">Categories</a>
                <a class="nav-link" href="about.php">About us</a>


                <?php

                if ($loginStatus == true) {
                    echo ("
                    <a class=\"nav-link\" href=\"cart.php\"><i id=\"cartIco\" class=\"bi bi-cart has-badge\"><span class=\"badge\">$numItems</span></i></a>
                    <a class=\"nav-link\" href=\"user_profile.php\"><i class=\"bi bi-person-circle \"> hi $userName</i></a>
                    <a class=\"nav-link\" href=\"logout_user.php\"><i id=\"\" class=\"\">Log Out</i></a>");
                } else {
                    echo ("
                    <a class=\"nav-link\" href=\"login.php\"><i id=\"cartIco\" class=\"bi bi-cart has-badge\"></i></a>
                    <a class=\"nav-link\" href=\"login.php\"><i class=\"bi bi-person-circle\"> Log in / sign up</i></a>");
                }
                ?>



            </div>
        </div>
        <div class="dropdown d-md-none">
            <button onclick="myFunction()" class="dropbtn bi bi-list"></button>
            <div id="myDropdown" class="dropdown-content">
                <?php

                if ($loginStatus == true) {
                    echo ("
    <a class=\"nav-link\" href=\"user_profile.php\"><i class=\"bi bi-person-circle \"> hi $userName</i></a>
    <a class=\"nav-link\" href=\"cart.php\"><i id=\"cartIco\" class=\"bi bi-cart has-badge\"><span class=\"badge\">3</span></i></a>
    <a class=\"nav-link\" href=\"logout_user.php\"><i id=\"\" class=\"\">Log Out</i></a>
    ");
                } else {
                    echo ("
                <a class=\"nav-link\" href=\"login.php\"><i class=\"bi bi-person-circle\"> Log in / sign up</i></a>
                <a class=\"nav-link\" href=\"login.php\"><i id=\"cartIco\" class=\"bi bi-cart has-badge\"></i></a>
                
                ");
                }
                ?>
                <a class="nav-link" id="linknames" aria-current="page" href="home.php">Home</a>
                <a class="nav-link" id="linknames" href="categories.php">Categories</a>
                <a class="nav-link" id="linknames" href="#">About us</a>
            </div>
        </div>
    </div>
</nav>


<script src="js/nav.js"></script>