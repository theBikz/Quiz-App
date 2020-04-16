<?php
$value1 = $_GET['value1'];
echo "Value is ".$value1;
if ($value1 == 'father') {
	
	header('location:http://localhost/treassure/map3.html');
}
else {
	header('location:http://localhost/treassure/level2.htm');
	
}
?>