<!DOCTYPE html>
<html>
<head>
	<title>Ajax kerkesa 1</title>
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
</head>
<body>
	<div class="container">
	    <h1>Kerko userat</h1>
	    <form> 
	    	Kerko: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
	    </form>
	    <p>Sugjerime: <span id="output" style="font-weight:bold"></span></p>
</div>
</body>
</html>
