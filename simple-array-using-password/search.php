<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search PHP AJAX</title>
	<link href="assets/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-3">
				<!-- Search Input -->
				<input type="text" class="form-control" onkeyup="makerequst(this.value)">
				<br>
				<div id="objID"></div>
			</div>
		</div>
	</div>	

	<script>
		var xmlhttp;

		// Initialize XMLHttpRequest
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
		}

		function makerequst() {
			//var searchPage = 'server.php?number=' + given_text + given_text_2;

			var given_text = document.getElementsByTagName('input')[0].value;
			//var given_text_2 = document.getElementsByTagName('input')[1].value;
			
			var searchPage = 'server.php?number1=' + given_text;

			xmlhttp.open("GET", searchPage, true);
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
					document.getElementById('objID').innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.send(null);
		}

		
	</script>
	<script src="assets/js/all.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>
