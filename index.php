
<?php session_start();
define("LOGO", "CONCOMITANT"); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo LOGO;?></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css">
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
				<h1 id="logo"><?php echo LOGO;?></h1>
					<?php if(isset($_SESSION['success']) and isset($_SESSION['username'])){ ?>
					<div class="success" style="background-color:#b2d8b2 ; font-size:1.5em; ">
						<p style="display: inline; margin-left:5%;">
							<?php echo $_SESSION['success'];?>
									
						</p>
						<p style="display:inline; margin-left:20%;"> 
						Welcome <strong><?php echo $_SESSION['username']?></strong>
						</p>
						<p style="display: inline; margin-left:20%;">
							<a href="index.php?logout='1'" style="color:red; margin-left:32px;">Log Out</a>
							<?php if(isset($_GET["logout"])){ unset($_SESSION["success"]); unset($_SESSION['username']);
							header("location: index.php");}?>
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
						<li><a href="#">HOMEPAGE</a></li>
						<li><a href="src/about.php">ABOUT</a></li>
						<li><a href="src/game.php">GAME</a></li>
						<li><a href="src/team.php">TEAM</a></li>
						<li><a href="src/gallery.php">GALLERY</a></li>
						<li><a href="src/contact.php">CONTACT</a></li>
						<li><a href="src/covid.html">COVID LIVE UPDATE</a></li>
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
				xmlhttp.open("GET", "src/suggest.php?q="+str, true);
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

		
<div class="mainContent">


		<section class="foto">
			
			<div id="slideShow">
				<div class="slideshow-container">

						<div class="mySlides fade">

						  <img src="foto/41302.jpg" >
						</div>
						
						<div class="mySlides fade">
						  <img src="foto/31189.jpg">
						</div>
						
						<div class="mySlides fade">
						  <img src="foto/376855.jpg">
						</div>

						<div class="mySlides fade">
							<img src="foto/41302.jpg">
						  </div>

						<div class="mySlides fade">
							<img src="foto/7285.jpg">
					  </div>
					
							<div class="slidePosition">
								<a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-circle-left"></i></a>
								<a	onclick="sliderNr(1)"class="slideNr"><i class="fas fa-circle"></i></a>
								<a	onclick="sliderNr(2)"class="slideNr"><i class="fas fa-circle"></i></a>
								<a	onclick="sliderNr(3)"class="slideNr"><i class="fas fa-circle"></i></a>
								<a	onclick="sliderNr(4)"class="slideNr"><i class="fas fa-circle"></i></a>
								<a	onclick="sliderNr(5)"class="slideNr"><i class="fas fa-circle"></i></a>
								<a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
						<br>
		</div>

		
		</section>

<button onclick="topFunction()" id="myBtn" title="Kthehu ne fillim">Kthehu ne fillim</button>
<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




		<section class="mesi">
		<table class="topmesi">
			<tr>
				<td>
					<legend>Vivamuslibero Augue</legend>
					<img src="foto/social.png">
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
				</td>
				<td>
					<legend>Vivamuslibero Augue</legend>
					<img src="foto/leaf.png">
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
				</td>
				<td>
					<legend>Vivamuslibero Augue</legend>
					<img src="foto/social.png">
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
				</td>
				<td>
					<legend>Vivamuslibero Augue</legend>
					<img src="foto/leaf.png">
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
				</td>
				
			</tr>
		</table>
		</section>
		<hr style="margin: 0" />
		<section>
		<table class="botmesi">
			<tr>
				<td>
					<img src="foto/signup.jpg" width="200px" height="130px">
					<legend>Energjia e ripertritshme</legend>
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
						<a href="#">View Details >></a>
				</td>
				<td>
					<img src="foto/plane.png" width="200px" height="130px">
					<legend>Porti detar</legend>
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
					<a href="#">View Details >></a>
				</td>
				<td>
					<img src="foto/watches.jpg" width="200px" height="130px">
					<legend>Shop</legend>
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
						<a href="#">View Details >></a>
				</td>
				<td>
					<img src="foto/bread.jpg" width="200px" height="130px">
					<legend>Kuzhina</legend>
					<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
						<a href="#">View Details >></a>
				</td>
				
			</tr>
		</table>
		</section>

</div>



<section><table class="kontaktet" border="0 0 1px 0">
		<tr>
			<td><legend>CONTACT DETAILS</legend>
				<p>CONTACT DETAILS
					<p>Tel: 0033 25874693333
					<p>Fax: 0388 14523658887
					<p>enndrimaxharraj@gmail.com</p></td>
			<td>
				<legend>QUICK LINKS</legend>
				<p style="text-decoration: underline"><a href="https://www.telegrafi.com/" target="_newblank" style="text-decoration: none;">Telegrafi</a></p style="text-decoration: underline">
				
				<p style="text-decoration: underline"><a href="https://www.filma24.cc" target="_newblank" style="text-decoration: none;">Filma24</a></p>
				
				<p style="text-decoration: underline"><a href="https://www.github.com" target="_newblank" style="text-decoration: none;">GitHub</a></p>
				
				<p style="text-decoration: underline"><a href="https://fiek.uni-pr.edu" target="_newblank" style="text-decoration: none;">Fiek</a></p>
				
			</td>
			<td>
				<legend>FROM THE BLOG</legend>
				<h4>Blog Post Title</h4>
				<p>Posted by Admin on 00.00.0000</p>
				<p>Faqja e grupit 46</p>
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





	<script>
//X = 1		
		var x = 1;
//Fillo sliderin nga pozita 1 x=1
            showSlides(x);
//Kur klikohet butoni next at`her rrite x per 1 dhe shfaq faqen x+1 = 2 ose 3 ...
            function plusSlides(n) {
            showSlides(x += n);
            }

//Curret Slide tregon se ne qfar numri eshte sllajdi aktual p.sh 3
            function currentSlide(n) {
            showSlides(x = n);
            }
//Kur te klikohet pika shfaq ate foto p.sh pika 4 vendos foton 4 ne slider
			function sliderNr(i) {
				showSlides(x = i);
			}

//Funksoni showSlides
            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {x = 1}    
            if (n < 1) {x = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[x-1].style.display = "block";  
            dots[x-1].className += " active";
            }
	</script>
</body>
</html>

