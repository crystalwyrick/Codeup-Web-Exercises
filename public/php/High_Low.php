<?php




// The specs for the game are:
$tries = 0;
$number = mt_rand (1 , 100);
echo "\$random value is $random" . PHP_EOL;
fwrite(STDOUT, 'Guess a number between 1 and 100 ');
	do { 
		$userGuess = trim(fgets(STDIN));
		if (!is_numeric($userGuess)) {
			fwrite(STDOUT, 'You must guess a number ');
		} else {

			fwrite(STDOUT, 'Guess again ');
			if ($userGuess < $number ){
				fwrite(STDOUT, "HIGHER\n");
			}
			if ($userGuess > $number ){
				fwrite(STDOUT, "LOWER\n");
			}
			if ($userGuess == $number ){
				fwrite(STDOUT, "GOOD GUESS!\n");
			}
		}
		$tries++;

	} while ($userGuess != $number);


echo "Number of tries: $tries " . PHP_EOL;

exit(0);

// game picks a random number between 1 and 100.
// prompts user to guess the number
// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"
// Hints:

// Using conditionals and loops here is important
// Random numbers can be made with the internal rand() function
// If user is right, tell them they won
// While they are wrong, give them hints and keep asking
// Use exit(0) to end the game
// If you get stuck in game, ctrl-c will exit.

