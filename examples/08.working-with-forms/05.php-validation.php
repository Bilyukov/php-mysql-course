<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<style>
	form{
		font-size: 19px;
		border: 2px solid red;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
	}
</style>

<body>

<?php
	
		$username = $_POST["name"];
		
		$favourite_number = $_POST["favourite-number"];
		
		if($favourite_number * 3 % 2 === 0){
			echo "Вашето любимо числло <strong>$favourite_number</strong> е четно";
		} else {
			echo "Вашето любимо числло <strong>$favourite_number</strong>  е нечетно";
		}
		exit(0);
	
	// if(isset($_POST["submit"])){
		// $username = $_POST["name"];
		
		// $favourite_number = $_POST["favourite-number"];
		
		// if($favourite_number * 3 % 2 === 0){
			// echo "Вашето любимо числло <strong>$favourite_number</strong> е четно";
		// } else {
			// echo "Вашето любимо числло <strong>$favourite_number</strong>  е нечетно";
		// }
		// exit(0);
	// }
	
	
	
	
?>
<form method="POST">
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Лубимото ви число:</span>
		<input type="text" name="favourite-number" />
	</div>
	<div>
		<input type="reset" value="Изчисти">
		<input type="submit" name="submit" value="Влез" />
	</div>
</form>	

</body>
</html>