<!DOCTYPE html>
<html>
<head>
	<title>Kerkesat e projektit</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
	body
	{
		width: 100%;
	}
	div#phpclass
	{
		color: white;
		background-color: lightblue;
	}
	div#dydtrans
	{
		border: 2px solid black;
		width: 200px;
		height: 100px;
		background-color: yellow;
		color: black;
		margin-top: 50px;
		transform: rotate(30deg);
	}
	div#tredtrans
	{
		border: 2px solid black;
		width: 200px;
		height:100px;
		background-color: lightblue;
		color: black;
		-webkit-transform: rotateY(180deg);
		transform: rotateY(180deg);
	}
	div#resizecss
	{
		border: 2px solid;
		padding: 3em;
		width: 200px;
		resize: both;
		background-image: linear-gradient(black,white,black);
		overflow: auto;
	}
	div#multiplecolumns
	{
		column-count: 3;
		margin-top: 30px;
		border: white solid 2px;
	}
	button#btnr
	{
		border: none;
		background-color: rgba(0,0,0,0.6);
		color: white;
		height: 25px;
		width:30px;
	}
	button#btnr:hover
	{
		background-color: red;
		transition: 0.6s;
	}
</style>
<body>
<div id="phpclass">
<?php
$string = "Projekti ne lenden Programimi ne Internet";
print_r(explode(' ', $string));
print_r(explode(' ', $string[15]));
echo "<br>";
echo "<br>";

$string1 = "Fakulteti i Inxhinierise Elektrike dhe Kompjuterike. FIEK <br/>";
$string2 = preg_replace("/Kompjuterike/", '<h4>Kompjuterike</h4>', $string1);

echo $string1;

echo "<br/>";

echo $string2;

$string1_array = preg_split("/ /", $string1);

print_r($string1_array);

$gjatesia = strlen($string1);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Gjatesia e tekstit eshte: $gjatesia karaktere!";
?>
	</div>
<div id="dydtrans">Ky eshte nje transformim 2 dimensional</div><br><br><br><br>
<div id="tredtrans">Ky eshte nje transformim 3D</div><br>
<div id="resizecss">Resize me ane te cursorit</div>
<div id="multiplecolumns" style="color: yellow;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
<br>
<p><button onclick="Numeruesi()" type="button" id="btnr">Kliko! per te numeruar</button>
</p>
<div id="rezultati"></div>
<p style="color: white;">Kliko butonin per te rritur numrin e klikimeve</p>
<p style="color: white;">Mbyllni faqen per te resetuar numrin e klikimeve</p>

<!--Mund te perdoret edhe session Storage nese zevendsojme local me session, gjithashtu local storage ruan te dhenat deri me nje date te pacaktuar per ndryshim nga session-->

<script>
function Numeruesi(){
if (typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("rezultati").innerHTML = "Ju keni klikuar " + sessionStorage.clickcount + " here ne buton.";
  } else {
    document.getElementById("rezultati").innerHTML = "Shfletuesi juaj nuk e mbeshtet kete efekt te numerimit";
  }
}	
</script>
<input id="demo" type="text">
<button type="button" onclick="myFunction()">Shtyp nje numer mes 5 dhe 10</button>
<p id="numri"></p>

<script>
function myFunction() {
  var message, x;
  message = document.getElementById("numri");
  message.innerHTML = "";
  x = document.getElementById("demo").value;
  try { 
    if(x == "")  throw "Nuk keni shkruar asgje";
    if(isNaN(x)) throw "Nuk keni shtypur nje numer";
    x = Number(x);
    if(x < 5)  throw "Numri eshte me i vogel se 5";
    if(x > 10)   throw "Numri eshte me i madh se 10";
  }
  catch(err) {
    message.innerHTML = "GABIM: " + err;
  }
}
</script>
<div id="clocky"></div>
<script>
	function time(){
	var today = new Date();
	var h = today.getHours()
  if (h>12) {h= h- "12"} ;
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clocky').innerHTML = h + ":" + m + ":" + s;
  var r = parseInt(s) * 1;
  var g = parseInt(s) * 3;
  var b = parseInt(s) * 5;
  document.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
  var t = setTimeout(time, 500);
}

function checkTime(i) {
	if (i < 10) {i = "0" + i};
	return i;
}

time();
</script>
<script>
$(document).ready(function(){
  $("button#prg").click(function(){
    $("p#prg").slideToggle();
  });
});
</script>
<p id="prg" style="color: lightgreen"><b>Paragraf per jQuery</b></p>

<button id="prg">Kliko butonin per te fshehur/shfaqur paragrafin</button>
<br>
<script>
$(document).ready(function(){
  $(".buton1").click(function(){
    $(".pfade").fadeOut();
  });
  $(".buton2").click(function(){
    $(".pfade").fadeIn();
  });
});
</script>
<p class="pfade" style="color: white;">Kliko butonat per fade in dhe out</p>
<button class="buton1">Fade out</button>
<button class="buton2">Fade in</button>
</body>
</html>