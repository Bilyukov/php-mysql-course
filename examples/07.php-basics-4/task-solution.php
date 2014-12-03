<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Return Демонстрация</title>
</head>
<body>
<?php
	
	for($i = 0; $i < 10; $i++){
		$a = rand(1, 30);
		$b = rand(1, 30);
		
		$area = calculateTriangleArea($a, $b);
		
		$color = "";
		
		if($area < 10){
			$color = "green";
		} else if ($area >= 10 && $area <= 23){
			$color = "red";
		} else {
			$color = "blue";
		}
		
		echo "<div style=\"color:" . $color . "\">Лицето на триъгълник с страна $a и висиочина $b е равно на $area</div>";
	}
	
	function calculateTriangleArea($side, $height){
		return ($side * $height) / 2; 
	}
	

?>

</body>
</html>