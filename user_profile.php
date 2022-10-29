<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_profile</title>

    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/user_profile.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="icon" type="image/ico" href="./Image/logo1.ico">
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


    <?php require_once "nav.php" ?>
    <!--user profile--->

    <div class="container">
        <br>
        <!--profile details-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-4">
                    <img src="Image/profile.png" id="user_img" class="img-fluid" alt="User_image">
                </div>
                <div class="col-sm-10 col-md-10 col-8">
                    <h3>Hello </h3>

                </div>
            </div>
        </div>

        <!--profile setting-->
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/orders.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your order</h5>
                            <p>Return product,Buy thing again</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/security.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Login & security</h5>
                            <p>Change login details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/prime.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Prime</h5>
                            <p>View benifit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/gift.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Gift cards</h5>
                            <p>Gift voucher details </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/payment.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Payment</h5>
                            <p>Manage payment settings </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/profiles.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Profile</h5>
                            <p>Manage and remove user profile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/messages.jpg" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Messages</h5>
                            <p>View messages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/archived.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Archived order</h5>
                            <p>Manage your archived orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card h-90" id="abtcard">
                    <div class="row" id="test">
                        <div class="col-md-4 col-sm-4 col-4 col-centered" id="test">
                            <img src="Image/profile/lists.png" class="img-fluid" id="card_img" alt="img">
                        </div>
                        <div class="col-md-8 col-sm-8 col-8 col-centered" id="test">
                            <h5>Your Lists</h5>
                            <p>View,modify and share your list</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logout">
        <a href="logout_user.php">Logout</a>
    </div>

    </div>

    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>

</html>