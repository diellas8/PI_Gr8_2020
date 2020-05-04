<?php 
require_once("mysql_conncect.php");
$errors = array();

if(isset($_POST["submit"])){
    $name = mysqli_escape_string($connection ,$_POST["Emri"]);
    $last_name = mysqli_escape_string($connection ,$_POST["Mbiemri"]);
    $username = mysqli_escape_string($connection ,$_POST["Username"]);
    $email = mysqli_escape_string($connection ,$_POST["E-mail"]);
    $password = mysqli_escape_string($connection ,$_POST["Password"]);
    $birthday = mysqli_escape_string($connection ,$_POST["Data"]);
    $gender = mysqli_escape_string($connection ,$_POST["gjinia"]);
    

    if(empty($name)){
        array_push($errors, "Name is required");
    }
    if(empty($last_name)){
        array_push($errors, "Last Name is required");
    }
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($email)){
        array_push($errors, "E-mail is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if(empty($birthday)){
        array_push($errors, "Birthday is required");
    }
    if(empty($gender)){
        array_push($errors, "Gender is required");
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "INSERT INTO users (ID, name, last_name, username, email, password, birthday, gender)".
        " VALUES (NULL, '$name', '$last_name', '$username', '$email', '$password', '$birthday', '$gender')";
        mysqli_query($connection, $query);

    }
    


}


?>