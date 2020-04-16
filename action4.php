<?php
$value1 = $_GET['value1'];
echo "Value is ".$value1;
if ($value1 == 'map') {
	
	header('location:http://localhost/treassure/map5.html');
}
else {
	header('location:http://localhost/treassure/level4.htm');
	
}
?>