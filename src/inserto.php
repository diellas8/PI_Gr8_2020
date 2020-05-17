<?php
	require_once("php/mysql_conncect.php");
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$sql = "INSERT INTO `user_data`( `name`,`lastname`,`email`, `phone`, `city`) 
	VALUES ('$name','$lastname','$email','$phone','$city')";
	if (mysqli_query($connection, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($connection);
?>