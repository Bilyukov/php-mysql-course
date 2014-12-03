<!DOCTYPE html>
<html>
<head>
    <title>Сума на две числа</title>
</head>
<body>
	<form method="get">
		<label for="a">x</label>
		<input type="text" name="x" id="x"/>
		<label for="b">y</label>
		<input type="text" name="y" id="y"/>
		<input type="submit" name="submit" value="Пресметни"/><br />
	</form>

	<?php
	
	if (isset($_GET['submit'])) {
		$x = $_GET['x'];
		$y = $_GET['y'];
		$sum = $x + $y;
		echo 'Сумата на числата е '. $sum .' :)';
	}
	
	?>	   
</body>
</html>