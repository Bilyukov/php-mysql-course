<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
	$arr = array('IT-Academy', 2,	"my test");

	echo "<p><strong>var_dump() </strong></p>";
	echo "<pre>";
	var_dump($arr);
	echo "</pre>";
	echo "<hr/>";
	echo "<p><strong>print_r() </strong></p>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	$countElements = count($arr);
	echo "<p><strong>Размер на масива $countElements </strong></p>";
?>

</body>
</html>

