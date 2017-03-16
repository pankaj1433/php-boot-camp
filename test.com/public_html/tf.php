<?php

/**
* 
*/
class MyClass
{	
	public $param;
	
	function __construct($param)
	{
		$this->param=$param;
	}
}

$myClass=new MyClass();

if($myClass->param==null)
	echo "hello";


?>