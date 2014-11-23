<!DOCTYPE html>
<html>
	<head lang="en">
		<title>BREAK LOOP EXECUTION</title>
		
		<style>
			* {
				font-size: 22px
			}
		</style>
	</head>
<body>
<?php
	for($i=0; $i <= 10; $i++){
		echo "Числото е $i <br />";
		if($i == 7){
			break;
		}
	}
	
	echo "<br /><br /><br /><br /><br /><br /><br /><br />";
	
	$text = "Числата са: ";
	$number = 0;
	while($number < 25){
		$text .= "$number ";
		
		
		if(mb_strlen ($text, 'UTF-8') > 20) {
			break;
		}
	
		echo $number++ . "<br />";
	}
	
	echo $text;
	
	echo "<br /><br /><br /><br /><br /><br /><br /><br />";
	
	//Алгоритъм за намиране на най-малко общо частно
	$number = 3;
	$divider = 5;
	$curent_number = 1;
	
	do{
		$result = $number * $curent_number++;
		if($result % $divider == 0){
			echo "Най-малкото общо (НОК) частно на $number и $divider е $result";
			break;
		}
	
	}while(1);
	
?>
</body>
</html>

