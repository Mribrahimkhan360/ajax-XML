    
var xmlhttp;
        if (window.XMLHttpRequest) {
            // For modern browsers
            xmlhttp = new XMLHttpRequest();
        } else {
            // For older versions of Internet Explorer (IE6, IE5)
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        // Function to make AJAX request with two parameters: given_text and objID
        


        function makerequest(given_text, objID) {

        	//console.log("Successfully checked");

            //var serverPage = 'search.php?text='+given_text;
            var serverPage = 'search.php?Word=' + given_text;
            
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('objID').innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.send(null);
        }

        
    