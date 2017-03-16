<?php
	$x = 1;
	$total = 0;
	while ( $x <= 10 ) {
		$y = $x * $x;
		print $y;
		$total += $y;
		++$x;
	}
	print("Total is".$total);
?>