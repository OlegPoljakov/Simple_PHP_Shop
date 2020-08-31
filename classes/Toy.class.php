<?php

class Toy{
	private $db;
	private $dbh;
	public $count;
	//private $stmt;

	public function __construct(){
		$this->db = Database::getConnect(); //instantiating the Database only returns an instance of your Database class
		$this->dbh = $this->db->getDb(); //here we get a connection
	}

	//get all toys
	public function getALLToys(){
		$this->db->query("SELECT * FROM iteminfo");

		//jobs.* - everything from the jobs table.
		/*Выбираем из таблицы jobs все то, что есть в таблице categories*/
		
		$result = $this->db->resultSet();
		$count=count($result);
		return $result;
	}	

	public function getExactToyInfo($toyid){
		$this->db->query("SELECT * FROM iteminfo WHERE iteminfo.toyid=$toyid");
		return $result = $this->db->resultSet();
		//echo gettype($result);
			//$tmp= (object) $result;
		//echo gettype($tmp);
			//return $tmp;
	}
}

