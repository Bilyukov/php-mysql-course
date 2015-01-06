<?php 

require_once(dirname(__FILE__).'/Pet.php');

class Cat extends Pet {
	
	protected $breed;
	
	public function __construct($name, $years, $breed)
	{
		parent::__construct($name, $years);
		$this->breed = $breed;
	}
	
	public function sayBreed()
	{
		echo "My breed is $this->breed!";
	}
}
?>