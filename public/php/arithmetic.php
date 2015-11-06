<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
	return $a * $b;
    // Refactor to use your add() function and a for() loop
function multiplyWithFor($a, $b)
    
    $sum = 0;
    for ($i=0; $i<$b; $i++) { 
    	$sum = $sum + $a;
    }
    return $sum;
}

function divide($a, $b)
{
    return $a/$b;
}

echo add (2,4) . PHP_EOL;
echo subtract (3,5) . PHP_EOL;
echo multiply (6,3) . PHP_EOL;
echo divide (6,3) . PHP_EOL;
echo modulus (6,3) . PHP_EOL;

/**
*
*
*/





