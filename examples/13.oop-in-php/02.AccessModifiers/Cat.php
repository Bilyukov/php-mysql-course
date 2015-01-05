<?php 

class Cat {

   private $name;
   private $breed;

	public function __construct($name, $breed)
	{
		$this->name = $name;
		$this->breed = $breed;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		if(mb_strlen($name, 'UTF-8') > 3){
			$this->name = $name;
		}
	}
	
	public function getBreed(){
		return $this->breed;
	}
	
	public function setBreed($breed){
		$this->breed = $breed;
	}
	
	public function sayMiau($identify){
		echo "<div style='border:3px solid green; padding:8px; margin:10px;'>";
		
		echo "<strong>Miauuuuuu Myrrrrr!</strong>";
		
		if($identify){
			$this->sayName();
			$this->sayBreed();			
		}
		
		echo "</div>";
	}
	
	private function sayName(){
		echo "<br />My pretty name: " . $this->name . "<br />";
	} 
	
	private function sayBreed(){
		echo "<br />The best breed in the world is mine :: " . $this->breed . "<br />";
	}
}

?>