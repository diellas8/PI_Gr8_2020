<?php
session_start();
require_once("PHPMailer/PHPMailerAutoload.php");
if(isset($_POST['submit'])){
    $send_to = $_POST['email'];
    $message = $_POST['message'];


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host= "smtp.gmail.com";
$mail->Port = "465";
$mail->isHTML();
$mail->Username="pi.projekti2020@gmail.com";
$mail->Password="projekti123";
$mail->setFrom("no-reply@projekti.com");
$mail->Subject= "Thanks for contacting us!";
$mail->Body = "We got your message saying ' $message '. We will respond soon.\n Thank you.";
$mail->addAddress($send_to);
$result = $mail->send();
if($result){
    $_SESSION['success'] = "Message sent!";

}


}









?>