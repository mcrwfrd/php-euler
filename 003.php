<?php
	// Fundamental Theorem of Arithmetic:
	// Any integer > 1 is either prime or can be written
	// as a unique product of prime numbers.
	$dividend = 600851475143; 
	$largestFactor = 0;

	$counter = 2;
	while ($counter * $counter <= $dividend) {
		if ($dividend % $counter == 0) { 
			$dividend = $dividend / $counter;
			$largestFactor = $counter;
		} else {
			$counter++;
		}
	}
	if ($dividend > $largestFactor) {
		$largestFactor = $dividend;
	}

	echo $largestFactor;
?>