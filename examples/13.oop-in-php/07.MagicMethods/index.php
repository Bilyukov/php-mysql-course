<?php 
	require_once(dirname(__FILE__).'/Magic.php');
	
	echo "Извикване на функция doMagic<br />";
	
	echo "<br /><br /><br />";
	
	doMagic();
	
	echo "<br /><br /><br />";
	
	echo "След извикване на функцията<br />";
	
	
	
	function doMagic()
	{
		$magic = new Magic("АбраКадабра");
	
		echo "Имам: $magic <br />";
	}

?>