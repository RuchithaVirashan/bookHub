<?php
$serverName = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "productdb";

$conn = mysqli_connect($serverName, $dbUsername, $dBPassword, $dBName);
if (!$conn) {
    die("connection error:" . mysqli_connect_error());
}
