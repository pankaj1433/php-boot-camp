<?php

/* Factory:
In this pattern, a class simply creates the object you want to use.*/

class ClassOne 
{
	private $a;
	private $b;
	
	function __construct($one,$two)
	{
		$this->a=$one;
		$this->b=$two;
	}
	function getvariable()
	{
		echo "a={$this->a} and b={$this->b}";
	}
}
class ClassTwo
{

	function createClassOne($a,$b)
	{
		return new ClassOne($a,$b);
	}
	
}


$object_of_two=ClassTwo::createClassOne(10,20);
$object_of_two->getvariable();

?>