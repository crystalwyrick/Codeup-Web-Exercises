<?php

function validateFunctions($a, $b)
{
	if (is_numeric($a)) && is_numeric($b)
	{
		return true;
	}
	return false;
}

function validateZero($b)
{
	return $b == 0;
}

function errorMsg ($a, $b, $errorType)
{
switch ($errorType) 
{
	case 'non-numeric':
		echo "Error! Values given must be numeric! You gave {a} and {b}.\n"
		break;

	case 'divide by zero':
		echo "Error! You can't divide by zero! You gave {$a} and {$b}\n";
		break;
	
	default:
		return "Error not found.\n"
		break;
}

	return "ERROR: a:{$a_value} and b:{$b_value} arguments must be numbers\n";
}

function add($a, $b,)
{
	if (is_numeric($a) && is_numeric($b)) 
	{
    	return $a + $b;
    } 
    else 
    {
    	return errorMsg ($a, $b, 'non-numeric');
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 
	{
    	return $a - $b;
    } 
    else 
    {
    	return errorMsg ($a, $b, 'non-numeric');
    }
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		return $a * $b;
	} 
	else 
	{
		errorMsg ($a, $b, 'non-numeric');
    }
}
    // Refactor to use your add() function and a for() loop
function multiplyWithFor($a, $b, )
{    
    $sum = 0;
    for ($i=0; $i<$b; $i++) { 
    	$sum = $sum + $a;
    }
    if (is_numeric($a) && is_numeric($b)) {
    	return $sum;
    } 
    else 
    {
    	return errorMsg ($a, $b, 'non-numeric');
    }
}

function divide($a, $b)
{
    if (validateZero($b))
    {
    	return errorMsg($a, $b, 'divide by zero');
    }
    else if (validateNumbers($a, $b)) 
    {
    	return $a/$b;
    } 
    else 
    {
    	return errorMsg ($a, $b, 'non-numeric');
    }
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		return $a%$b;
	} 
	else 
	{
    	return errorMsg ($a, $b, 'non-numeric');
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





