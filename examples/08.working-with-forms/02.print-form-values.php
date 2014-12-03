<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<body>
<?php

	$name = $_GET["name"];
	echo "<div>Име: <strong>$name</strong></div>";
	
	$mail = $_GET["mail"];
	echo "<div>Мейл: <strong>$mail</strong></div>";
	
	$password = $_GET["pass"];
	echo "<div>Парола: <strong>$password</strong></div>";
	
	$gender = $_GET["gender"];
	echo "<div>Пол: <strong>$gender</strong></div>";
	
	if(isset($_GET["subscribe"])){
		$subscibe = $_GET["subscribe"];
		echo "<div>Бюлетин: <strong>$subscibe</strong></div>";
	}
	
	echo "<pre>";
	var_dump($_GET);
?>

</body>
</html>