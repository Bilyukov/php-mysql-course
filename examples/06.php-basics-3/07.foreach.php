<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Foreach</title>
</head>
<body>
<table border="1">
<?php
    $array = array(
        'Име' => 'Георги Билюков',
        'Потребителско Име' => 'gbilyukov',
        'Точки' => '10'
    );

    
    foreach ($array as $key => $value) {
		echo "<tr>";
		
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
		
		echo "</tr>";
    }
	
	echo "<hr />";
    
?>
</table>
<hr />

<table border="1">
	 <tr>
		<th>Цвят</th>
		<th>Отбор</th>
		<th>Играчи</th>
	</tr>
<?php
    $array = array(
        'color' => 'white',
        'team' => 'Real Madrid',
        'players' => '11'
    );

    echo "<tr>";
	
    foreach ($array as $value) {
        echo "<td>" . $value . "</td>";
    }
	
	echo "</tr>";
    
?>

</table>


</body>
</html>

