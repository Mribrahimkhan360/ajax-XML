<?php 
// echo 'Hello';
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];

if (isset($number1)){
	echo 'Sum : ' . $number2+$number1;
	echo '<br/>';
	echo 'Div : ' . $number1/$number2;
	echo '<br/>';
	echo 'Mult : ' . $number1*$number2;
	echo '<br/>';
	echo 'Sub : '.$number1-$number2;
}

?>
