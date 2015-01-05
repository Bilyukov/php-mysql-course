<?php 

class Car {

	public static $carsCount = 0;

    private $brand;
    private $model;

	public function __construct($brand, $model)
	{
		$this->brand = $brand;
		$this->model = $model;
		
		self::$carsCount++;
		
		echo "<div>Създаден автомобил <strong>" . $brand ." - " . $model . "</strong></div>";
	}
	
	public function getBrand(){
		return $this->brand;
	}
	
	public function setBrand($brand){
		if(mb_strlen($brand, 'UTF-8') > 3){
			$this->brand = $brand;
		}
	}
	
	public function getModel(){
		return $this->model;
	}
	
	public function setModel($brand){
		if(mb_strlen($model, 'UTF-8') > 3){
			$this->model = $model;
		}
	}

	public static function getCarsCount(){
		return self::$carsCount;
	}
}

?>