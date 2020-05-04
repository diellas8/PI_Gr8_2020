<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
	body
	{
	
		width: 200%;
		background: url(../foto/4kimage.jpg);
		background-size: 200%;

	}

	form
	{
		display: inline-block;
		margin-left: 480px;
		margin-top: 120px;
		border: none;
		background-color: rgba(0,0,0,0.6);
		border-radius: 10px;
		width: 360px;
		height:450px;
	}
	form h2
	{
		color: white;
		text-align: center;

	}
	legend
	{
		margin-left: 100px;
	}
	input
	{
		border: none;
		height: 35px;
		width: 100%;
		border-bottom: 2px solid #adadad;
		position: relative;
		text-align: center;
	}
	button#login
	{
		padding: 0.8em;
		border: none;
		background-color: red;
		color: white;
		width: 100%
	}
	button#login:hover
		{
			background-color: green;
			transition: 0.7s;
		}

	.errors
	   {
			width: 82%; 
			margin: 0px auto; 
			padding: 5px; 
			border: 1px solid #a94442; 
			color: #a94442; 
			background: #f2dede; 
			border-radius: 5px; 
			text-align: left;
		}
</style>
<body>
<a href="../index.php" style="text-decoration: none;color: red;"><p><strong>&#171;Kthehu ne faqen kryesore</strong></p></a>
<div id="login-form">
	<form name="loginf" onsubmit="return validoFormen()" method="post" action="login.php">
	<?php require_once("php/log-in.php")?>

		<h2>Kyquni/LOG IN</h2>
		<fieldset style="padding: 1em 2em 1em 2em">
		<?php if(count($errors) > 0){
			echo "<div class = \"errors\">";
			foreach($errors as $error){
				echo "<p>$error</p>";
			}
			echo "</div>";} ?>
			<legend><img src="../foto/login.png" style="width: 80px; height: 80px;"></img></legend>
			<label style="color: lightgrey"><b>Username: </b></label><br>
			<input type="username" name="Username" placeholder="Username" ><br>
			<label style="color: lightgrey;"><b>Password: </b></label><br>
			<input type="Password" name="Password" placeholder="Password" ><br>
			<br><button onclick="validoFormen()" id="login" name = "Submit">Kyçuni</button>
		</fieldset>
		<br><p style="color: white; margin-left: 40px;">Nuk keni llogari? Atehere <a href="signup.php" style="text-decoration: none; color: red; text-align: center;">Regjistrohuni</a></p>
	</form>
</div>
<script>
		
		function validoFormen(){
			var x = document.forms["loginf"]["username"].value;
			if (x == "") {
				alert("Shkruani username ");
				return false;
			}
			var x = document.forms["loginf"]["Password"].value
			if (x == ""){
				alert("Shkruani Passwordin");
				return false;
			}
		}
</script>
</body>
</html>