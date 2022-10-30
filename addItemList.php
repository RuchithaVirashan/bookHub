<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/addItem.css" />
    <link rel="icon" type="image/ico" href="./Image/logo1.ico">
    <?php require_once "head.php" ?>

</head>
<style>
    body{
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
    <?php require_once "admin_navbar.php" ?>

    <div class="contaniner">

        <div class="row" id="Formcrd">
            <div class="col-md-2"></div>
            <div class="card col-md-8">
                <h2 id="header">Add a New Book</h2>
                <form method="post" id="frm" enctype="multipart/form-data">
                    <table id="frmtbl" class="center">
                        <tr>
                            <td>
                                <label>Book Name</label>
                            </td>
                            <td>
                                <input type="text" name="bName" required /><br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" required /><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <lebel>Book Description</lebel>
                            </td>
                            <td><input type="text" name="description" required /></td>
                        </tr>
                        <tr>
                            <td><label>Price</label></td>
                            <td>
                                <input type="number" name="price" required />$
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select name="categories" id="cat" required>
                                    <option value="">-- select a category--</option>
                                    <option value="Art">Art</option>
                                    <option value="Comic">Comic</option>
                                    <option value="Fantacy">Fantacy</option>
                                    <option value="Horror">Horror</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Book Cover</label></td>
                            <td><input type="file" name="bimage" required></td>
                        </tr>
                        <tr>
                            <td id="subbut" colspan="2">
                                <button class="btn btn-outline-dark my-3" type="submit" name="submit" id="submition">GO</button>
                            </td>
                        </tr>
                    </table>


                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>


    <?php require_once "script.php" ?>

    <?php require_once "footer.php" ?>
</body>

</html>

<?php
require_once "./home/homeDb.php";

echo ($_POST['bName']);
echo ($_POST['categories']);

$bookName = $_POST['bName'];
$author = $_POST['author'];
$desc = $_POST['description'];
$cat = $_POST['categories'];
$price = $_POST['price'];
$sprice = $price + 2;
$qnt =$finalQnt -1;


if (($_FILES['bimage']['name'] != "")) {
    // Where the file is going to be stored
    $target_dir = "/xampp/htdocs/php_project/image/";
    $file = $_FILES['bimage']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['bimage']['tmp_name'];
    $path_filename_ext = $target_dir . $filename . "." . $ext;
    $dbpath = "image/" . $filename . "." . $ext;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Sorry, file already exists.";
    } else {
        move_uploaded_file($temp_name, $path_filename_ext);
        echo "Congratulations! File Uploaded Successfully.";
    }
}

$sql = "INSERT INTO productb (product_name,product_price,second_price,product_image,product_description,product_author,product_category) 
VALUES ('$bookName','$price','$sprice','$dbpath','$desc','$author','$cat')";

if(isset($price)){
    mysqli_query($con, $sql);
}

?>
