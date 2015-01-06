<?php 

abstract class Creature {
	
	protected $age;
	
	public function getAge(){
		return $this->age;
	}
	
	public function setAge($age){
		$this->age = $age;
	}
	
	abstract public function greet();
}
?>