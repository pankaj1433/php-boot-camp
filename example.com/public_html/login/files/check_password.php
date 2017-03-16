<?php
session_start();
$id=$_SESSION["userid"];
$chkpass=$_POST["user_pass"];
$flag=0;

$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");

	$query = $db->prepare("SELECT * FROM login WHERE id=:i");

	$query->bindParam(":i", $id);
	$query->execute();	

	$user=$query->fetch(PDO::FETCH_ASSOC);

	if($user['password']!=$chkpass)
		$flag=1;
echo $flag;
?>