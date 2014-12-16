<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
</head>

<body>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Детска Градина</th>
			<th>Промени</th>
			<th>Изтрий</th>
		</tr>
	</thead>

<?php
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
		   "FROM kindergarder.kindergarder;";
		   
	$result = $connection->query($sql);
	
	
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			$id = $row["KinderGarderID"];
			$name = $row["Name"];
			$phone = $row["Phone"];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$name</td>";
			echo "<td>$phone</td>";
			echo "<td><a href=\"04.php-update.php?id=$id\">Промени</a></td>";
			echo "<td><a href=\"05.php-delete.php?id=$id\">Изтрий</a></td>";
			echo "</tr>";
		}
	} else {
		echo "Няма Резултати";
	}
	
	 $connection->close();
?>

</table>

</body>
</html>