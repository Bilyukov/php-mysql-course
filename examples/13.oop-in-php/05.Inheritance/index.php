<?php 
	require_once(dirname(__FILE__).'/Pet.php');
	require_once(dirname(__FILE__).'/Cat.php');
	
	$myCat = new Cat("Josefine", 2, "Persian");
	
	$myCat->greet();
	$myCat->sayBreed();
	
	
	

?>