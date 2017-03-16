<?php
/*$hello="iamlast";
$w="hello";
$a="w";

echo "$$a";
echo '$$a';
echo $$a;
echo "'$a'";
echo '"$a"';
*/
/**
* 
*//*

$arr=["1A"=>"one","2a"=>"two"];
$arr1=[1,2,3];
$obj=(object)$arr;
$obj1=(object)$arr1;*/
//print_r($obj);
//print_r($arr);
//print_r($arr1);
/*echo "<br>";*/
//print_r($obj1);
/*foreach($obj as $key)
echo $key;


*//*
print_r($obj1);
echo $obj->{"1A"};
echo $obj1->{"0"};*/
/*echo $arr["1"];
echo "<br>";
echo key($obj);*/


/**
* 
*/
class hello
{
	public $p;

	function __construct($pass)
	{
		$this->p=$pass;			
		//echo $this->p." "."inside object"."<br>";
	}
}
//$p="abc";

$obj1=new hello("myobject1");
//$obj2=new hello("myobject2");
//print_r($obj1);
//print_r($GLOBALS);
echo $obj1->p;
//echo $p;
?>