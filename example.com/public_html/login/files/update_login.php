<?php

session_start();
error_reporting(1);
ini_set('display_errors', 1);

function validate_data($password){
	if(!preg_match("/^.{8,100}$/",$password))
		return false;

	return true;
}

try
{	
	$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
	$pass=$_POST['newpassword'];
	$id=$_SESSION["userid"];
	$_SESSION["pass"]=$_POST['newpassword'];

	if(validate_data($pass)){
		$query = $db->prepare("UPDATE login SET password=:p WHERE id=:i");

		$query->bindParam(":i", $id);
		$query->bindParam(":p", $pass);
		$query->execute();	
		
		header("Location: login_register.php?M=update successful");
	}
	else
	{
		echo "invalid";
		header("Location: login_register.php?M=<p>password Should contain at least 8 Characters </p>");
	}
}
catch(Exception $ex){
	die('Error :'.$ex->getMessage());
}	

?>