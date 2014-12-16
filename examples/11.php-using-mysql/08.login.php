<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<style>
	form{
		font-size: 22px;
		border: 1px solid blue;
		padding: 10px;
		margin:10px;
	}
	form > div {
		margin-bottom: 12px;
	}
</style>

<body>
<?php

	function isValid($username, $password){
		if(mb_strlen($username, "UTF-8") > 3 && mb_strlen($password, "UTF-8") > 3){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		
		$isValid = isValid($username, $pass);
		
		if($isValid){
		
			$servername = "localhost";
			$sqlUsername = "sqluser";
			$password = "123456";
			$dbname = "activeusers";
			
			$connection = new mysqli($servername, $sqlUsername, $password, $dbname);
			
			if ($connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
			
			$connection->set_charset("utf8");
			
			$passwordHash = md5($pass);
			
			$sql = "SELECT COUNT(*) AS UsersCount FROM users ".
				   "WHERE Username='$username' AND Password='$passwordHash'";
				   
			$queryReselt = $connection->query($sql);
			
			$row = $queryReselt->fetch_assoc();
			
			if($row["UsersCount"] == 1){
				echo "<strong>Вие Успешно влязохте в системата</strong>";
			} else {
				echo "<strong>Грешно потребителско име или парола</strong>";
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак</strong></div>";
		}
		
	} else {
?>

<form action="08.login.php" method="POST" >
	<div>
		<span>Потребителско Име:</span>
		<input type="text" name="username" />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="pass" />
	</div>
	<div>
		<input type="hidden" name="check" value="1" />
		<input type="submit" value="Регистрирай" />
	</div>
</form>	

<?php
	}
?>


</body>
</html>