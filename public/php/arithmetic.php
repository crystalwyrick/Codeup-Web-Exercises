<?php

function errorMsg ($a_value, $b_value){
	return "ERROR: a:{$a_value} and b:{$b_value} arguments must be numbers\n";
}

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	return errorMsg ($a, $b);
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else {
    	return errorMsg ($a, $b);
    }
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {errorMsg ($a, $b);
    }
}
    // Refactor to use your add() function and a for() loop
function multiplyWithFor($a, $b)
{    
    $sum = 0;
    for ($i=0; $i<$b; $i++) { 
    	$sum = $sum + $a;
    }
    if (is_numeric($a) && is_numeric($b)) {
    	return $sum;
    } else {
    	return errorMsg ($a, $b);
    }
}

function divide($a, $b)
{
    if ($b == 0){
    	return "ERROR: Dividing by zero is not allowed\n";
    }
	if (is_numeric($a) && is_numeric($b)) {
    	return $a/$b;
    } else {
    	return errorMsg ($a, $b);
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a%$b;
	} else {
    	return errorMsg ($a, $b);
    }
}

echo add (6,3) . PHP_EOL;
echo subtract (6,3) . PHP_EOL;
echo multiply (6,3) . PHP_EOL;
echo divide (6,3) . PHP_EOL;
echo modulus (6,3) . PHP_EOL;

/**
*
*
*/





