<?php

	$id = $_POST['id'];
	$name=$_POST['name'];
	$salary=$_POST['salary'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
    $db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");

    $query = $db->prepare("UPDATE mydata SET name='$name',salary='$salary',phone='$phone',email='$email' WHERE id='$id'");
    $query->execute();

    echo "data updated for id:".$id;
?>