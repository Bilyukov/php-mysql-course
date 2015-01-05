<?php 
	require_once(dirname(__FILE__).'/Cat.php');
	
	$josefine = new Cat("Josefine", "Persian");
	
	$josefine->sayMiau(true);
	
	$harriet = new Cat("Harriet", "Siamese");
	
	$harriet->sayMiau(false);
	
	$harriet->setName("Harry");
	
	$harriet->sayMiau(true);
	

?>