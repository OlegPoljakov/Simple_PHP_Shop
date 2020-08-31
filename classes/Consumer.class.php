<?php

class Consumer{
	private $db;
	private $dbh;
	//private $stmt;

	public function __construct(){
		$this->db = Database::getConnect(); //instantiating the Database only returns an instance of your Database class
		$this->dbh = $this->db->getDb(); //here we get a connection
	}

	
	//get all info about exact toy
	public function getALLInfoByToyId($toyid){
		$this->db->query("SELECT * FROM consumerresponse WHERE consumerresponse.toyid=$toyid");
		$result = $this->db->resultSet();
		//$result=(object)$result;
		//echo gettype($result);
		return $result;
	}	


	public function getAverageMark($toyid){
		$this->db->query("SELECT numofstars FROM consumerresponse WHERE toyid=$toyid");
		$array = $this->db->resultSet();
	
		$sum = 0;
   
    	foreach ($array as $key => $value) {
			$sum += $value -> numofstars;
			
			//echo $value['numofstars'].'<br/>';
		}
		return $average = floor ($sum / count($array));
	}

	public function add($id, $data){
		echo "we are here!";

		$sth = $this->dbh->prepare("INSERT INTO consumerresponse SET 
			toyid=:toyid,
			review=:review,
			consumername=:consumername,
			numofstars=:numofstars"
			);

		$sth->bindValue(':toyid', $id, PDO::PARAM_INT);
		$sth->bindValue(':review', $data['review'], PDO::PARAM_STR);
		$sth->bindValue(':consumername', $data['consumername'], PDO::PARAM_STR);
		$sth->bindValue(':numofstars', $data['numofstars'], PDO::PARAM_INT);
		
		if($sth->execute()){
			return true;
			//echo 'ok';
		}	else {
			return false;
			//echo 'nope(';
		}
	}

}

