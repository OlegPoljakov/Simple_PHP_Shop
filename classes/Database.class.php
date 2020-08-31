<?php
//https://www.php.net/manual/ru/pdo.connections.php - подключение к MySQL

class Database{
	

	static $connect = null;

	private $host = DB_HOST;
	private $db   = DB_NAME;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $charset = 'utf8';

	private $dbh;
	private $error;
	private $stmt;

	private function __construct(){
    //$dsn = "mysql:host=localhost; dbname=joblister;charset=utf8";
    $dsn='mysql:host='. $this->host . ';dbname=' . $this->db . ';charset=' . $this->charset;
    
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $this->dbh = new PDO($dsn, $this->user, $this->pass, $opt);
	}

public function getConnect(){
	if (self::$connect===null){
		self::$connect=new self;
	}
	return self::$connect;
}

	
	public function getDb(){
       if ($this->dbh instanceof PDO) {
            return $this->dbh;
       }
    }  

    public function resultSet(){
		$this->execute();
		/*TEST TEST TEST output
		while ($row = $this->stmt->fetch())
			{
    			echo $row['name'] . "\n";
			}
		echo 'we are here';
		*/
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);  ; //PDOStatement::fetchAll — Возвращает массив, содержащий все строки результирующего набора
	}

	public function resultSetMaxId(){
		$this->execute();
		return $this->stmt->fetchColumn(); //PDOStatement::fetchAll — Возвращает массив, содержащий все строки результирующего набора
	}

	public function execute(){
		return $this->stmt->execute(); //Execute — Запускает подготовленный запрос на выполнение
		//var_dump($stmt->errorInfo());
	}

	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}
}