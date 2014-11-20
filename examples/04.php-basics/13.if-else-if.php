<style>
	body {
		font-size:26px;
	}
</style>

<?php
	
	$a = 155;
	
	if ($a < 0) {
		echo "a е по-малко от 0";
	} else if ($a >= 0 && $a < 100) {
		echo "a е между 0 и 100";
	} else if ($a >= 100 && $a < 200) {
		echo "a е между 100 и 200";
	} else {
		echo "a е по-голямо от 200";
	}
 ?>