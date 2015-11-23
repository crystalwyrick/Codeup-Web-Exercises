<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


// Some of the most famous fictional theoretical physicists are Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark.

$famousFakePhysicistsArray = explode(', ', $physicistsString);



// pop last index and assign it's own variable; concatonnate physicist list with last index




function humanizedList($array, $sorting = false)
{
	if ($sorting)
	{
		sort ($array);
	}
	$lastItem = array_pop($array);
	$string = implode(', ', $array) . ', and ' . $lastItem;
	return $string;
}
$famousFakePhysicistsString = humanizedList($famousFakePhysicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicistsString}." . PHP_EOL;

