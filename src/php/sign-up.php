<?php 
require_once("mysql_conncect.php");
$errors = array();

if(isset($_POST["submit"])){
    array_push($errors, "Couldn't sign up");
    $name = mysqli_escape_string($connection ,$_POST["Emri"]);
    $last_name = mysqli_escape_string($connection ,$_POST["Mbiemri"]);
    $username = mysqli_escape_string($connection ,$_POST["Username"]);
    $email = mysqli_escape_string($connection ,$_POST["E-mail"]);
    $password = mysqli_escape_string($connection ,$_POST["Password"]);
    $birthday = mysqli_escape_string($connection ,$_POST["Data"]);
    $gender = mysqli_escape_string($connection ,$_POST["gender"]);
    

    if(empty($name)){
        array_push($errors, "Name is required.");
    }
    if(empty($last_name)){
        array_push($errors, "Last Name is required.");
    }
    if(empty($username)){
        array_push($errors, "Username is required.");
    }
    if(empty($email)){
        array_push($errors, "E-mail is required.");
    }
    if(empty($password)){
        array_push($errors, "Password is required.");
    }
    if(empty($birthday)){
        array_push($errors, "Birthday is required.");
    }
    if(empty($gender)){
        array_push($errors, "Gender is required.");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists.");
      }
  
      if ($user['email'] === $email) {
        array_push($errors, "Email already in use.");
      }
    }

    if(count($errors) == 1){
        unset($errors[0]);
        array_push($errors, "Signed up successfully. Now you can log in.");
        $password = md5($password);
        $query = "INSERT INTO users (ID, name, last_name, username, email, password, birthday, gender)".
        " VALUES (NULL, '$name', '$last_name', '$username', '$email', '$password', '$birthday', '$gender')";
        mysqli_query($connection, $query);

    }
    
    


}


?>