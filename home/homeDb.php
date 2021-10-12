<?php

//class CreateDb{

//public $servername;
// public $username;
// public $password;
// public $dbname;
//public $tablename;
//public $con;

//class constructor
// public function __construct(
$servername = "localhost";
$username = "root";
$password = "";
//   )
// {
//  $this->dbname = $dbname;
//  $this->tablename = $tablename;
// $this->servername = $servername;
// $this->username = $username;
// $this->password = $password;

// create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed : " . mysqli_connect_error());
}

// query
$sql = "CREATE DATABASE IF NOT EXISTS productdb";

$database = "productdb";
// execute query
if (mysqli_query($con, $sql)) {

    $con = new mysqli($servername, $username, $password, $database);


    // sql to create new table for book
    $sql = " CREATE TABLE IF NOT EXISTS productb
        (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
         product_name VARCHAR (25) NOT NULL,
         product_price FLOAT,
         second_price FLOAT,
         product_image VARCHAR (100)
        );";

    if (!mysqli_query($con, $sql)) {
        echo "Error creating table : " . mysqli_error($con);
    }
} else {
    return false;
}

//testing....
// execute query
if (mysqli_query($con, $sql)) {

    $con = new mysqli($servername, $username, $password, $database);


    // sql to create new table for author
    $sql = " CREATE TABLE IF NOT EXISTS authortb
    (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     author_name VARCHAR (25) NOT NULL,
     author_since FLOAT,
     author_image VARCHAR (100)
    );";

    if (!mysqli_query($con, $sql)) {
        echo "Error creating table : " . mysqli_error($con);
    }
} else {
    return false;
}
        //}

        // get product from the database
       // public function getData(){
        //$sql = "SELECT * FROM $this->tablename";

       // $result = mysqli_query($this->con, $sql);

        //if(mysqli_num_rows($result) > 0){
       // return $result;
        //}
