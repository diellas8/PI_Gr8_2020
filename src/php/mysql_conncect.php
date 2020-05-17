<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

try {
$connection = mysqli_connect($servername, $username, $password, $database);
}
catch (mysqli_sql_exception $e){
    die("Could not connect to database");
}





?>