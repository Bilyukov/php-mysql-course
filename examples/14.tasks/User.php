

<?php

	require_once(dirname(__FILE__).'/DB.php');
	
	class User{
	
	
		public function __construct(){
		
		}
		
		public function showRegisterForm(){
		
?>
	<style>
		form > label, input[type="Submit"] {
			display:block;
		}
	</style>
	<form action="register.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" name="username" />
		<label for="password">Password:</label>
		<input type="password" name="pass" />
		<label for="repass">Repeat Password:</label>
		<input type="password" name="repass" />
		<label for="mail">E-Mail:</label>
		<input type="text" name="mail" />
		<input type="Submit" name="submit" />
	</form>

<?php
		
		}
		
		public function register($username, $pass, $repass, $mail){
			
			if($this->isValid($username, $pass, $repass, $mail)){
		
		
				$passhash = md5($pass);
				$db = DB::getInstance();
				
				$query = "INSERT INTO Users (Username, Password, Email) ".
						 "VALUES ('$username', '$passhash', '$mail')";
				
				$result = $db->query($query);
				
				return $result;
			
			}
			
			return false;
		}
		
		private function isValid($username, $pass, $repass, $mail){
			//HOMEWORK add more validation
			if($pass === $repass){
				return true;
			}
			return false;
		}
		
	}
?>
