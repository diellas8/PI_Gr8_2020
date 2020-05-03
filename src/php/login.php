<?php 
require_once("mysql_conncect.php");

if (isset( $_POST["Submit"] ))
{

$username = $_POST["Username"];
$password = $_POST["Password"];


$username = mysqli_escape_string($connection, $username);
$password = mysqli_escape_string($connection, $password);


$errors = array();

if(empty($username)){
    array_push($errors, "Username is required");
}
if(empty($password)){
    array_push($errors, "Password is required");
}

if(count($errors) == 0){
    $password = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
        echo"You are now logged in";
    }
    else {
        echo "Wrong!";
    }}
else {
    foreach($errors as $error){
        echo $error . "\n";
    }

}
}




?>