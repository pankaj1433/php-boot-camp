<?php
//Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag

echo "<table cellpadding='3px' cellspacing='0px' border=1>";
for ($i=1; $i <=6; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=5; $j++) { 
		echo "<td>".$i."*".$j."=".$i*$j."</td>";
	}
	echo "</tr>";
}echo "</table>";
?>