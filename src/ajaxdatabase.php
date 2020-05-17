<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" id="dbtable">
  <h2 style="margin-left: 11em">Te dhenat nga databaza</h2></br>
	<table class="table table-bordered table-sm" style="background-color: lightgrey">
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
</body>
</html>