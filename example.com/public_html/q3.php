<?php
//echo "<pre>";
$arr=[1,2,3,2,4,5,1,10,11,10,1,4,5,6,12,1,14,13,15,17,16,20,18,19,5,4,3,2,1,9,8,7,9];




echo "<br>get unique elements<br>";
$uni=array_unique($arr);
print_r($uni);

echo "<br><br>";
echo "<br>last element is : <br>".end($arr);

echo "<br><br>";
echo "<br>second last element is :<br>".$arr[count($arr)-2];

echo "<br><br>";
echo "<br>first element is : <br>".$arr[0];

echo "<br><br>";
echo "<br>second element is : <br>".$arr[1];

echo "<br><br>";
echo "<br>greatest element is : <br>".max($arr);

echo "<br><br>";
echo "<br>smallest element is : <br>".min($arr);

echo "<br><br>";
echo "<br>sum of all values except the highest value is : <br>".(array_sum($arr)-max($arr));

echo "<br><br>";
echo "<br>sort in reverse order<br>";
rsort($arr);
print_r($arr);



//echo "</pre>";

?>