<?php 
echo "Use one statement to decrement the variable x by 1, then subtract it from variable total and store the result in variable total .<br>";
$x=7;
$total=10;
//$x--;
$result=$total-(--$x);
echo "x=1,total=10<br>";
echo $result;

?>