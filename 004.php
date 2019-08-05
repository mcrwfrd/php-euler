<?php
	// first try and brute force it
	// go through all the 3-digit numbers, starting from the highest
	// stop as soon as we hit a palindrome
	for ($i = 999; $i > 99; $i--) {


		for ($j = $i; $j > 99; $j--) {
			$product = $i * $j;
			if ($product > $result) {
				if (isPalindrome($product)) {
					$result = $product;
				}
			}
		}
	}
	
	echo $result . "\n"; 

	// a method to check if a number is a palindrome
	// a number is a palindrome if it reads the same both ways
	function isPalindrome($input) {

		$input = (string)$input;
		
		if (strlen($input) % 2 == 0) {
			$max = strlen($input)/2;
		} else {
			$max = (strlen($input) - 1) / 2;
		}

		for ($k = 0; $k < $max; $k++) {
			if (substr($input, $k, 1) !== substr($input, strlen($input) - 1 - $k, 1)) {
				return false;
			}
		}

		return true;
	}
?>
