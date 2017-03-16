<?php
$month = 4;
$name = 'not in the list';
if ($month == 1) {
$name = 'January';
} else if ($month == 2) {
$name = 'February';
} elseif ($month == 3) {
$name = 'March';
}
echo "The month is $name";


echo "<br><br>Reason: month does not satisfy any of the conditions so its value is not updated and it prints 'not in the list' ";
?>