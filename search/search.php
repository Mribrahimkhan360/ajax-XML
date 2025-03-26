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
		<!-- Toast Alert -->
		<div id="customToast" class="alert alert-success position-fixed bottom-0 end-0 m-3" style="display: none;">
			 <div id="objID"></div>
		</div>

		<!-- Search Input -->
		<input type="text" class="form-control" onkeyup="makerequst(this.value)">

	</div>	

	<script>
		var xmlhttp;

		// Initialize XMLHttpRequest
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
		}

		function makerequst(given_text) {
			var searchPage = 'server.php?word=' + given_text;
			xmlhttp.open("GET", searchPage, true);
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
					document.getElementById('objID').innerHTML = 'Successfully ' + xmlhttp.responseText;
					showToast();
				}
			};
			xmlhttp.send(null);
		}

		function showToast() {
			let toast = document.getElementById("customToast");
			toast.style.display = 'block';

			setTimeout(() => {
				toast.style.display = 'none';
			}, 30000);
		}
	</script>
	<script src="assets/js/all.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>
