<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./styles/signup.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <?php require_once "head.php" ?>
    <!-- <link rel="stylesheet" href="../css/mobile-style.css"> -->
</head>

<body>
    <header>
        <?php require_once "nav.php" ?>
    </header>
    <section class="signup">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="pray">
                        <img src="./Image/image.png" alt="img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel text-center">
                        <div class="signup">
                            <form action="./includes/signup.inc.php" method="post" class="signup-form">
                                <h1>Get Started With Your Account</h1>
                                <table class="name">
                                    <tr>
                                        <td>
                                            <div class="input-feild">
                                                <input type="text" name="name" placeholder="Full Name">
                                            </div>
                                        </td>

                                </table>
                                <div class="contact">
                                    <div class="input-feild">
                                        <input type="text" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="input-feild">
                                        <input type="text" name="uid" placeholder="Username">
                                    </div>

                                </div>
                                <table class="pass">
                                    <tr>
                                        <td>
                                            <div class="input-feild">
                                                <input type="password" name="pwd" placeholder="Password">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-feild">
                                                <input type="password" name="pwdrepeat" placeholder="Re-Password">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <div class="button">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary solid font-weight-bold">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET["erorr"])) {
            if ($_GET["erorr"] == "emptyinput") {
                $message = "Please Enter your details...";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "invalidUid") {
                $message = "Invalid user name..";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "invalidemail") {
                $message = "Invalid Email..";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "pwdNotMatch") {
                $message = "Password Does Not Match..";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "usernameTaken") {
                $message = "Your username or Email has been taken...";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "stmtfailed") {
                $message = "Something went wrong....! Try Again...!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            if ($_GET["erorr"] == "none") {
                $message = "You are Sign In....!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }

        ?>

    </section>

    <?php require_once "footer.php" ?>
    <?php require_once "script.php" ?>
</body>

</html>