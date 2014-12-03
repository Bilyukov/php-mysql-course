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
	
	if(isset($_POST["submit"])){
	
		$name = $_POST["name"];	
		$gender = $_POST["gender"];
		$contriesArrays = $_POST["countries"];
		
		var_dump($contriesArrays);
		
		$contries = implode(", ", $contriesArrays);
		
		echo "<div>Потребителско име:" . $name . "<div>";
		echo "<div>ПОЛ:" . $gender . "<div>";
		echo "<div>Желани страни:" . $contries . "<div>";
	}
?>
<form method="POST">
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Пол:</span>
		<select name="gender">
		  <option value="" selected="selected">Изберете</option>
		  <option value="M">Мъж</option>
		  <option value="F">Жена</option>
		</select>
	</div>
	<div>
		<span>Изберете страни които ще посетите:</span>
		<select name="countries[]" multiple="yes">
		    <option value="US">САЩ</option>
		    <option value="UK">Англия</option>
		    <option value="France">Франция</option>
		    <option value="Mexico">Мексико</option>
		    <option value="Russia">Русия</option>
		    <option value="Japan">Янопония</option>
		</select>
	</div>
	<div>
		<input type="reset" value="Изчисти">
		<input type="submit" name="submit" value="Влез" />
	</div>
</form>	

</body>
</html>