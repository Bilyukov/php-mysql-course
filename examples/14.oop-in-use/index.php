<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP OOP</title>
</head>

<body>
<table border="1">
	<thead>
		<tr>
			<th>Код</th>
			<th>Име</th>
			<th>Континент</th>
			<th>Площ</th>
		</tr>
	</thead>

<?php
	require_once(dirname(__FILE__).'/DB.php');
	
	$db = DB::getInstance();
	
	$query = 'SELECT Code, Name, Continent, SurfaceArea ' .
			 'FROM country ' .
			 'WHERE Continent = "South America"';
	
	$results = $db->getQueryResults($query);
	
	foreach ($results as $res){
		echo "<tr>";
		echo "<td>" . $res['Code'] . "</td>";
		echo "<td>" . $res['Name'] . "</td>";
		echo "<td>" . $res['Continent'] . "</td>";
		echo "<td>" . $res['SurfaceArea'] . "</td>";
		echo "</tr>";
	}
?>

</table>

</body>
</html>