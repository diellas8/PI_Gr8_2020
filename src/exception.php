<?php
if (isset($_POST['submit'])){
    include_once 'mysql_connect';
    $first = $_POST['Emri'];
    $last = $_POST['Mbiemri'];
    $uname = $_POST['Username'];
    $email = $_POST['E-mail'];
    $password = $_POST['Password'];
    $cpass = $_POST['Cpassword'];
    $dl = $_POST['Data'];
    $gender = $_POST['gender'];



    if (empty($first) || (empty($last) (empty($uname) || (empty($email) || (empty($password) || (empty($cpass) || (empty($dl) || (empty($gender) || ){
        header("Location: ../index.php?signup=empty")

    }
    else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../index.php?signup=invalidemail")

        }
        else{
            echo "Sign up the user!";
        }
    }
}
else{
    header("Location: ../index.php?signup=error")
}
?>
