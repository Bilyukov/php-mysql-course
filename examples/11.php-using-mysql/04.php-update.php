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
	
		$id = $_POST["id"];
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
			
			$sql = "UPDATE kindergarder ".
				   "SET Name='$kindergarden', Phone='$phone' ".
				   "WHERE KinderGarderID=$id";
				   
			$queryReselt = $connection->query($sql);
			
			if ($queryReselt === TRUE) {
				echo "Успешно Редактиран резултат!";
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			 $connection->close();
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак!</strong></div>";
		}
		
	} else {
	
		if(isset($_GET["id"])){
		$id = $_GET["id"];
			
		$servername = "localhost";
		$username = "sqluser";
		$password = "123456";
		$dbname = "kindergarder";
		
		$connection = new mysqli($servername, $username, $password, $dbname);
			
		if ($connection->connect_error) {
			die("Невъзможно свързване със сървър: " . $connection->connect_error);
		} 
		
		$connection->set_charset("utf8");
		
		$sql = "SELECT KinderGarderID, `Name`, Phone ". 
			   "FROM kindergarder.kindergarder
			    WHERE KinderGarderID=$id;";
			   
		$result = $connection->query($sql);
		
		$row = $result->fetch_assoc();
		$name = $row["Name"];
		$phone = $row["Phone"];
		
		$connection->close();
	}
?>

<form action="04.php-update.php" method="POST" >
	<div>
		<input type="hidden" name="id" value="<?php echo $id ?>" />
		<span>Детска Градина:</span>
		<input type="text" name="kindergarden" value="<?php echo $name ?>" />
	</div>
	<div>
		<span>Телефонен Номер:</span>
		<input type="text" name="phone" value="<?php echo $phone ?>" />
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