<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
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

	function isValid($kindergarden, $phone){
		if(mb_strlen($kindergarden, "UTF-8") > 3 && mb_strlen($phone, "UTF-8") > 3){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$kindergarden = $_POST["kindergarden"];
		$phone = $_POST["phone"];
		
		$isValid = isValid($kindergarden, $phone);

		if($isValid){
		
			$servername = "localhost";
			$username = "sqluser";
			$password = "123456";
			$dbname = "kindergarder";
			
			$connection = new mysqli($servername, $username, $password, $dbname);
			
			if ($connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
			
			$connection->set_charset("utf8");
			
			$sql = "INSERT INTO kindergarder (Name, Phone)".
				   "VALUES ('$kindergarden', '$phone')";
				   
			$queryReselt = $connection->query($sql);
			
			if ($queryReselt === TRUE) {
				$insertedId = $connection->insert_id;
				echo "Успешно въведен резултат с id = " .  $insertedId;
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак!</strong></div>";
		}
		
	} else {
?>

<form action="01.php-insert-data.php" method="POST" >
	<div>
		<span>Детска Градина:</span>
		<input type="text" name="kindergarden" />
	</div>
	<div>
		<span>Телефонен Номер:</span>
		<input type="text" name="phone" />
	</div>
	<div>
		<input type="hidden" name="check" value="1" />
		<input type="submit" value="Въведи" />
	</div>
</form>	

<?php
	}
?>


</body>
</html>