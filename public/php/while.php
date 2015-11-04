<?php

$test = 1;

while ($test <= 100) {
	if ($test % 2 == 0) {
		echo "\$test is equal to {$test}" . PHP_EOL;
	}

	$test = $test += 1;
}
