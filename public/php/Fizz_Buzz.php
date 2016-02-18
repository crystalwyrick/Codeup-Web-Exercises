<?php

// Write a program that prints the numbers from 1 to 100. 
// But for multiples of three print “Fizz” instead of the 
// number and for the multiples of five print “Buzz”. 
// For numbers which are multiples of both three and 
// five print “FizzBuzz”. 

$number = 1;

for ($i=$number; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
    	echo "Fizz Buzz" . PHP_EOL;
    } else if ($i % 3 == 0) {
    	echo "Fizz" . PHP_EOL;
    } else if ($i % 5 == 0) {
    	echo "Buzz" . PHP_EOL;
    } else {
    	echo $i . PHP_EOL;
    }
}
?>
