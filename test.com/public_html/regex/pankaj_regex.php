<?php
echo("<pre>");

$url='https://www.flipkart.com/moto-g5-plus-lunar-grey-32-gb/p/itmes2zjvwfncxxr';
$content=file_get_contents($url);

$str= htmlspecialchars($content);

$name_regex="/<ul data-reactid\=(.*)>(.*)<\/ul>/";
preg_match_all ($name_regex, $content, $result);

$mystring= htmlspecialchars($result[0][2]);
$pos=(strpos($mystring, 'button'))-4;
echo htmlspecialchars_decode(substr($mystring, 0,$pos));

echo("</pre>");
?>