<!DOCTYPE html>
<html>
<head lang="en">
    <title>While LOOP</title>
	
	<style>
		* {
			font-size: 22px
		}
	</style>
</head>
<body>
<?php
	$counter = 1;
	while($counter < 10){
		echo $counter.'</br>';
		$counter++;
	}
	
	echo "<br /><br /><br /><br /><br />";
	
	$number = 2;
	
	$power = 9;
	$current_power = 1;
	
	$result = 1;
	
	while($power >=	$current_power++)
		$result *= $number;
		
		
	echo "$number на степен $power е равно на $result";
	
?>
</body>
</html>

