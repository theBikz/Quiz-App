<?php
$value1 = $_GET['value1'];
echo "Value is ".$value1;
if ($value1 == 'candle') {
	
	header('location:http://localhost/treassure/submit.htm');
}
else {
	header('location:http://localhost/treassure/level5.htm');
	
}
?>