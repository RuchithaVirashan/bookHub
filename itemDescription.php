<?php
session_start();
$name = $_GET['name'];
require_once "home/homeDb.php";

$sql1 = "SELECT * FROM productb WHERE product_name='$name'";
$result = $con->query($sql1);
$row = $result;

while ($rows = $result->fetch_assoc()) {
    $price = $rows['product_price'];
    $image = $rows['product_image'];
    $name = $rows['product_name'];
    $second = $rows['second_price'];
    $dis = $rows['product_description'];
    $author = $rows['product_author'];
    $category = $rows['product_category'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= htmlentities($name) ?></title>
    <link rel="icon" type="image/ico" href="./Image/logo1.ico">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/description.css" />
    <link rel="stylesheet" href="./styles/home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <?php require_once "head.php" ?>
</head>

<body>

    <?php require_once "nav.php" ?>
    <div class="row">

        <div class="col-xs-1 col-sm-2 col-md-2"></div>
        <div class="col-xs-10 col-sm-8 col-md-8">

            <div class="container" id="itemCard">
                <div class="row ">
                    <div class="col-md-6 col-sm-6" id="product-img">

                        <img class="image-fluid" src="<?= htmlentities($image) ?>" alt="product">
                    </div>


                    <div class="col-md-6 col-sm-6" id="desc">
                        <div id="itemName"> <?= htmlentities($name) ?></div>
                        <div id="authorName"><b><?= htmlentities($author) ?></b></div>
                        <div id="category"><?= htmlentities($category) ?></div>
                        <div id="itemPrice">$ <?= htmlentities($price) ?> <s class="text-secondary"> $<?= htmlentities($second) ?></s></div>
                        <div id="itemDescription"><?= htmlentities($dis) ?></div>

                    <div class="row" id="Buttons">
                        
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col">
                                <button class="btn btn-outline-dark my-3" id="buyButton">Buy Now</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-dark my-3" name="add" id="cartButton">Add To Cart</button>
                            </div>
                            <!-- <div class="col-md-2"></div> -->
                             
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-xs-1 col-sm-2 col-md-2"></div>
        <!--header2-->
        <div class="container-fluid">
            <hr>
        </div>

        <div class="container">
            <h4>Top selling by <?= htmlentities($author) ?></h4>
        </div>




        <!--other books-->
        <?php
        require_once("./home/homeDb.php");
        require_once("./home/item-component.php");

        //Create instance of createdb class
        // $database=new CreateDb("Productdb", "productb");

        ?>

        <div class="container">
            <div class="row text-center py-5">
                <?php
                $sql = "SELECT * FROM productb WHERE product_author='$author' LIMIT 2,4";
                $result = mysqli_query($con, $sql);
                // $result = $database->getData();
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        component($row['product_name'], $row['product_price'], $row['second_price'], $row['product_image'], $row['id']);
                    }
                }
                ?>
            </div>
        </div>
        <br>
        <br>


    </div>


    <?php require_once "script.php" ?>
    <!--<footer id="footer1">-->
    <?php require_once "footer.php" ?>
    <!--</footer>-->


</body>

</html>