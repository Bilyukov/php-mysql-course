<?php 
class TimeSpan {
	
	const HOURS_PER_DAY = 24;
	const MINUTES_PER_HOUR = 60;
	
	private $days;
	
	public function __construct($days)
	{
		$this->days = $days;
	}
	
	public function getDays()
	{
		return $this->days;
	}
	
	public function setDays($days)
	{
		$this->days = $days;
	}
	
	public function calculateHours()
	{
		$hours = $this->days * self::HOURS_PER_DAY;
		return $hours;
	}
	
	public function calculateMinutes()
	{
		$minutes = $this->days * self::MINUTES_PER_HOUR;
		return $minutes;
	}
}
?>