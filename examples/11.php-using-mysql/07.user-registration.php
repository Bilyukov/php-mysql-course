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

	function isValid($username, $password, $repass){
		if(mb_strlen($username, "UTF-8") > 3 && mb_strlen($password, "UTF-8") > 3 && $password == $repass){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		$repass = $_POST["repass"];
		
		$isValid = isValid($username, $pass, $repass);
		
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
			
			$sql = "INSERT INTO users (Username, Password)".
				   "VALUES ('$username', '$passwordHash')";
				   
			$queryReselt = $connection->query($sql);
			
			if ($queryReselt === TRUE) {
				$insertedId = $connection->insert_id;
				echo "Успешно регистриран user с id = " .  $insertedId;
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак</strong></div>";
		}
		
	} else {
?>

<form action="07.user-registration.php" method="POST" >
	<div>
		<span>Потребителско Име:</span>
		<input type="text" name="username" />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="pass" />
	</div>
	<div>
		<span>Повторете Парола:</span>
		<input type="password" name="repass" />
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