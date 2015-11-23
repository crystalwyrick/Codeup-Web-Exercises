<?php

// function that reads the file
// function that rev=moves the first 6 lines of header ingres_fetch_object
// function that takes the lines of string daa and turns each one into an array of data- array is now an array of data
// function conts the total number of employees
// fundtion that adds up all the units sold by each employee into one total sum
// to find units sold, function divides the tital sum
// find avg nmr units sold, function divides the ttals

// research print f to line space and



function parseMonthlyReport($filename)
{
	$employeeInfoArray = array();


	$handle = fopen($filename, 'r');
	$employeeStrings = trim(fread($handle, filesize($filename)));
	fclose($handle);
	$employeeArray = explode("\n", $employeeStrings);

	for ($i=0;$i < 6; $i++) 
	{ 
		$topOfReportItems[] = array_shift($employeeArray);
	}
	// $employeeArray is the list of 11 entries
	// $personString is each individual line 
	// $personArray is $personString broken out into an array
	foreach ($employeeArray as $personString) {
		$personArray = explode(", ", $personString);

		$employeeNumber = $personArray[0];
		$firstName = $personArray[1];
		$lastName = $personArray[2];
		$salesUnits = $personArray[3];

		$individualSalesDataArray[] = [
			'employeeNumber' => $employeeNumber,
			'firstName' => $firstName,
			'lastName' => $lastName,
			'salesUnits' => $salesUnits
		];
	 //    add headers:
	 //    $headers = ['name', 'number'];
	 //    $contactsArray[] = $headers;
	}
		var_dump($individualSalesDataArray);
		// $keys = ['employeeNumber', 'firstName', 'lastName', 'salesUnits'];
		// $keyEmployeeArray = array_combine($keys, $personArray);
	// print_r($personArray);
	// return $employeeInfoArray;
}
parseMonthlyReport('report.txt');
// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2



