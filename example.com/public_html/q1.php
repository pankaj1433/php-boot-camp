<?php
echo "<pre>";
$file = fopen("data.csv","r");
echo "<table border=1>";
while(! feof($file))
  {
  	$data=fgetcsv($file);
  	echo "<tr>";
  	echo "<td>".$data[0]."</td>";
  	echo "<td>".$data[1]."</td>";
  	echo "<td>".$data[2]."</td>";
  	echo "<td>".$data[3]."</td>";
  	echo "<td>".$data[4]."</td>";
  	echo "<td><input type='button' id='".$data[0]."e' value='edit'></td>";
  	echo "</tr>";
  }
fclose($file);
echo "</pre>";
?>