<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Tina'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Tina'];

// Using a For Loop:
function combineWithPush($names, $compare)
{
	$combined = [];
	for ($i=0 ; $i < count($compare); $i++ ) 
	{ 
		if ($names[$i] === $compare[$i]) 
		{
			array_push($combined, $names[$i]); 
		} else if ($names[$i] !== $compare[$i]) 
		{
			array_push($combined, $names[$i], $compare[$i]);
		}
	}
	print_r($combined);
}

combineWithPush($names, $compare);

// Using a Foreach Loop:
function combineWithPush($names, $compare)
{
	$combined = [];
	foreach ($names as $key => $person) {
		if ($person === $compare[$key]) 
		{
			array_push($combined, $person); 
		} 
		else if ($person !== $compare[$key]) 
		{
			array_push($combined, $person, $compare[$key]);
		}
	}
	print_r($combined);
}
combineWithPush($names, $compare);


