<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

	$array = array("банан", "ягода", "ябълка", "мандарина");

	$array[] = "диня";

	$size = count($array);

	for($i = 0; $i < $size; $i++){
		echo "<p>Искам да си купя " . $array[$i] . "!</p>";
	}

?>

</body>
</html>

