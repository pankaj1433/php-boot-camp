<?php

class DB
{
	
	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $conn;


	function __construct($name)
	{
		$this->conn=false;
		$this->db_name=$name;
		$this->db_user='root';
		$this->db_pass='abcde';
		$this->db_host='localhost';
    	$this->connect();
	}


	function __destruct() {
		$this->disconnect();
	}

	
	function connect()
	{
		if(!$this->conn){
				try{
				$this->conn=new PDO("mysql:host=".$this->db_host.";dbanme=".$this->db_name.'',$this->db_user,$this->db_pass);
			}
			catch(Exception $ex){
				die('Error'.$ex->getMessage());
			}		
		}
		return $this->conn;
	}


	function disconnect(){
		if ($this->conn) {
			@pg_close($this->conn);
		}
	}
}

?>
