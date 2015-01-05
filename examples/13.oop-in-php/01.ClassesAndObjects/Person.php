<?php 

class Person {

   var $name;
   var $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	function greet()
	{
		echo "<div style='border:4px dotted red;padding:8px;'>";
		echo "<strong>Здравей! Казвам се " . $this->name . "!</strong><br />";
		echo "<strong>Аз съм на " . $this->age . " години.</strong>";
		echo "</div>";
		
		echo "<br/> <br/>";
	}
}

?>