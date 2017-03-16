<?php
for ($i = 1; $i <= 10; $i++) {
if ($i % 2 == 0) continue;
echo "The number is {$i}\n";
}

//it skips the echo statement when the number is divisible by 2 because of continue statement

?>
