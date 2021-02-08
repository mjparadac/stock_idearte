<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="swasp_stocklite";$this->pass="swasp_stocklite@2021";$this->host="localhost:3306";$this->ddbb="swasp_stocklite";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
