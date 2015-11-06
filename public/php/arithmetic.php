<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	return $a * $b;
	} else {
    	return "ERROR: Both arguments must be numbers\n";
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
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    return $a/$b;
    } else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	return $a%$b;
	} else {
    	return "ERROR: Both arguments must be numbers\n";
    }
}

echo add (6,3) . PHP_EOL;
echo subtract (6,3) . PHP_EOL;
echo multiply (6,3) . PHP_EOL;
echo divide (6,3) . PHP_EOL;
echo modulus (a,3) . PHP_EOL;

/**
*
*
*/





