<?php
error_reporting(1);
ini_set('display_errors', 1);
//phpinfo(); exit;
class DB
{
	
	public $db_name;
	public $db_user;
	public $db_pass;
	public $db_host;
	public $conn;
/*
static $instance;

	function get() {
	    if (self::$instance === null) {
	        self::$instance = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
	    }
	    return self::$instance;
	}*/


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
	function __call($method, $args)
	{echo "$method function is not defined in this class<br>";}
	function connect()
	{
		if(!$this->conn){
				try{
					////////////////////"mysql:host=localhost;dbname=sample","root","abcde"
					//$this->conn=new PDO("mysql:host=localhost;dbname=sample","root","abcde");
					$this->conn=new PDO("mysql:host={$this->db_host};dbname={$this->db_name}","$this->db_user","$this->db_pass");
					//$con_str='"mysql:host='.$this->db_host.';dbname='.$this->db_name.'","'.$this->db_user.'","'.$this->db_pass.'"';
					//print_r($this->conn);exit;
			}
			catch(Exception $ex){
				die('Error :'.$ex->getMessage());
			}		
		}
	}
	function query($q){
		if($this->conn){
			 $result=$this->conn->query($q);
			 return $result;
		}
		else{
			echo "no connection";
			exit;
		}
	}


	function disconnect(){
		if ($this->conn) {
			@pg_close($this->conn);
		}
	}
}
$obj=new DB('sample');
$obj->newquery();/*
$temp=$obj->executeQuery('select * from mydata');
while($row=$temp->fetch(PDO::FETCH_ASSOC))
{

	print_r($row);
}*/
?>
