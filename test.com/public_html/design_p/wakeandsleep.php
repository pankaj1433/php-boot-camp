<?php 

class WebDeveloper {
  private $info = array();
  //public $info = array();
 /* public function connect() {
    $con = mysql_connect('localhost','root','abcde');
    if(!$con){ 
      die('Could not connect: ' . mysql_error());
    }
  }*/
  public function __set($item, $value) {
    //$temp="$item"."[]";
    $this->info[$item]= $value;
    //echo "<br>$item<br>";
    //echo $this->item;
//    print_r($this->item);
  }
  public  function __get($a){
      return $this->info;
  }
/*  public function __sleep() {
    return array('info');
  }
  public function __wakeup() {
    $this->connect();
  }*/
}

$developer = new WebDeveloper();
$developer->one = 'hello';
$developer->two = 'bye';
print_r($developer->info);
  
  //print_r($developer->info);

//$data = serialize($developer);
//print(unserialize($data));

?>