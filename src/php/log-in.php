<?php 
require_once("mysql_conncect.php");
if (isset( $_POST["Submit"] ))
{

$username_or_email =  $_POST["Username"];
$password =  $_POST["Password"];



if(empty($username_or_email) || empty($password)){
    header("location: ../login.php?error=emptyfields");
    exit();
}


    $password;
    $query = "SELECT * FROM users WHERE username=? OR email=?";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement, $query)){
        header("location: ../login.php?error=sqlerror");
        exit();
     }
    else {
        mysqli_stmt_bind_param($statement, "ss", $username_or_email, $username_or_email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        if($row = mysqli_fetch_assoc($result)){
            $passwordCheck = password_verify($password, $row["password"]);
            if($passwordCheck == false){
                header("location: ../login.php?error=wrongpwd");
                exit();
            }
            else if ($passwordCheck == true){
                session_start();
                $_SESSION['username'] = $row["username"];
                $_SESSION['success'] = "You are now logged in.";
                header('location: ../../index.php?login=success');
                exit();

            }
            else {
                header("location: ../login.php?error=sqlierror");
                exit();

            }
        }
        else {
            header("location: ../login.php?error=nouser");
            exit();
        
        }

    }
 
 
    



mysqli_stmt_close($statement);
mysqli_close($connection);


}
else {
    header("location: ../login.php");
    exit();

}




