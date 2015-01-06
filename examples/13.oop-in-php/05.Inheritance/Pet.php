<?php 
class Pet {
	
	protected $name;
	protected $years;
	
	public function __construct($name, $years)
	{
		$this->name = $name;
		$this->years = $years;
	}
	
	public function greet()
	{
		echo "Hello, I Am $this->name <br />";
		echo "I Am $this->years old.<br />";
	}
}
?>