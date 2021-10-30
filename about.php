<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/about.css">
    <link rel="icon" type="image/ico" href="./Image/logo.ico">
    <?php require_once "head.php" ?>

</head>
<style>
    body {
        background-image: url(Image/background4.jpg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>
    <?php require_once "script.php" ?>


    <div class="container-fluid">

        <div class="section-main">
            <div class="container-fluid">
                <div class="section-1">
                    <h3>About Us</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Best online book store is our</h5>
                            <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable. Quaerat provident commodi consectetur veniam similique ad
                                earum omnis ipsum saepe, voluptas, hic voluptates pariatur.</p>
                            <a href="#" class="btn btn-outline-dark my-3">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img src="./Image/books.jpg" class="img-fluid" alt="books">
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <?php require_once "footer.php" ?>
</body>

</html>