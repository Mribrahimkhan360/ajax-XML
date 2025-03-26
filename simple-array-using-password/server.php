<?php 
// echo 'Hello';
$number1 = $_GET['number1'];

// if (isset($number1)){
// 	echo 'Sum : ' . $number2+$number1;
// 	echo '<br/>';
// 	echo 'Div : ' . $number1/$number2;
// 	echo '<br/>';
// 	echo 'Mult : ' . $number1*$number2;
// 	echo '<br/>';
// 	echo 'Sub : '.$number1-$number2;
// }
$data = array('$','A','g','#','%','C','T','I');

for ($i=0; $i < $number1; $i++) { 
	$rand = rand(0,8);
	echo $data[$rand];
}
?>
