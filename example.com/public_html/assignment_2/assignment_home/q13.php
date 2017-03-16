<?php
/* Write a PHP program which iterates the integers from 1 to 100. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz"*/
for ($i=1; $i <=100 ; $i++) { 
	if(($i%3==0)&&($i%5==0)){
		echo "FizzBuzz<br>";
		continue;
	}
	if($i%3==0)	echo " fizz<br>";
	else if($i%5==0) echo " buzz<br>";
}

?>