<?php
$value1 = $_GET['value1'];
echo "Value is ".$value1;
if ($value1 == 'german') {
	
	header('location:http://localhost/treassure/map2.html');
}
else {
	header('location:http://localhost/treassure/level1.htm');
	
}
?>