<?php 
	require_once(dirname(__FILE__).'/Creature.php');
	require_once(dirname(__FILE__).'/Human.php');
	require_once(dirname(__FILE__).'/Animal.php');
	
	$human = new Human("John", 22);
	
	$human->greet();
	
	$dog = new Animal(2, 2.4);
	
	$dog->greet();
	
	
	

?>