<?php 
require_once("mysql_conncect.php");
session_start();
$errors = array();
if (isset( $_POST["Submit"] ))
{

$username = mysqli_escape_string($connection, $_POST["Username"]);
$password = mysqli_escape_string($connection, $_POST["Password"]);



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

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in.";
        header('location: ../index.php');
    }
    else {array_push($errors, "Wrong username/password");}
    

}
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');
}




?>