<?php session_start();
define("LOGO","CONCOMITANT" ); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Team</title>
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/mainTeam.css">

	<script src="https://kit.fontawesome.com/a32d392887.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<section>
			<nav>
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
				<h1><?php echo LOGO;?></h1>
				<?php if(isset($_SESSION['success']) and isset($_SESSION['username'])){ ?>
					<div class="success" style="background-color:#b2d8b2 ; font-size:1.5em; ">
						<p style="display: inline; margin-left:5%;">
							<?php echo $_SESSION['success'];?>
									
						</p>
						<p style="display:inline; margin-left:20%;"> 
						Welcome <strong><?php echo $_SESSION['username']?></strong>
						</p>
						<p style="display: inline; margin-left:20%;">
							<a href="team.php?logout='1'" style="color:red; margin-left:32px;">Log Out</a>
							<?php if(isset($_GET["logout"])){ unset($_SESSION["success"]); unset($_SESSION['username']);
							header("location: team.php");}?>
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
					<li><a href="../src/gallery.php">GALLERY</a></li>
					<li><a href="../src/contact.php">CONTACT</a></li>
					<li><a href="covid.html">COVID LIVE UPDATE</a></li>
					
					<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// AJAX REQ
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
						<li><input class="button" type="submit" name="submit" value="SEARCH"><input type="text" name="searchbox" onkeyup="showSuggestion(this.value)"; placeholder="Search Our Website..." ></li>
						<p id="output" style="background-color: white; color:black; margin-left:80%;"> </p>	
					
				</ul>
			</nav>
		</section>
	</header>

	<div class="teamContent">
		<?php
class student {
  private $name;
  private $email;
  private $id;
  function __construct($id, $email, $name) {
    $this->name = $name; 
    $this->email = $email;
    $this->id = $id;
  }
  function get_id(){
  	return $this->id;
  }
  function get_email(){
  	return $this->email;
  }
  function get_name() {
    return $this->name;
  }
}


$endritM = new student("170714100060","Enndritmaxharraj@gmail.com","Endrit Maxharraj");
$endritB = new student("170714100020","endrit.bytyqi@gmail.com","Endrit Bytyqi");
$noraB = new student("170714100032","Noraberisha@gmail.com","Nora Berisha");
$diellaS = new student("170714100033","Diellasimnica@gmail.com","Diella Simnica");

?>
		
<?php
$number = 4;
$str = "in this website";
printf("There are %u users in %s.",$number,$str);
?>		
<br>
<?php
$users = array("scroll", "for", "the", "users");
echo "You can " . $users[0] . " for " . $users[2] . " " . $users[3] . ".";
?>
	
	<div style=" display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: space-between;
	align-items: center;
	flex-wrap: wrap;
	align-content: center; ">
			<div class='developer dev1'>
			<h2><?php echo $endritM->get_name(); ?> </h2>
			<br><img src="../foto/maleAvatar.png" alt="Smiley face" height="100" width="100"></br>
			<h3><?php echo $endritM->get_id(); echo "<br />"; ?></h3>
			<p><?php echo $endritM->get_email(); ?> </p>
		</div>

		<div class='developer dev2'>
			<h2><?php echo $endritB->get_name(); ?> </h2>
			<br><img src="../foto/maleAvatar.png" alt="Smiley face" height="100" width="100"></br>
			<h3><?php echo $endritB->get_id(); echo "<br />"; ?></h3>
			<p><?php echo $endritB->get_email(); ?></p>
		</div>


		<div class='developer dev3'>
			<h2><?php echo $noraB->get_name(); ?> </h2>
			<br> <br><img src="../foto/femaleAvatar.png" alt="Smiley face" height="100" width="100">
			<br> </br>
			<h3><?php echo $noraB->get_id(); echo "<br />"; ?></h3>
			<p><?php echo $noraB->get_email(); ?></p>
		</div>

		<div class='developer dev4'>
			<h2><?php echo $diellaS->get_name(); ?>  </h2>
			<br> <br><img src="../foto/femaleAvatar.png" alt="Smiley face" height="100" width="100">
			<br> </br>
			<h3><?php echo $diellaS->get_id(); echo "<br />"; ?></h3>
			<p><?php echo $diellaS->get_email(); ?></p>
		</div>
	</div>

	</div>

	<section>
		<table class="kontaktet" border="0 0 1px 0">
			<tr>
				<td>
					<legend>CONTACT DETAILS</legend>
					<p>CONTACT DETAILS
					<p>Tel: xxxx xxxxxxxxxxx
					<p>Fax: xxxx xxxxxxxxxxx
					<p>Email:contact@mydomain.com</p>
				</td>
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
					<p>Lorem ipsum dolor sit amet.</p>
					<a href="#">Read More>></a>
				</td>
				<td>
					<legend>GRAB OUR NEWSLETTER</legend><br>
					<input class="name" type="name" name="name" placeholder="Name"><br>
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
