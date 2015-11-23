<?php



fwrite(STDOUT, "Enter a starting number " . PHP_EOL);
	$startNumber = trim(fgets(STDIN));
	if (!is_numeric($startNumber)){
		die ("All entries must be a number" . PHP_EOL);
	}
fwrite(STDOUT, "Enter an ending number " . PHP_EOL);
	$endNumber = trim(fgets(STDIN));
	if (!is_numeric($startNumber)){
		die ("All entries must be a number" . PHP_EOL);
	}
fwrite(STDOUT, "Enter an incrementing amount" . PHP_EOL);
	$incrementor = trim(fgets(STDIN));
	if (!is_numeric($incrementor)|| $incrementor <=0) {
		$incrementor = 1;
	}

echo PHP_EOL;

for ($i=$startNumber; $i <= $endNumber; $i += $incrementor) {
    echo "$i\n";
}

// Prompt user for a starting number and ending number, 
// then display all the numbers from the starting to ending 
// using a for loop.

// Refactor to allow user to choose increment. 
// (count by 1, 2, 10, ...)

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. 
// Give an error message is both passed arguments are 
// not numeric. See php.net/is_numeric.