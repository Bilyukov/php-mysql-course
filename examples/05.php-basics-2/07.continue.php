<!DOCTYPE html>
<html>
	<head lang="en">
		<title>CONTINUE LOOP EXECUTION</title>
		<style>	* {	font-size: 22px;}</style>
	</head>
<body>
<?php

	for($i=0; $i <= 10; $i++){

		if($i % 2 == 0){
			continue;
		}
		
		echo "Нечетно число: $i <br />";
	}
	
?>
</body>
</html>

