<?php

	require_once(dirname(__FILE__).'/User.php');
	
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$repass = $_POST["repass"];
	$mail = $_POST["mail"];
	
	
	$user = new User();
	
	$result = $user->register($username, $pass, $repass, $mail);
	
	if($result){
		echo "<strong>Успешна Регистрация!</strong>";
	} else {
		echo "<strong>Неуспешна Регистрация!</strong>";
	}
?>
