<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>CONCOMITANT GAMES</title>
	<link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/maingame.css">
	<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a32d392887.js" crossorigin="anonymous"></script>
	<style>
		#more {display: none;}
	</style>
</head>
<style>
	button
	{
		padding: 5px;
		text-align: center;
		margin-left: 4em;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.5);
		color: white;
	}
	button:hover
	{
		background-color: red;
	}
</style>
<body>
	<header>
		<section><nav>
			<!--Menuja e pergjithshme -->
		<ul class="smmenu">
			<li><i class="fab fa-linkedin-in"></a></i></li>
			<li><i class="fab fa-twitter"></i></li>
			<li><i class="fab fa-pinterest"></i></li>
			<li><i class="fab fa-google"></i></li>
			<li><i class="fas fa-rss-square"></i></li>
		</ul>
	</nav>
</section>
<section>
	<nav>
	<h1>CONCOMITANT GAMES</h1>
	<?php if(isset($_SESSION['success']) and isset($_SESSION['username'])){ ?>
					<div class="success" style="background-color:#b2d8b2 ; font-size:1.5em; ">
						<p style="display: inline; margin-left:5%;">
							<?php echo $_SESSION['success'];?>
									
						</p>
						<p style="display:inline; margin-left:20%;"> 
						Welcome <strong><?php echo $_SESSION['username']?></strong>
						</p>
						<p style="display: inline; margin-left:20%;">
							<a href="game.php?logout='1'" style="color:red; margin-left:32px;">Log Out</a>
							<?php if(isset($_GET["logout"])){ unset($_SESSION["success"]); unset($_SESSION['username']);
							header("location: game.php");}?>
						</p>
					</div>
					<?php } ?>
	<p style="font-size: 20px;color: red">Purchase Games and more...</p>
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
	<nav class="mainmenunav">
		<ul class="mainmenu">
			<li><a href="../index.php">		HOMEPAGE</a></li>
			<li><a href="./about.php">			ABOUT</a></li>
			<li><a href="./game.php">			GAME</a></li>
			<li><a href="./team.php">		    TEAM</a></li>
			<li><a href="./gallery.php">		GALLERY</a></li>
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
<div class="headerGames">
	<h2 class="gametitull"><strong>Lista e lojerave ne dispozicion: </strong></h2>
</div>
<div class="maingameContent">
	<marquee><div>
		<p style="display: inline-block; color: orange;">DOTA 2</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/dota.png" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">CS:GO</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/csgo.png" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">Fortnite</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/Fortnite.png" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">APEX LEGENDS</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/apex.jpg" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">Tomb Raider</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/tomb.jpg" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">PES2020</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/pes2020.jpg" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block;color: orange;">Cyberpunk 2077</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/Cyberpunk.jpg" width="100px" height="100px" style="display: inline-block;"></a>
		<p style="display: inline-block; color: orange;">Battlefield 1</p><a href="https://store.steampowered.com/" target="_newblank"><img src="../foto/battlefield1.jpg" width="100px" height="100px" style="display: inline-block;"></a>
	</div></marquee>
</div>
<div class="gameContent">
	<div class="row">
	  <div class="column">
		<div class="content">
		  <a href="https://www.g2a.com/grand-theft-auto-v-criminal-enterprise-starter-pack-rockstar-key-global-i10000171917001" target="_newblank"><img src="../foto/gta5.png" style="width: 100%; text-decoration: none;"></a>
		  <h3 style="text-align: center; color: orange;">Grand Theft Auto 5</h3>
		  <p style="font-style: italic; color: white;">Grand Theft Auto V is an open world, action-adventure video game developed by Rockstar North and published by Rockstar Games.

The game is composed of elements from driving and action-adventure games, and features <span id="pikat">...</span><span id="more">open world gameplay, in which players can interact with the game world at their leisure. The game is set within the fictional state of San Andreas, which is based on Southern California. Within San Andreas are the fictional city of Los Santos (based on Los Angeles) and an open countryside area. 

The single-player story is told through three player-controlled protagonists whom the player switches between???Michael, Trevor and Franklin???and the story follows their efforts to plan and execute six large heists to accrue wealth for themselves. An online multiplayer mode is included, allowing up to 16 players to engage in both co-operative and competitive gameplay in a recreation of the single-player setting.
<p class="releasedate">Release DATE: <p class="releasedate" style="color: lightgreen;">14/04/2015</p>
</span></p>
<button onclick="myFunctiongta()" id="butonirm">Lexo me shume</button>
<script>
function myFunctiongta() {
  var pikat = document.getElementById("pikat");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("butonirm");

  if (pikat.style.display === "none") {
    pikat.style.display = "inline";
    butonirm.innerHTML = "Lexo me shume"; 
    moreText.style.display = "none";
  } else {
    pikat.style.display = "none";
    butonirm.innerHTML = "Lexo me pak"; 
    moreText.style.display = "inline";
  }
}
function myFunctionpubg() {
  var pikaat = document.getElementById("pikatt");
  var moreeText = document.getElementById("moree");
  var bttnText = document.getElementById("butonirmm");

  if (pikaat.style.display === "none") {
    pikaat.style.display = "inline";
    butonirmm.innerHTML = "Lexo me shume"; 
    moreeText.style.display = "none";
  } else {
    pikaat.style.display = "none";
    butonirmm.innerHTML = "Lexo me pak"; 
    moreeText.style.display = "inline";
  }
  }
  function myFunctionrdr() {
  var pikatrdr = document.getElementById("pikatrdr");
  var moreTextrdr = document.getElementById("morerdr");
  var btnTextrdr = document.getElementById("butonirmrdr");

  if (pikatrdr.style.display === "none") {
    pikatrdr.style.display = "inline";
    butonirmrdr.innerHTML = "Lexo me shume"; 
    moreTextrdr.style.display = "none";
  } else {
    pikatrdr.style.display = "none";
    butonirmrdr.innerHTML = "Lexo me pak"; 
    moreTextrdr.style.display = "inline";
  }
  }
  function myFunctionaco() {
  var pikataco = document.getElementById("pikataco");
  var moreTextaco = document.getElementById("moreaco");
  var btnTextaco = document.getElementById("butonirmaco");

  if (pikataco.style.display === "none") {
    pikataco.style.display = "inline";
    butonirmaco.innerHTML = "Lexo me shume"; 
    moreTextaco.style.display = "none";
  } else {
    pikataco.style.display = "none";
    butonirmaco.innerHTML = "Lexo me pak"; 
    moreTextaco.style.display = "inline";
  }
  }
</script>
		</div>
	  </div>
	  <div class="column">
		<div class="content">
		  <a href="https://www.g2a.com/playerunknowns-battlegrounds-pubg-steam-key-global-i10000035511002" target="_newblank"><img src="../foto/pubg.jpg" alt="Lights" style="width:100%"></a>
		  <h3 style="text-align:center;color: orange;">PlayerUnknown's Battlegrounds PUBG</h3>
		  <p style="font-style: italic; color: white;">PUBG is a brand new battle royale 
multiplayer shooter, developed under the guidance<span id="pikatt">...</span><span id="moree"> of the genre's pioneer: Brendan 'PlayerUnknown' Greene.
Get on a plane as one of a hundred players, drop onto a huge island, find weapons and do your best to be the last one standing on a steadily shrinking map. Do you have what it takes? PLAYERUNKNOWN'S BATTLEGROUNDS (PC) will test you, 
make no mistake.
<p class="releasedate">Release DATE: <p class="releasedate" style="color: lightgreen;">14/04/2015</p></p></p>
<button onclick="myFunctionpubg()" id="butonirmm">Lexo me shume</button>

		</div>
	  </div>

	  <div class="column">
		<div class="content">
		<a href="https://www.g2a.com/red-dead-redemption-2-rockstar-key-europe-i10000174280037" target="_newblank"><img src="../foto/rdr2.jpg" alt="Nature" style="width:100%"></a>
		  <h3 style="text-align: center; color: orange;">Red Dead Redemption 2</h3>
		  <p style="font-style: italic; color: white;">Red Dead Redemption 2 is an action-adventure game it was released on Xbox One and PlayStation 4, and since 2019 it <span id="pikatrdr">...</span><span id="morerdr">
is also available on the PC. The game is a prequel to the Red Dead Redemption released in 2010 and focuses on the life 
of the outlaw Arthur Morgan. Enter and experience a truly massive world with an astounding amount of activities, 
interactions, beautiful visuals and more. 
If you have ever played the first RDR game, you might find a number of references to the characters and
events from this game. 
<p class="releasedate">RELEASE DATE: <p class="releasedate" style="color: lightgreen;">14/04/2015</p></p>
<button onclick="myFunctionrdr()" id="butonirmrdr">Lexo me shume</button>
		</div>
	  </div>
	  <div class="column">
		<div class="content">
		<a href="https://www.g2a.com/assassins-creed-origins-uplay-key-europe-i10000068314004" target="_newblank"><img src="../foto/aco.jpg" alt="ACO" style="width:100%"></a>
		  <h3 style="text-align: center;color: orange;">Assassin's Creed: Origins</h3>
		  <p style="font-style: italic; color: white;">Grand Theft Auto V is an open world, action-adventure video game developed by Rockstar North and published by Rockstar Games.

The game is composed of elements from driving<span id="pikataco">...</span><span id="moreaco"> and action-adventure games, and features open world gameplay, in which players can interact with the game world at their leisure. The game is set within the fictional state of San Andreas, which is based on Southern California. Within San Andreas are the fictional city of Los Santos (based on Los Angeles) and an open countryside area. 

The single-player story is told through three player-controlled protagonists whom the player switches between???Michael, Trevor and Franklin???and the story follows their efforts to plan and execute six large heists to accrue wealth for themselves.
<p class="releasedate">RELEASE DATE: <p class="releasedate" style="color: lightgreen;">14/04/2015</p></p>
		<button onclick="myFunctionaco()" id="butonirmaco">Lexo me shume</button>
		</div>
	  </div>
	
		</div>	
	</div>
</div>


	<section><table class="kontaktet" border="0 0 1px 0">
		<tr>
			<td><legend>CONTACT DETAILS</legend>
				<p>Na kontaktoni:
					<p>Tel: xxxx xxxxxxxxxxx
					<p>Fax: xxxx xxxxxxxxxxx
					<p>Email:contact@games.com</p></td>
			<td>
				<legend>QUICK LINKS</legend>
				<p>G2A</p>
				
				<p>Steam</p>
				
				<p>Epic Games</p>
				
				<p>Projekt Red</p>
				
			</td>
			<td>
				<legend>FROM THE BLOG</legend>
				<h4>Blog Post Title</h4>
				<p>Posted by Admin on 15/04/2021</p>
				<p>Lojerat me te mira te 2020</p>
					<a href="https://www.steemcommunity.com">Read More>></a>
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
<p>Copyright &copy 2020 - All Right Reserved - FIEK</p>
</footer>
</body>
</html>

