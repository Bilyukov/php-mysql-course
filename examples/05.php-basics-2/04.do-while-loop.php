<!DOCTYPE html>
<html>
<head lang="en">
    <title>DO While LOOP</title>
	
	<style>
		* {
			font-size: 22px
		}
	</style>
</head>
<body>
<?php
	$counter = 10;
	
	do{
		echo $counter . '</br>';
		$counter--;
	} while($counter > 0);
	
	
	echo "<br /><br /><br /><br /><br /><br /><br /><br />";
	
	$number = 10;
	
	do{
		echo "Стойността на променливата е $number";
	} while($number < 5);
	
?>
</body>
</html>

