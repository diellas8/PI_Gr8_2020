<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>CONCOMITANT</title>
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/mainGallery.css">
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
							<a href="gallery.php?logout='1'" style="color:red; margin-left:32px;">Log Out</a>
							<?php if(isset($_GET["logout"])){ unset($_SESSION["success"]); unset($_SESSION['username']);
							header("location: gallery.php");}?>
						</p>
					</div>
					<?php } ?>
	
		<div class="topmenu">
		<ul>
		<?php if(!(isset($_SESSION['success']) and isset($_SESSION['username']))){ ?>
						<li><a href="src/signup.php">Sign Up |</a></li>
						<li><a href="src/login.php">Login |</a></li>
						<?php } ?>
			 <li><a href="#">RSS Feeds |</a></li>
			 <li><a href="#">Archived News</a></li>
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
			<li><a href="src/covid.html">COVID LIVE UPDATE</a></li>
			<li><input class="button" type="submit" name="submit" value="SEARCH"><input type="text" name="searchbox" placeholder="Search Our Website..." ></li>
		</ul>
	</nav>
</section>
</header>


<div class="mainGallery">

	<h1>CONCOMITANT GALLERY</h1>
	<hr>
	
	<h2>PORTFOLIO</h2>
	<p>Resize the browser window to see the responsive effect.</p>
	
	
	<div class="row">
	  <div class="column">
		<div class="content">
		  <img src="C:\Users\DELL\Desktop\wallpapers4k\38580.jpg" alt="Mountains" style="width:100%">
		  <h3>Mountains</h3>
		  <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
		</div>
	  </div>
	  <div class="column">
		<div class="content">
		<img src="C:\Users\DELL\Desktop\wallpapers4k\41302.jpg" alt="Lights" style="width:100%">
		  <h3>Nature</h3>
		  <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
		</div>
	  </div>
	  <div class="column">
		<div class="content">
		<img src="C:\Users\DELL\Desktop\wallpapers4k\31189.jpg" alt="Nature" style="width:100%">
		  <h3>Nature</h3>
		  <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
		</div>
	  </div>
	  <div class="column">
		<div class="content">
		<img src="C:\Users\DELL\Desktop\wallpapers4k\7285.jpg" alt="Mountains" style="width:100%">
		  <h3>Mountains</h3>
		  <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
		</div>
	  </div>
	
		</div>	
	</div>

<section><table class="kontaktet" border="0 0 1px 0">
		<tr>
			<td><legend>CONTACT DETAILS</legend>
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
				<p>Posted by Admin on 15.02.2020</p>
				<p>Nje galeri shume e bukur</p>
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

