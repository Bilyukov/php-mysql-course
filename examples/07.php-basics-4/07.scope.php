<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
	
	$a = "IT Academy";
	
	showA();
	
	function showA(){
		global $a; 
		
		echo 'Стойността на променливата $а е : <strong>' . $a . '</strong>'; 
	}

?>

</body>
</html>