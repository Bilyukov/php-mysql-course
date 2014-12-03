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
<form action="02.print-form-values.php">
	<div>
		<span>Име:</span>
		<input type="text" name="name" />
	</div>
	<div>
		<span>Email:</span>
		<input type="text" name="mail" />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="pass" />
	</div>
	<div>
		<span>Пол:</span>
		<input type="radio" name="gender" value="Male" /> Мъж
		<input type="radio" name="gender" value="Famale" /> Жена
		<input type="radio" name="gender" value="blank" checked /> Не искам да кажа 
	</div>
	<div>
		<span>Изпрати ми бюлетин:</span>
		<input type="checkbox" name="subscribe" />
	</div>
	<div>
		<input type="reset" value="Изчисти">
		<input type="submit" value="Изпрати" />
	</div>
</form>	

</body>
</html>