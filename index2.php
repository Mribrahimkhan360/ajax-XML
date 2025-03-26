<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<div id="objID"></div>
	<input type="text" onkeyup="makerequest(this.value)">
	<script>
		var xmlhttp;
		if (window.XMLHttpRequest()) 
		{
			xmlhttp = new XMLHttpRequest();
		} 
		else {
			xmlhttp = new ActiveXObject();
		}



		// function given_text,objID
		function makerequest(given_text,objID) {
			var sarverPage = 'search.php?word='+given_text;
			xmlhttp.open("GET", sarverPage);
			xmlhttp.onreadystatechange = function (argument) {
				if (xmlhttp.readyState = 4 && xmlhttp.status == 200) 
				{
					document.getElementById('objID').innerHTML = xmlhttp.resposnseText;
				}
			};
			xmlhttp.send(null);
		}
	</script>
</body>
</html>