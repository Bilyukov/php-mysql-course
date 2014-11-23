<!DOCTYPE html>
<html>
	<head lang="en">
		<title>FOR LOOP</title>
		
		<style>
			* {
				font-size: 22px
			}
		</style>
	</head>
<body>
<?php
	for($i=0; $i <= 10; $i++){
		$result = $i * $i;
		echo "$i X $i = $result <br />";
	}
	
	echo "<br /><br /><br /><br /><br /><br /><br /><br />";
	
	
	$number = 2;
	
	for($i=1024; $i > 2;){
		$result = $i / $number;
		echo "$i / $number = $result <br />";
		$i = $result;
	}
	
	
?>
</body>
</html>

