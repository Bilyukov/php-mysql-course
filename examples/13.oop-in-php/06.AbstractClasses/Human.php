<?php 

require_once(dirname(__FILE__).'/Creature.php');

class Human extends Creature {
	
	protected $name;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function greet()
	{
		echo "<div style='border:3px dotted red; padding: 3px; margin:10px;'>";
		echo "Hello, I Am $this->name <br />";
		echo "I Am $this->age years old.<br />";
		echo "</div>";
	}
}
?>