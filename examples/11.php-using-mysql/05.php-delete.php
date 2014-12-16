<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
</head>

<body>
<?php
	
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
		
		$sql = "DELETE FROM kindergarder.kindergarder ".
			   "WHERE KinderGarderID=$id;";
			   
		$queryReselt = $connection->query($sql);
		
		if ($queryReselt === TRUE) {
			echo "Успешно изтрит резултат с id = " .  $id;
		} else {
			echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
		}
		
		$connection->close();
	}
?>
</body>
</html>