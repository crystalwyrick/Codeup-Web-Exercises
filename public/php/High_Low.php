<?php

$min = 1;
$max = 100;

if ($argc != 3) {
	die ("Incorrect number of arguments passed. Please enter a min and max" . PHP_EOL);
}
if ($argc == 3) {
	$min = $argv[1];
	$max = $argv[2];

	if (!((is_numeric($min)) && (is_numeric($max)))) {
		die ("Arguments representing min and mix must be numeric." . PHP_EOL);
	}
}

$tries = 0;
$number = mt_rand ($min , $max);
	if ($min > $max) {
		$number = mt_rand ($max , $min);
	}

	fwrite(STDOUT, "Guess a number between $min and $max " . PHP_EOL);
	
	do { 
		$userGuess = trim(fgets(STDIN));
		if (!is_numeric($userGuess)) {
			fwrite(STDOUT, 'You must guess a number ');
		} else {
			fwrite(STDOUT, 'Guess again ');
			if ($userGuess < $number ){
				fwrite(STDOUT, "but HIGHER\n");
			}
			if ($userGuess > $number ){
				fwrite(STDOUT, "but LOWER\n");
			}
			if ($userGuess == $number ){
				fwrite(STDOUT, "GOOD GUESS!\n");
			}
		}
		$tries++;

	} while ($userGuess != $number);


echo "Number of tries: $tries " . PHP_EOL;

exit(0);



