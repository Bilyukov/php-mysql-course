<?php 
	require_once(dirname(__FILE__).'/Car.php');
	
	$audi = new Car("Audi", "A7");
	
	echo "<div style='font-size:19px;'><strong>Брой Коли: " . Car::$carsCount . "</strong></div>";
	
	$BMW = new Car("BMW", "X6");
	
	echo "<div style='font-size:19px;'><strong>Брой Коли: " . Car::$carsCount . "</strong></div>";
	
	$vw = new Car("Volkswagen", "Touareg");

	echo "<div style='font-size:19px;'><strong>Брой Коли: " . Car::getCarsCount() . "</strong></div>";
	

?>