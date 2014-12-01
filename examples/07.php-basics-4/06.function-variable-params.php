<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
	
	
	function calculateSum() {
		$sum = 0;
		$paramsArray = func_get_args();
		foreach ($paramsArray as $arg) {
			$sum += $arg;
		}
		return $sum; 
	}
	
	echo calculateSum(1, 2) . '<br />';
	echo calculateSum(10, 20, 30) . '<br />'; 
	echo calculateSum(10, 22, 0.5, 0.75, 12.50) . '<br />'; 

?>

</body>
</html>