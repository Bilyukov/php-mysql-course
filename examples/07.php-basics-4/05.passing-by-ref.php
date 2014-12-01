<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
	
	
	$number = 12;
	
	$multiplier = 3;
	
	multiply($number, $multiplier);
	
	echo "12 умножено по 3 = $number";
	
	
	function multiply(&$number, $multiplier) {
		$number *= $multiplier;
	}

	

?>

</body>
</html>