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

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
			<li><a href="src/covid.html">COVID LIVE UPDATE</a></li>
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
<div class="container" id="dbtable">
  <h2 style="margin-left: 11em">Te dhenat nga databaza</h2></br>
	<table class="table table-bordered table-sm" style="background-color: lightgrey; margin-left: 11em">
    <thead>
      <tr>
        <th>Emri</th>
        <th>Mbiemri</th>
        <th>E-mail</th>
        <th>Telefoni</th>
		<th>Qyteti</th>
      </tr>
    </thead>
    <tbody id="table">
    </tbody>
  </table>
</div>
<h2 style="margin-left: 13em"">Regjistro te dhena ne databaze</h2>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="name">Emri:</label>
			<input type="text" class="form-control" id="name" placeholder="Emri" name="name">
        </div>
        <div class="form-group">
			<label for="lastname">Mbiemri:</label>
			<input type="text" class="form-control" id="lastname" placeholder="Mbiemri" name="lastname">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="phone">Telefoni:</label>
			<input type="text" class="form-control" id="phone" placeholder="Telefoni" name="phone">
		</div>
		<div class="form-group" >
			<label for="city">Qyteti:</label>
			<input type="text" class="form-control" id="city" placeholder="Qyteti" name="city">
			</select>
		</div>
        <input type="button" name="save" class="btn btn-primary" value="Ruaj" id="butsave">
	</form>
</div>
<script>
	$.ajax({
		url: "load.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#table').html(data);
		}
	});
</script>
<script>
$(document).ready(function() {
	$('#butsave').click(function() {
        var name = $('#name').val();
        var lastname = $('#lastname').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();
		if(name!="" && email!="" && phone!="" && city!=""){
			$.ajax({
				url: "inserto.php",
				type: "POST",
				data: {
                    name: name,
                    lastname: lastname,
					email: email,
					phone: phone,
					city: city		
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Te dhenat tuaja jane regjistruar!');
						$('#table').load('#btnsave');
					}
					else if(dataResult.statusCode==201){
					   alert("Ka ndodhur nje gabim!");
					}
					
				}
			});
		}
		else{
			alert('Ju lutem plotesoni te gjitha fushat!');
		}
	});
});
</script>


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

