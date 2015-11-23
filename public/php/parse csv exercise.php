<?php

function parseContacts($filename)
{
	$employeeInfoArray = array();

    // add headers:
    // $headers = ['name', 'number'];
    // $contactsArray[] = $headers;

	$handle = fopen($filename, 'r');
	$employeeStrings = trim(fread($handle, filesize($filename)));
	fclose($handle);
	return $employeeStrings;
	// $linesInFile = explode("\n", $contentString);
}
var_dump(parseContacts('contacts.txt'));
// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2