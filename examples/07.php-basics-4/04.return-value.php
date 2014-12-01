<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Return Демонстрация</title>
	<style>
		.sup {
		  position: relative;
		  bottom: 1ex; 
		  font-size: 80%;
		}
		div {
			font-size: 24px;
			font-weight: bold;
		}
		
	</style>
</head>
<body>
<?php
	
	
	for($i = 0; $i < 3; $i++){
		$width = rand(1, 50);
		$height = rand(1, 20);
		
		$area = calculateRectangleArea($width, $height);
		
		echo "<div>Лицето на правоъгълник със страни $width cm. и $height cm. е равено на $area cm<span class=\"sup\">2</span></div>";
	}
	
	
	function calculateRectangleArea($width, $height) {
		$area = $width * $height;
		return $area;
	}
	

?>

</body>
</html>