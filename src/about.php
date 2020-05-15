<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>CONCOMITANT</title>
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/mainAbout.css">
	<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a32d392887.js" crossorigin="anonymous"></script>
</head>
<body>


 

	<header>
		<section><nav>
			<!--Menuja e pergjithshme -->
		<ul class="smmenu">
			<li><i class="fab fa-linkedin-in"></i></li>
			<li><i class="fab fa-twitter"></i></li>
			<li><i class="fab fa-pinterest"></i></li>
			<li><i class="fab fa-google"></i></li>
			<li><i class="fas fa-rss-square"></i></li>
		</ul>
	</nav>
</section>
<section>
	<nav>
	<h1>CONCOMITANT</h1>
	<?php if(isset($_SESSION['success']) and isset($_SESSION['username'])){ ?>
					<div class="success" style="background-color:#b2d8b2 ; font-size:1.5em; ">
						<p style="display: inline; margin-left:5%;">
							<?php echo $_SESSION['success'];?>
									
						</p>
						<p style="display:inline; margin-left:20%;"> 
						Welcome <strong><?php echo $_SESSION['username']?></strong>
						</p>
						<p style="display: inline; margin-left:20%;">
							<a href="about.php?logout='1'" style="color:red; margin-left:32px;">Log Out</a>
							<?php if(isset($_GET["logout"])){ unset($_SESSION["success"]); unset($_SESSION['username']);
							header("location: about.php");}?>
						</p>
					</div>
					<?php } ?>
	
		<div class="topmenu">
		<ul>
		<?php if(!(isset($_SESSION['success']) and isset($_SESSION['username']))){ ?>
						<li><a href="src/signup.php">Sign Up |</a></li>
						<li><a href="src/login.php">Login |</a></li>
						<?php } ?>
			 <li><a href="https://rss.com/" target="_newblank">RSS Feeds |</a></li>
			 <li><a href="https://telegrafi.com/" target="_newblank">Archived News</a></li>
		</ul>
	</div>
	</nav>
</section>
	<section>
	<nav>
		<ul class="mainmenu">
			<li><a href="../index.php">HOMEPAGE</a></li>
			<li><a href="./about.php">ABOUT</a></li>
			<li><a href="./game.php">GAME</a></li>
			<li><a href="./team.php">TEAM</a></li>
			<li><a href="./gallery.php">GALLERY</a></li>
			<li><a href="../src/contact.php">CONTACT</a></li>
			<li><input class="button" type="submit" name="submit" value="SEARCH"><input type="text" name="searchbox" placeholder="Search Our Website..." ></li>
		</ul>
	</nav>
</section>
</header>

<div class="aboutContent">
 
	<video width="320" height="240" controls autoplay loop>
		<source src="../foto/waterfall.mp4" type="video/mp4"><br>
		
	  Your browser does not support the video tag.
	  </video>
<!-- autoplay funksionon ne browsera tjere si edge,mozilla...-->
	  <audio controls autoplay loop>
		  <source src=" ../foto/lothm.mp3" type="audio/mp3">
	  Your browser does not support the audio element.
	  </audio>

	
</div>



<section><table class="kontaktet" border="0 0 1px 0">
		<tr>
			<td><legend>CONTACT DETAILS</legend>
				<p>CONTACT DETAILS
					<p>Tel: xxxx xxxxxxxxxxx
					<p>Fax: xxxx xxxxxxxxxxx
					<p>Email:contact@mydomain.com</p></td>
					<td>
						<legend>QUICK LINKS</legend>
						<p style="text-decoration: underline">Link Text Here</p style="text-decoration: underline">
						
						<p style="text-decoration: underline">Link Text Here</p>
						
						<p style="text-decoration: underline">Link Text Here</p>
						
						<p style="text-decoration: underline">Link Text Here</p>
						
					</td>
			<td>
				<legend>FROM THE BLOG</legend>
				<h4>Blog Post Title</h4>
				<p>Posted by Admin on 00.00.0000</p>
				<p>ndmd,ngfdng df sjkgfjg sjkdfgsd bkkbf</p>
					<a href="#">Read More>></a>
			</td>
			<td>
				<legend>GRAB OUR NEWSLETTER</legend><br>
				<input class="name"type="name" name="name" placeholder="Name"><br>
				<br><input class="email" type="Email" name="Email" placeholder="Email"><br>
				<br><input class="submitp" type="submit" name="SUBMIT" placeholder="SUBMIT"><br>
			</td>
		</tr>
	</table>
</section>
<footer class="footer">
<p>Copyright &copy 2013 - All Right Reserved - Domain Name</p>
</footer>
</body>
</html>
