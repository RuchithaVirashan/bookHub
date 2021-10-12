<?php

require_once("./home/homeDb.php");
require_once("./home/item-component.php");

session_start();
$sql = "SELECT * FROM productb";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    if (isset($_POST['remove'])) {
        if ($_GET['action'] == 'remove') {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value["product_id"] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                    //echo "<script>window.location = 'cart.php'</script>";
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/cart.css" />
    <link rel="stylesheet" href="./styles/home_style.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
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



    <!--shoping cart-->
    <?php
    require_once("./home/homeDb.php");
    require_once("./home/item-component.php");
    ?>
    <div class="container-fluid">
        <!--header-->
        <h3 class="text-center"><b>My Cart</b>
        </h3>
        <br>
        <br>
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <?php
                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['id'] == $id) {
                                    cartElement($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_author']);
                                    $total = $total + (float)$row['product_price'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                        echo "<img src=\"./Image/empty_cart.png\" alt=\"Empty Cart\" class=\"img-fluid\" style=\"height: 200px;\">";
                    }
                    

                    ?>

                </div>
            </div>
            <div id="cartBox" class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                $_SESSION['count'] = $count;
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                                    echo $total;
                                    ?></h6>

                        </div>

                    </div>
                </div>
                <button id="buyButton" type="submit" class="btn btn-outline-dark mt-3">Proceed to Buy</button>
            </div>

        </div>
    </div>



    <script src="js/cart.js"></script>


    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>

</body>

</html>