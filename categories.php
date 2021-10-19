<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/categories.css" />
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

    <div id="cate-name">
        <p>Categories</p>
    </div>
    <div class="Container" id="cntner">
        <div class="row">

            <?php

            require_once "./home/homeDb.php";
            require_once "./categories/cardcomp.php";

            $sql = "SELECT * from categories";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    card($row['categorie_name'], $row['image']);
                }
            }
            ?>

        </div>
    </div>

    <?php require_once "script.php" ?>
    <?php require_once "footer.php" ?>
</body>



</html>
