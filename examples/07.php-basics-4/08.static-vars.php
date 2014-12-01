<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php

	echo "<div>Първо Извикване:</div>";
	incrementVar();
	
	echo "<br />";
	echo "<div>Второ Извикване:</div>";
	incrementVar();
	
	echo "<br />";
	echo "<div>Трето Извикване:</div>";
	incrementVar();
	
	echo "<br />";
	echo "<div>Четвърто Извикване:</div>";	
	incrementVar();
	
	function incrementVar(){
		static $count = 0;

		$count++;
		
		echo '<div>Стойността на променливата $count е : <strong>' . $count . '</strong></div>'; 
	}

?>

</body>
</html>