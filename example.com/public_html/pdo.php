<?php
$file = fopen("data.csv","r");

$users = [];
$count=0;
$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
while(!feof($file))
   {
   	$data=fgetcsv($file);
  	if($data[0]!='')
  		$users[] = array('id'=>$data[0],'name'=>$data[1],'salary'=>$data[2],'mobile'=>$data[3],'email'=>$data[4]);
  	}

  	fclose($file);

  	$query = $db->prepare("INSERT INTO mydata (id, name, salary,phone,email) VALUES (:i, :n, :s, :m, :e)");

  	foreach ($users as $u) {
	$count++;
    $i = $u["id"];
    $n = $u["name"];
    $s = $u["salary"];
    $m = $u["mobile"];
    $e = $u["email"];

    $query->bindParam(":i", $i);
	$query->bindParam(":n", $n);
	$query->bindParam(":s", $s);
	$query->bindParam(":m", $m);
	$query->bindParam(":e", $e);

    $query->execute();
	}

	echo "$count rows inserted";


?>