<?php
	
    include('db.class.php');
    $obj=new DB('sample');
    $query = "SELECT * FROM mydata" ;
    $result = $obj->query($query);
    
    
    while($row = $result->fetch(PDO::FETCH_ASSOC))  
          $data_for_json[]=$row;
    
    echo json_encode($data_for_json);
?>