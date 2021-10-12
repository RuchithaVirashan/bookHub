<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location:../signup.php?erorr=emptyinput");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location:../signup.php?erorr=invalidUid");
        exit();
    }
    if (invalidmail($email) !== false) {
        header("location:../signup.php?erorr=invalidemail");
        exit();
    }

    if (pwdmatch($pwd, $pwdRepeat) !== false) {
        header("location:../signup.php?erorr=pwdNotMatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location:../signup.php?erorr=usernameTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location:../signup.php");
}
