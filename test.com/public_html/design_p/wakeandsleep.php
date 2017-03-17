<?php 

class WebDeveloper {
  private $info = array();
 /* public function connect() {
    $con = mysql_connect('localhost','root','abcde');
    if(!$con){ 
      die('Could not connect: ' . mysql_error());
    }
  }*/
  public function __set($item, $value) {
    $this->info[$item] = $value;
  }
  public  function __get($a){
      echo $a;
  }
  public function __sleep() {
    return array('info');
  }
  public function __wakeup() {
    $this->connect();
  }
}

$developer = new WebDeveloper();
$developer->info = 'Jordizle';
  
  print_r($developer->info);

//$data = serialize($developer);
//print(unserialize($data));

?>