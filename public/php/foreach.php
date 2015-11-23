<?php

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing1) {
	if (is_int($thing1)){
		echo "{$thing1} is an integer" . PHP_EOL;
	}
	if (is_float($thing1)){
		echo "{$thing1} is a float" . PHP_EOL;
	}
	if (is_bool($thing1)){
		echo "{$thing1} is a boolean" . PHP_EOL;
	}
	if (is_array($thing1)){
		echo "{$thing1} is an array" . PHP_EOL;
	}
	if (is_null($thing1)){
		echo "{$thing1} is null" . PHP_EOL;
	}
	if (is_string($thing1)){
		echo "{$thing1} is a string" . PHP_EOL;
	}
}

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.
echo "++++++++++++++++++" . PHP_EOL;
foreach ($things as $thing2) {
	if (is_scalar($thing2)){
		echo "{$thing2} is scalar" . PHP_EOL;
	}
}

// Create a loop that will echo out every value, 
// including those nested in arrays. Output should look like this.
echo "++++++++++++++++++" . PHP_EOL;
	foreach ($things as $thing3) {
		if (is_array($thing3)) {
			foreach ($thing3 as $stuff) {
				echo $stuff . PHP_EOL;
			}
		} else {
			echo $thing3 . PHP_EOL;
		}
	}



// is_array() - Checks if value is of type array
// is_bool() - Checks if value if of type boolean
// is_float() - Checks if value is of type float
// is_double() - alias of is_float()
// is_real() - alias of is_float()
// is_int() - Checks if value is of type integer
// is_integer() - alias of is_int()
// is_long() - alias of is_int()
// is_null() - Checks if value is of type null
// is_numeric() - Checks if value is of type float or integer
// is_scalar() - Checks if value is of type float, integer, string, or boolean
// is_string() - Checks if value is of type string



