<?php

    
    $db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
    $query = "SELECT * FROM mydata" ;
    $result = $db->query($query);
    
    while($row = $result->fetch(PDO::FETCH_ASSOC))
          $data_for_json[]=$row;
    
    echo json_encode($data_for_json);
?>