<?php

class foo {

    /*private $bar=10;
    public function __get($name) {

        echo "Get:";
        return $this->$name;
    }

    public function __set($name, $value) {

        echo "Set:$name to $value";
        $this->$name = $value;
    }*/
}


$obj = new foo();

/*Get:bar
Set:bar to test
Get:bar[test]*/

/*echo $obj->bar;
echo "<br>";*/
$obj->bar = 'test';
echo "<br>";
echo $obj->bar;
echo "bar:".$bar;
//echo "[$obj->bar]";

?>