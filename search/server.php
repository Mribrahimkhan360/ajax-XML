<?php 
// echo 'Hello';
$given_text = $_GET['word']; 
$data = array("Pizza", "Burger", "Pasta", "Sushi", "Tacos", "Biryani", "Salad");

if (in_array($given_text, $data)) {
	echo "data fund!";
}
else{
	echo 'Data not found!';
}

?>
