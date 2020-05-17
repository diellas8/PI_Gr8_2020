<?php 
require_once("mysql_conncect.php");
$errors = array();

if(isset($_POST["submit"])){
    array_push($errors, "Couldn't sign up");
    $name = $_POST["Emri"];
    $last_name = $_POST["Mbiemri"];
    $username = $_POST["Username"];
    $email = trim($_POST["E-mail"]);
    $password = $_POST["Password"];
    $confirm_password = $_POST["Cpassword"];
    $birthday = $_POST["Data"];
    $gender = $_POST["gender"];
    
    $name_is_valid= preg_match("/^[a-zA-Z ]{2,31}*$/",$name); 
    $last_name_is_valid =preg_match("/^[a-zA-Z ]{2,31}*$/",$last_name);
    $email_is_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    $username_is_valid = preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $username);
    $password_is_valid = preg_match("#.*^(?=.{8,30})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password);

   if (!$name_is_valid && $last_name_is_valid && $username_is_valid && $email_is_valid && $password_is_valid){
        header("location: ../signup.php?error=invalidname&Mbiemri=".$last_name."&Username=".$username."&E-mail=".$email);
        exit();
    }
    else if ($name_is_valid && !$last_name_is_valid && $username_is_valid && $email_is_valid && $password_is_valid){
        header("location: ../signup.php?error=invalidlastname&Emri=".$name."&Username=".$username."&E-mail=".$email);
        exit();
    }
    else if ($name_is_valid && $last_name_is_valid && $username_is_valid && !$email_is_valid && $password_is_valid){
        header("location: ../signup.php?error=invalidemail&Emri=".$name."&Mbiemri=".$last_name."&Username=".$username);
        exit();
    } 
    else if ( $name_is_valid && $last_name_is_valid && !$username_is_valid && $email_is_valid && $password_is_valid ) {
        header("location: ../signup.php?error=invalidusrname&Emri=".$name."&Mbiemri=".$last_name."&Username=".$username."&E-mail=".$email);
        exit();
    }  
    else if($name_is_valid && $last_name_is_valid && $username_is_valid && $email_is_valid && !$password_is_valid){
        header("location: ../signup.php?error=invalidpwd&Emri=".$name."&Mbiemri=".$last_name."&Username=".$username."&E-mail=".$email);
        exit();
    }
    else if (!($name_is_valid || $last_name_is_valid || $username_is_valid || $email_is_valid || $password_is_valid)){
        header("location: ../signup.php?error=invalidinputs");
        exit();
    }
  
    else if ($password !== $confirm_password) {
        header("location: ../signup.php?error=pwdmatch&Emri=".$name."&Mbiemri=".$last_name."&Username=".$username."&E-mail=".$email);
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username=? or email = ?";
        $statement = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($statement, $sql)){
                header("location: ../src/signup.php?error=sqlerror");
                exit();
             }
            else {
                mysqli_stmt_bind_param($statement, "ss", $username, $email);
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);
                $check_data = mysqli_stmt_num_rows($statement);
                if($check_data > 0){
                    header("location: ../signup.php?error=usrtaken&Emri=".$name."&Mbiemri=".$last_name."&Username=".$username."&E-mail=".$email);
                    exit();
                }
                else {
                    $sql = "INSERT INTO users (name, last_name, username, email, password, birthday, gender)".
                    " VALUES (?,?,?,?,?,?,?)";
                    $statement = mysqli_stmt_init($connection);
                    if(!mysqli_stmt_prepare($statement, $sql)){
                        header("location: ../signup.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($statement, "sssssss", $name, $last_name,$username, $email, $hashedPassword, $birthday, $gender);
                        mysqli_stmt_execute($statement);
                        header("location: ../../index.php?signup=success");
                    }
                }
            }
        }
        mysqli_stmt_close($statement);
        mysqli_close($connection);
    }


    else{
        header("location: ../signup.php");
        exit();
    }


?>