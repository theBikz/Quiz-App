<?php
$value1 = $_GET['value1'];
echo "Value is ".$value1;
if ($value1 == 'bookkeeper') {
	
	header('location:http://localhost/treassure/map4.html');
}
else {
	header('location:http://localhost/treassure/level3.htm');
	
}
?>