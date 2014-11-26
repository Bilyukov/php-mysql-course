<?php
	
	$arr = array(15, 13, 5, 6, 8, -11);
	
	echo "Преди сортировка:<br />";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	$n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) {
        for ($j = $n - 1; $j >= $i; $j--) {
		
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
	
	echo "<hr />";
	echo "След сортировка:<br />";
	
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	
?>