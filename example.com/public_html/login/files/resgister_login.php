<?php

error_reporting(1);
ini_set('display_errors', 1);

function validate_data($name,$password){
	if(!preg_match("/^[a-z0-9]{3,15}$/",$name))
		return false;

	if(!preg_match("/^.{8,100}$/",$password))
		return false;

	return true;
}

try
{	$name=$_POST['name'];
	$pass=$_POST['password'];
	$chk=validate_data($name,$pass);
	if($chk){
		$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
		$query = $db->prepare("INSERT INTO login (name,password) VALUES (:n,:p)");
		$query->bindParam(":n", $name);
		$query->bindParam(":p", $pass);
		$query->execute();
		//echo "inserted";
		header("Location: login.php");
	}
	else{
		header("Location: login_register.php?M=incorrect format");
	}
}
catch(Exception $ex){
	die('Error :'.$ex->getMessage());
}	
?>