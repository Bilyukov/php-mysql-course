﻿<?php
	require_once(dirname(__FILE__).'/DB_Config.php');
	
	class DB {

		private static $instance;
		private $connection;

		private function __construct() {
			$this->initConnection();
		}
		
		public static function getInstance(){
			if (self::$instance == null){
				self::$instance = new DB();
			}

			return self::$instance;
		}
		
		private function initConnection(){
			
			global $db_config;
		
			$this->connection = new mysqli(
										 $db_config["SERVER"],
										 $db_config["USERNAME"],
										 $db_config["PASSWORD"],
										 $db_config["DABASE"]
									 );
			
			if ($this->connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
									 
			$this->connection->set_charset('utf8');
		}
		
		public function query($sql){
			$result = $connection->query($sql);
			return $result;
		}
		
		public function getQueryResults($sql){
		
			$result = $this->connection->query($sql);
			
			$data = array();
			
			while($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			
			return $data;
		}

		public function __destruct(){
			$this->connection->close();
		}
	}
?>