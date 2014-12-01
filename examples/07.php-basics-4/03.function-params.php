
<?php
	
	
	$userInfo = array(
        'Име' => 'Георги Билюков',
        'Потребителско Име' => 'gbilyukov',
        'Email' => 'georgi.bilyukov@gmail.com',
        'ID' => '123'
    );
	
	echo "<table border=\"1\">";
	
	
	foreach ($userInfo as $key => $value) {
		printRow($key, $value);
    }
	
	echo "</table>";
	
	
	function printRow($key, $value) {
		echo "<tr>";
		echo "<td>" . $key . "</td>";
		echo "<td>" . $value . "</td>";
		echo "</tr>";
	}
	

?>