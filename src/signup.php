<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<style>
	body
	{
		background-image: url(../foto/signup.jpg);
		font-family: Arial, Helvetica, sans-serif;
		box-sizing: border-box;
	}

	div#form
	{
		margin: 5em 0em 0em 30em;
		display: inline-block;
		text-align: center;
		background-color: rgba(0,0,0,0.3);
		border-radius: 20px;
		width: 400px;
		height: 680px;

	}
	div input
	{
		border-radius: 5px;
		padding: 0.5em;
	}
	button#reset
	{
		background-color: red;
		color: white;
		width: 100px;
		height: 50px;
		border: none;
		margin-top: 20px;
	}
	div input#reset:hover
	{
		background-color: darkred;
		transition: 0.6s;
	}
	.regjistro
	{
		background-color: green;
		color:white;
		border:none;
		width: 100px;
		height: 50px;
	}
	.regjistro:hover
	{
		background-color: darkgreen;
		transition: 0.5s;
	}


	.errors {
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
	<section>
	<a href="../index.php" style="text-decoration: none; color: orange;"><p style="border: 2px solid red; display: inline-block;"><b>&#171; Kthehu ne faqen kryesore</b></p></a>
</section>
		<div id="form">
		<h2 style="color: darkblue">R E G J I S T R O H U N I</h2>
		<?php if(isset($_GET["error"])){
			if (strpos($_GET["error"], "invalidname")===0){
				echo "<p  class = \"errors\">Name field should contain only characters and whitespaces! </p>";
			}
			else if (strpos($_GET["error"], "invalidlastname")===0){
				echo "<p  class = \"errors\">Name field should contain only characters and whitespaces! </p>";
			}
			else if (strpos($_GET["error"], "invalidusername")===0){
				echo "<p  class = \"errors\">Please write a valid username</p>";
			}
			else if (strpos($_GET["error"], "invalidemail")===0){
				echo "<p  class = \"errors\">Please write a valid email </p>";
			}
			else if (strpos($_GET["error"], "invalidpwd")===0){
				echo "<p  class = \"errors\">Password should be longer than 8 characters but not more than 30. Should have at least one capitalized letter, at least one number and at least one symbol! </p>";
			}
			else if (strpos($_GET["error"], "invalidinputs")===0){
				echo "<p  class = \"errors\">Please fill out the form properly! </p>";
			}
			else if (strpos($_GET["error"], "pwdmatch")===0){
				echo "<p  class = \"errors\">Password doesn't match!</p>";
			}
			else if (strpos($_GET["error"], "usrtaken")===0){
				echo "<p  class = \"errors\">That username is taken! </p>";
			}
			else if (strpos($_GET["error"], "sqlerror")===0){
				echo "<p  class = \"errors\">Can't connect to our database. Try again later! </p>";
			}
			else {
				echo "<p  class = \"errors\">We are having problems. Try again later! </p>";
			}
			
		
		} ?>
		<form method="POST" action="php/sign-up.php">
			<fieldset>
	       
	<label><strong>Emri: </strong></label><br>
	<input type="name" name="Emri" placeholder="Shenoni emrin..." required=""><br>
	<br><label><strong>Mbiemri: </strong></label><br>
	<input type="surname" name="Mbiemri" placeholder="Shenoni mbiemrin..." required=""><br>
	<br><label><strong>Username: </strong></label><br>
	<input type="Username" name="Username" placeholder="Shenoni username..." required=""><br>
	<br><label><strong>E-mail: </strong></label><br>
	<input type="email" name="E-mail" placeholder="Shenoni email-in..." required=""><br>
	<br><label><strong>Password: </strong></label><br>
	<input type="password" onclick="myPassword()" name="Password" id="password" placeholder="Shenoni password-in..." required=""><br>
	<br><label><strong>Confirm password: </strong></label><br>
	<input type="confirm_password" onclick="myPassword()" name="Cpassword" id="cpassword" placeholder="Shenoni password-in perseri" required=""><br>
	<br><label><strong>Data e lindjes: </strong></label><br>
	<input type="date" name="Data"><br><br>
	<br><label><strong>Gjinia: </strong></label><br>
	<input type="radio" name="gender" value="Male" checked>M
	<input type="radio" name="gender" value="Female">F<br>
</fieldset>
	<button class="regjistro" name = "submit">Regjistrohu</button>
	<button onclick="myReset()" id="reset" type="reset" name="reset" >Fshij</button>
	<p style="font-family: Times New Roman; color: white;">Keni llogari? Atehere <a href="login.php" style="text-decoration: none; color: darkblue;"><b>Kyquni/Log IN</b></a></p>
</form>
</div>
<script>
	function myPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


	function myReset()
	{
	 	alert("Te dhenat jane fshire!");
	}
</script>

</body>
</html>