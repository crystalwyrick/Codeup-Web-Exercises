<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Crystal'];

$compare = ['Tina', 'Dean', 'Mel', 'Michael', 'Amy', 'Crystal'];

// Search array for value:
	// $query = 'Ed';

	// $result = array_search($query, $names);
	
	// if (in_array($query,$names))
	// {
	// 	echo $names[$result];
	// }else{
	// 	echo "not found" . PHP_EOL;
	// }

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function lookInArray($element, $array)
{
	$result = array_search($element, $array);
	echo $result;
	if ($result !== false){
		return true;
	}else {
		return false;
	}
}
lookInArray('Greg', $names);

function compareArrayWithElement($element, $array1, $array2)
{
	$result1 = array_search($element, $array1);
	$result2 = array_search($element, $array2);
	if ($result1 === $result2 && $result1 !== false) {
		echo "{$element} found at index {$result1} in both arrays." . PHP_EOL;
		return true;
	} else if (is_numeric($result1) && is_numeric($result2)){
		echo "{$element} found at index {$result1} in the first array and index {$result2} in the second array." . PHP_EOL;
		return true;
	} else {
		return false;
	}
	
}

compareArrayWithElement('Mike', $names, $compare);
compareArrayWithElement('Tina', $names, $compare);
compareArrayWithElement('Ed', $names, $compare);
compareArrayWithElement('Amy', $names, $compare);
compareArrayWithElement('Crystal', $names, $compare);

// check out array_intersect($names, $compare);
// $result = array_interesct($names, $compare);


function compareArrays($newArray, $controlArray)
{
	$match = 0;
	foreach ($newArray as $singleElement) {
		$result = array_search($singleElement, $controlArray);
		if ($result !== false)
		{
			$match = $match + 1;
		}
	}
	echo "There were {$match} values in common." . PHP_EOL;
	return $match;
}

compareArrays($names, $compare);

// 	echo "TRUE\n";
// }
// else {
// 	echo "FALSE\n;"
// }
// $query = 'Tina';

// $result = array_search($query, $names);

// if ($result) {
//     echo $names[$result];
// }
// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().