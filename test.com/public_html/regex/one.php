<?php
echo("<pre>");

$url='https://www.flipkart.com/moto-g5-plus-lunar-grey-32-gb/p/itmes2zjvwfncxxr';
$content=file_get_contents($url);

$str= htmlspecialchars($content);
$name_regex="/<div(.*)><div(.*)><span(.*)><span(.*)>Specifications<\/span><\/span><\/div>(.*)<\/div>/";
//$name_regex="/<ul data-reactid\=(.*)>(.*)<\/ul>/";

preg_match_all ($name_regex, $content, $pat_array);
print_r($pat_array);

/*
$mystring= htmlspecialchars($pat_array[0][2]);
$pos=(strpos($mystring, 'button'))-4;
echo htmlspecialchars_decode(substr($mystring, 0,$pos));
*/


echo("</pre>");
?>