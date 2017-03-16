<?php
$str="w3resource";	
echo $str;
$count=0;
for($i=0;$i<strlen($str);$i++)
	//echo $str[$i];
	if($str[$i]=="r"){
		$count++;
	}

$result="<br>"."'r' occurs ".$count." times";
echo ($result);
?>