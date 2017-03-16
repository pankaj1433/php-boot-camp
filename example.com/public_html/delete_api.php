<?php

	$id = $_POST['id'];
    $db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
    $query = $db->prepare("DELETE from mydata WHERE id='$id'");
    $query->execute();
?>