<?php
/*Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:*/

$n1=5;
$n2=11;
$v1=1;
$v2=1;
for ($i=0; $i <=$n1; $i++) { 
	for ($j=0; $j < $i; $j++) { 
		echo $v1."&nbsp;";
		$v1++;
	}
	echo "<br>";
}

for ($x=0; $x <=$n2; $x++) { 
	for ($y=0; $y < $x; $y++) { 
		echo $v2."&nbsp;";
		$v2++;
	}
	echo "<br>";
}

?>