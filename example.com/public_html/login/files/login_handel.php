<?php
session_start();
error_reporting(1);
ini_set('display_errors', 1);




try
{	
	$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
	$name=$_POST['name'];
	$pass=$_POST['password'];

	$query = $db->prepare("SELECT * FROM login WHERE name=:n && password=:p");

	$query->bindParam(":n", $name);
	$query->bindParam(":p", $pass);
	$query->execute();	

	$user=$query->fetch(PDO::FETCH_ASSOC);

		if($user === false){
			//die('incorrect username/password');
			header("Location: login.php?valid=invalid/user name password");
		}
		else{

		$_SESSION["user"] =$_POST["name"];
		$_SESSION["userid"] =$user['id'];
		header("Location: login_register.php");
		}
}
catch(Exception $ex){
	die('Error :'.$ex->getMessage());
}	
?>