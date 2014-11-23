<!DOCTYPE html>
<html>
	<head lang="en">
		<title>PHP Условия</title>
		<style>	* {	font-size: 22px;}</style>
	</head>
<body>
<?php
	$a = 1;
	$b = '1';
	
	if($a == $b){
		echo 'Стойността на <strong>$a</strong> е равна на стойността на <strong>$b</strong>.';
	} else {
		echo 'Стойността на <strong>$a</strong> не е равна на стойността на <strong>$b</strong>.'; 
	}
	
	echo '<br /><br /><br />';
	
	$c = 1;
	$d = '1';
	
	if($c === $b){
		echo 'Стойността на <strong>$c</strong> е равна на стойността на <strong>$d</strong>.';
	} else {
		echo 'Стойността на <strong>$c</strong> не е равна на стойността на <strong>$d</strong>.'; 
	}
	
	echo '<br /><br /><br />';
	
	$e = 12;
	
	$f = 35;
	
	if(!($e > 22 && $f <= 14)){
		echo "Условието е изпъленно!";
	}
	
	echo '<br /><br /><br />';
	
	$g = false;
	$h = true;
	
	if(!($g && $h)){ //еквиваленто на (!$g || !$h)
		echo "Вярно!";
	}
	
	echo '<br /><br /><br />';
	
	if(!($g || $h)){ //еквиваленто на (!$g && !$h)
		echo "Вярно!";
	}
	
?>
</body>
</html>

