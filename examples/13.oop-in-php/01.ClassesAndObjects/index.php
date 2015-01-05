<?php 
	require_once(dirname(__FILE__).'/Person.php');
	
	$ivan = new Person("Иван", 25);
	
	$ivan->greet();
	
	$maria = new Person("Мария", 33);
	
	$maria->greet();

?>