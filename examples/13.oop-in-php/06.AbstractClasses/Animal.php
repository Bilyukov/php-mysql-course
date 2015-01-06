<?php 

require_once(dirname(__FILE__).'/Creature.php');

class Animal {
	
	protected $height;
	
	public function __construct($age, $height)
	{
		$this->age = $age;
		$this->height = $height;
	}
	
	public function greet()
	{
		echo "<div style='border:3px dotted blue; padding: 3px; margin:10px;'>";
		echo "Hello, I Am an Animal<br />";
		echo "I Am $this->age years old.<br />";
		echo "My height is $this->height !";
		echo "</div>";
	}
}
?>