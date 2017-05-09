<?php
echo("<pre>");

$url='https://www.flipkart.com/moto-g5-plus-lunar-grey-32-gb/p/itmes2zjvwfncxxr';

$lines_string=file_get_contents($url);

$str= htmlspecialchars($lines_string);
$name_regex='/<script(.*)>(.*)<\/script>/U';

echo $str;

echo("</pre>");
?>