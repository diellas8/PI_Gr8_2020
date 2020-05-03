<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test12";


$connection = mysqli_connect($servername, $username, $password, $database);

if(!$connection)
{
    die("Error! Could not connect to database." . mysqli_connect_error());
}
else
{
    echo"Connected to database successfully.";
}




?>