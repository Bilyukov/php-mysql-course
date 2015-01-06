<?php 
	require_once(dirname(__FILE__).'/TimeSpan.php');
	
	define('DAYS_PER_LEAP_YEAR', 366); 
	
	echo "One Leap Year has <strong>" . DAYS_PER_LEAP_YEAR . "</strong> years!";
	
	$days = 5;
	
	$timeSpan = new TimeSpan($days);
	
	$hours = $timeSpan->calculateHours();
	$minutes = $timeSpan->calculateMinutes();
	
	echo "<br /><br />";
	
	echo "<strong>$days</strong> days have <strong>$hours</strong> hours and <strong>$minutes</strong>!";
	
	
	

?>