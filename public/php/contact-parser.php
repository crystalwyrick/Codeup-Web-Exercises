<?php

// parse: to analyze a string of text into logical components based on rules of grammer and syntax.

function parseContacts($filename)
{
    $contactsArray = array();

    // add headers:
    // $headers = ['name', 'number'];
    // $contactsArray[] = $headers;

	$handle = fopen($filename, 'r');
	$contentString = trim(fread($handle, filesize($filename)));
	fclose($handle);
	$linesInFile = explode("\n", $contentString);

	foreach ($linesInFile as $personString) {
		$personArray = explode("|", $personString);

		$name = $personArray[0];
		$telephone = $personArray[1];

		// Alternate to **** code below ****created associative array with literal array notation:
		$contactsArray[] = [
			'name' => $name,
			'number' => $number
		];
		// Also:
		// $keys = ['name', 'number'];
		// $keyContactsArray = array_combine($keys, $personArray)

		// ***********
		$formatNumber = substr($telephone, 0, 3) . "-" . substr($telephone, 3, 3) . "-" . substr($telephone, -4);

		$newContact = [];
		$newContact['name'] = $name;
		$newContact['number'] = $formatNumber;

		$contactsArray[] = $newContact;

		// ************
	}

    return $contactsArray;
}

var_dump(parseContacts('contacts.txt'));
