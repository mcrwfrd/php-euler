<?php
	$sum = 0;
	$fib = [0, 1];

	while ($currFib < 4000000) {
		$currFib = $fib[0] + $fib[1];
		
		if ($currFib % 2 == 0) {
			$sum += $currFib;
		}
		
		$fib[0] = $fib[1];
		$fib[1] = $currFib;

	}

	echo $sum;
?>