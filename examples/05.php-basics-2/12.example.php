<?php
	echo "<table>";
	
	$number = 1;
	for($i = 0; $i < 5; $i++ ){
		echo "<tr>";
		for($j = 0; $j < 4; $j++ ){
			echo "<td>$number</td>";
			$number++;
		}
		echo "</tr>";
	}
	echo "</table>";

?>