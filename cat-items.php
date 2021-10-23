<?php

session_start();
if (isset($_GET['name'])) {
    $_SESSION['cat'] = $_GET['name'];
} else {
    $categoryName = $_SESSION['cat'];
}
$categoryName = $_SESSION['cat'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlentities($categoryName) ?></title>


    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/home_style.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/cat-items.css" />
    <link rel="icon" type="image/ico" href="./Image/logo1.ico">
    <?php require_once "head.php" ?>

</head>


<body>



    <?php require_once "nav.php" ?>


    <?php
    require_once("./home/homeDb.php");
    require_once("./home/item-component.php");

    ?>



    <div class="container">
        <div class="row text-center py-5">
            <?php
            $results_per_page = 8;
            $sql = "SELECT * FROM productb where FIND_IN_SET('$categoryName',product_category)";
            $results = mysqli_query($con, $sql);
            $number_of_result = mysqli_num_rows($results);
            $number_of_page = ceil($number_of_result / $results_per_page);


            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }
            $page_first_result = ($page - 1) * $results_per_page;

            $query = "SELECT *FROM productb where FIND_IN_SET('$categoryName',product_category) LIMIT " . $page_first_result . ',' . $results_per_page;
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['second_price'], $row['product_image'], $row['id']);
                }
            }

            ?>
        </div>
        <div class="row justify-content-center">

            <?php
            if ($number_of_page > 1) {
                for ($page = 1; $page <= $number_of_page; ++$page) {


                    echo ('<a href = "cat-items.php?page=' . $page . '"><button class="btn btn-outline-info my-3" id="pages">
                        ' . $page . '</button> </a>');
                }
            }
            ?>
        </div>
    </div>


    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>

</html>