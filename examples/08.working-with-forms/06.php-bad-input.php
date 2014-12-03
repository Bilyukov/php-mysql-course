<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<style>
	form{
		font-size: 19px;
		border: 2px dotted blue;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
	}
</style>

<body>

<?php
	
	if(isset($_GET["submit"])){
	
		$username = $_GET["name"];	
		$pass = $_GET["password"];
		
		echo $username . " Вие влезнахте успешно в системата!";
		exit(0);
	}
	
	
	// if(isset($_GET["submit"])){
	
		// $username = htmlspecialchars($_GET["name"]);	
		// $pass = htmlspecialchars($_GET["password"]);
		
		// echo $username . " Вие влезнахте успешно в системата!";
		// exit(0);
	// }
	
	
	
	
?>
<form method="GET">
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="password" />
	</div>
	<div>
		<input type="reset" value="Изчисти">
		<input type="submit" name="submit" value="Влез" />
	</div>
</form>	

</body>
</html>