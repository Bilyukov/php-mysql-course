<?php 

class Magic {
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
		echo "<strong>__construct:</strong> Създаване на обект от тип Magic с име $this->name <br />";
	}
	
	public function __destruct()
	{
		echo "<strong>__destruct:</strong> Разрушаване на обект от тип Magic с име $this->name <br />";
	}
	
	public function __toString()
	{
		$result = "<strong>__toString:</strong> Магия с име: <strong>$this->name</strong> <br />";
		return $result;
	}
}

?>