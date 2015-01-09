<?php
	require_once(dirname(__FILE__).'/DB.php');
	require_once(dirname(__FILE__).'/User.php');
	
	$user = new User();
	
	$user->showRegisterForm();
	
	
	

?>